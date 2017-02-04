<?php

namespace TCG\Voyager\Database\Schema;

use Doctrine\DBAL\Schema\TableDiff;
use Doctrine\DBAL\Schema\Table as DoctrineTable;
use Doctrine\DBAL\Schema\Column as DoctrineColumn;
use Doctrine\DBAL\Schema\Index as DoctrineIndex;
use Doctrine\DBAL\Schema\ForeignKeyConstraint as DoctrineForeignKey;
use Doctrine\DBAL\Schema\SchemaException;
use Doctrine\DBAL\Types\Type;
use Illuminate\Support\Facades\DB;

abstract class SchemaManager
{
    // todo: trim parameters

    public static function __callStatic($method, $args)
    {
        return static::manager()->$method(...$args);
    }

    public static function manager()
    {
        return DB::connection()->getDoctrineSchemaManager();
    }

    public static function tableExists($table)
    {
        if (!is_array($table)) {
            $table = [$table];
        }

        return static::manager()->tablesExist($table);
    }

    public static function listTables()
    {
        $tables = [];

        foreach (static::manager()->listTableNames() as $tableName) {
            $tables[$tableName] = static::listTableDetails($tableName);
        }

        return $tables;
    }

    /**
     * @param string $tableName
     *
     * @return \TCG\Voyager\Database\Schema\Table
     */
    public static function listTableDetails($tableName)
    {
        $columns = static::manager()->listTableColumns($tableName);

        $foreignKeys = [];
        if (static::manager()->getDatabasePlatform()->supportsForeignKeyConstraints()) {
            $foreignKeys = static::manager()->listTableForeignKeys($tableName);
        }
        
        $indexes = static::manager()->listTableIndexes($tableName);

        return new Table($tableName, $columns, $indexes, $foreignKeys, false, []);
    }

    public static function createTable($table)
    {
        if (!($table instanceof DoctrineTable)) {
            $table = Table::make($table);
        }

        static::manager()->createTable($table);
    }

    public static function getDoctrineTable($table)
    {
        $table = trim($table);

        if (!static::tableExists($table)) {
            throw SchemaException::tableDoesNotExist($table);
        }

        return static::manager()->listTableDetails($table);
    }

    public static function getDoctrineColumn($table, $column)
    {
        return static::getDoctrineTable($table)->getColumn($column);
    }

    public static function getDatabasePlatformTypes()
    {
        // Get type names for the current database platform
        // The problem is that platform type names are stored in a protected property
        // so we need a way to get them...
        return ((array) static::manager()->getDatabasePlatform())[chr(0).'*'.chr(0).'doctrineTypeMapping'];
    }
}

<?php

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_type_id' => 1,
                'field' => 'id',
                'type' => 'PRI',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'data_type_id' => 1,
                'field' => 'author_id',
                'type' => 'text',
                'display_name' => 'Author',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'data_type_id' => 1,
                'field' => 'title',
                'type' => 'text',
                'display_name' => 'Title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'data_type_id' => 1,
                'field' => 'excerpt',
                'type' => 'text_area',
                'display_name' => 'excerpt',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'data_type_id' => 1,
                'field' => 'body',
                'type' => 'rich_text_box',
                'display_name' => 'Body',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'data_type_id' => 1,
                'field' => 'image',
                'type' => 'image',
                'display_name' => 'Post Image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{
"resize": {
"width": "1000",
"height": "null"
},
"quality": "70%",
"upsize": true,
"thumbnails": [
{
"name": "medium",
"scale": "50%"
},
{
"name": "small",
"scale": "25%"
},
{
"name": "cropped",
"crop": {
"width": "300",
"height": "250"
}
}
]
}',
            ),
            6 => 
            array (
                'id' => 7,
                'data_type_id' => 1,
                'field' => 'slug',
                'type' => 'text',
                'display_name' => 'slug',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'data_type_id' => 1,
                'field' => 'meta_description',
                'type' => 'text_area',
                'display_name' => 'meta_description',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'data_type_id' => 1,
                'field' => 'meta_keywords',
                'type' => 'text_area',
                'display_name' => 'meta_keywords',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'data_type_id' => 1,
                'field' => 'status',
                'type' => 'select_dropdown',
                'display_name' => 'status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{
"dropdown": {
"PUBLISHED": "published",
"DRAFT": "draft",
"PENDING": "pending"
}
}',
            ),
            10 => 
            array (
                'id' => 11,
                'data_type_id' => 1,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'created_at',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'data_type_id' => 1,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'updated_at',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            12 => 
            array (
                'id' => 24,
                'data_type_id' => 3,
                'field' => 'id',
                'type' => 'PRI',
                'display_name' => 'id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            13 => 
            array (
                'id' => 25,
                'data_type_id' => 3,
                'field' => 'author_id',
                'type' => 'text',
                'display_name' => 'author_id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            14 => 
            array (
                'id' => 26,
                'data_type_id' => 3,
                'field' => 'title',
                'type' => 'text',
                'display_name' => 'title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            15 => 
            array (
                'id' => 27,
                'data_type_id' => 3,
                'field' => 'excerpt',
                'type' => 'text_area',
                'display_name' => 'excerpt',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            16 => 
            array (
                'id' => 28,
                'data_type_id' => 3,
                'field' => 'body',
                'type' => 'rich_text_box',
                'display_name' => 'body',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            17 => 
            array (
                'id' => 29,
                'data_type_id' => 3,
                'field' => 'slug',
                'type' => 'text',
                'display_name' => 'slug',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            18 => 
            array (
                'id' => 30,
                'data_type_id' => 3,
                'field' => 'meta_description',
                'type' => 'text',
                'display_name' => 'meta_description',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            19 => 
            array (
                'id' => 31,
                'data_type_id' => 3,
                'field' => 'meta_keywords',
                'type' => 'text',
                'display_name' => 'meta_keywords',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            20 => 
            array (
                'id' => 32,
                'data_type_id' => 3,
                'field' => 'status',
                'type' => 'text',
                'display_name' => 'status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            21 => 
            array (
                'id' => 33,
                'data_type_id' => 3,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'created_at',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            22 => 
            array (
                'id' => 34,
                'data_type_id' => 3,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'updated_at',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            23 => 
            array (
                'id' => 35,
                'data_type_id' => 3,
                'field' => 'image',
                'type' => 'image',
                'display_name' => 'image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            24 => 
            array (
                'id' => 36,
                'data_type_id' => 4,
                'field' => 'id',
                'type' => 'PRI',
                'display_name' => 'id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            25 => 
            array (
                'id' => 37,
                'data_type_id' => 4,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            26 => 
            array (
                'id' => 38,
                'data_type_id' => 4,
                'field' => 'email',
                'type' => 'text',
                'display_name' => 'email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            27 => 
            array (
                'id' => 39,
                'data_type_id' => 4,
                'field' => 'password',
                'type' => 'password',
                'display_name' => 'password',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            28 => 
            array (
                'id' => 40,
                'data_type_id' => 4,
                'field' => 'remember_token',
                'type' => 'text',
                'display_name' => 'remember_token',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            29 => 
            array (
                'id' => 41,
                'data_type_id' => 4,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'created_at',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            30 => 
            array (
                'id' => 42,
                'data_type_id' => 4,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'updated_at',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            31 => 
            array (
                'id' => 43,
                'data_type_id' => 4,
                'field' => 'avatar',
                'type' => 'image',
                'display_name' => 'avatar',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            32 => 
            array (
                'id' => 44,
                'data_type_id' => 6,
                'field' => 'id',
                'type' => 'PRI',
                'display_name' => 'id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            33 => 
            array (
                'id' => 45,
                'data_type_id' => 6,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            34 => 
            array (
                'id' => 46,
                'data_type_id' => 6,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'created_at',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            35 => 
            array (
                'id' => 47,
                'data_type_id' => 6,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'updated_at',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            36 => 
            array (
                'id' => 48,
                'data_type_id' => 5,
                'field' => 'id',
                'type' => 'PRI',
                'display_name' => 'id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            37 => 
            array (
                'id' => 49,
                'data_type_id' => 5,
                'field' => 'parent_id',
                'type' => 'text',
                'display_name' => 'parent_id',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            38 => 
            array (
                'id' => 50,
                'data_type_id' => 5,
                'field' => 'order',
                'type' => 'text',
                'display_name' => 'order',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            39 => 
            array (
                'id' => 51,
                'data_type_id' => 5,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            40 => 
            array (
                'id' => 52,
                'data_type_id' => 5,
                'field' => 'slug',
                'type' => 'text',
                'display_name' => 'slug',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            41 => 
            array (
                'id' => 53,
                'data_type_id' => 5,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'created_at',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '',
            ),
            42 => 
            array (
                'id' => 54,
                'data_type_id' => 5,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'updated_at',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            43 => 
            array (
                'id' => 61,
                'data_type_id' => 8,
                'field' => 'id',
                'type' => 'PRI',
                'display_name' => 'id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            44 => 
            array (
                'id' => 62,
                'data_type_id' => 8,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            45 => 
            array (
                'id' => 63,
                'data_type_id' => 8,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'created_at',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            46 => 
            array (
                'id' => 64,
                'data_type_id' => 8,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'updated_at',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
            ),
            47 => 
            array (
                'id' => 65,
                'data_type_id' => 8,
                'field' => 'display_name',
                'type' => 'text',
                'display_name' => 'Display Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            48 => 
            array (
                'id' => 66,
                'data_type_id' => 1,
                'field' => 'seo_title',
                'type' => 'text',
                'display_name' => 'seo_title',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
            49 => 
            array (
                'id' => 67,
                'data_type_id' => 1,
                'field' => 'featured',
                'type' => 'checkbox',
                'display_name' => 'featured',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
            ),
        ));
        
        
    }
}

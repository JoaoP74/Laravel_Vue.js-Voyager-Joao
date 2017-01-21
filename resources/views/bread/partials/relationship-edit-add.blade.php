<script id="realtionship-edit-add" type="text/x-jquery-template">
<tr>
    <td>
        <select class="form-control select2" name="{{ $row->field }}[]">
            @foreach($relationshipOptions as $relationshipOption)
                <option value="{{ $relationshipOption->{$options->relationship->key} }}" @if(in_array($relationshipOption->{$options->relationship->key}, $selected_values)){{ 'selected="selected"' }}@endif>{{ $relationshipOption->{$options->relationship->label} }}</option>
            @endforeach
        </select>
    </td>
    @foreach ($options->relationship->editablePivotFields as $pivotField)
    <td><input type="text" name="pivot_{{$pivotField}}[]" class="form-control" placeholder="{{ $pivotField }}" value=""></td>
    @endforeach
</tr>
</tr>
</script>
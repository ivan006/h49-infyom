<!-- Status Flag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_flag', 'Status Flag:') !!}
    {!! Form::text('status_flag', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_note', 'Status Note:') !!}
    {!! Form::text('status_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('searches.index') }}" class="btn btn-default">Cancel</a>
</div>

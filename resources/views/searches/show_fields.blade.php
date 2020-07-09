<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $search->id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $search->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $search->updated_at }}</p>
</div>

<!-- Status Flag Field -->
<div class="form-group">
    {!! Form::label('status_flag', 'Status Flag:') !!}
    <p>{{ $search->status_flag }}</p>
</div>

<!-- Status Note Field -->
<div class="form-group">
    {!! Form::label('status_note', 'Status Note:') !!}
    <p>{{ $search->status_note }}</p>
</div>


<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $locationScope->id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $locationScope->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $locationScope->updated_at }}</p>
</div>

<!-- Coords Field -->
<div class="form-group">
    {!! Form::label('coords', 'Coords:') !!}
    <p>{{ $locationScope->coords }}</p>
</div>


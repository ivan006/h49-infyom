<!-- Coords Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('coords', 'Coords:') !!}
    {!! Form::textarea('coords', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('locationScopes.index') }}" class="btn btn-default">Cancel</a>
</div>

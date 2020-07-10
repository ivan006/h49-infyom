<!-- Source Place Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('source_place_id', 'Source Place Id:') !!}
    {!! Form::text('source_place_id', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Linkedin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linkedin', 'Linkedin:') !!}
    {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_website', 'Company Website:') !!}
    {!! Form::text('company_website', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Industry Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_industry', 'Company Industry:') !!}
    {!! Form::text('company_industry', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Founded Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_founded', 'Company Founded:') !!}
    {!! Form::text('company_founded', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_size', 'Company Size:') !!}
    {!! Form::text('company_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Linkedin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_linkedin', 'Company Linkedin:') !!}
    {!! Form::text('company_linkedin', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Headquarters Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_headquarters', 'Company Headquarters:') !!}
    {!! Form::text('company_headquarters', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contacts.index') }}" class="btn btn-default">Cancel</a>
</div>

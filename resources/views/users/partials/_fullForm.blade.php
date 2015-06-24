<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <!-- element name, default value, additional parameters -->
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::input('password', 'password', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'e-mail:') !!}
    <!-- type, element name, default value, additional parameters -->
    {!! Form::input('email', 'email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Full Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('contact', 'Phone number:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
@extends('home')

@section('content')
    <h1>Update details</h1>

    <hr/>

    @include('errors._list')

    <!--
    -- to use this form function we need to pull down with composer
    -- illuminate/html package. Also we need to register it in file
    -- config/app.php in providers section: Illuminate\Html\HtmlServiceProvider::class
    -- also in aliases section we have added: 'Form' => Illuminate\Html\FormFacade::class,
    --                                        'Html' => Illuminate\Html\HtmlFacade::class,
    -->
    <!--
    -- will open a new form  that has data loaded to fields (called form model binding)
    -- The data is loaded from the object that we pass (our Model) and the landing
    -- page for post will be root/users/{$id} with PATCH method request because that is
    -- where we are sending the post in routes.php
    -->
    {!! Form::model($user, ['method' => 'PATCH', 'url' => 'users/' .$user->id]) !!}
        @include('users.partials._fullForm', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
@endsection
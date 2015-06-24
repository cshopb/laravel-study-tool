@extends('home')

@section('content')
    <h1>Please register</h1>

    <hr/>

    @include('errors._list')

    <!--
    -- to use this form function we need to pull down with composer
    -- illuminate/html package. Also we need to register it in file
    -- config/app.php in providers section: Illuminate\Html\HtmlServiceProvider::class
    -- also in aliases section we have added: 'Form' => Illuminate\Html\FormFacade::class,
    --                                        'Html' => Illuminate\Html\HtmlFacade::class,
    -->
    <!-- will open a new form and the landing page for post will be              --
      -- root/users  because that is where we are sending the post in routes.php -->
        {!! Form::open(['url' => 'users']) !!}
            @include('users.partials._fullForm', ['submitButtonText' => 'Register'])
        {!! Form::close() !!}
@endsection
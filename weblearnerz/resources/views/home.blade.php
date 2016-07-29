@extends('layouts.app')
@section('title','| Home')
@section('content')
   @include('layouts._error')
    <header>
    <div class="jumbotron">
        <h1>Welcome to Laravel-Blog</h1>
        <pre>
            This is a simple laravel-blog.
            Properties:
                -Post Add-Update-Delete
                -User register-activation-login-forgotten password-reset password
                -Comment Add-Delete
                -Language Add-Delete
                -Post attach Language and detach
                -Tags Add-Delete
                -Post attach Tag and detach
                -Search with filter
            Usage Programming Tools
                -Html
                -Css
                -Bootstrap
                -Jquery
                -Mysql
                -Laravel
        </pre>
    </div>
    </header>
@endsection

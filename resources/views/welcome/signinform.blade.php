@extends('layouts.master')
@section('title')
    Sign Up
    @endsection
@section('content')
    <div class="col-md-4 col-md-offset-4">
        {{Form::open(['url'=>'signup','method'=>'post','class'=>'form'])}}
        <div class="form-group {{$errors->has('username') ? 'has-error':''}}">
            {{Form::label('username','Pick  username')}}
            {{Form::text('username',Request::old('username'),['placeholder'=>'Username','class'=>'form-control'])}}
        </div>

        <div class="form-group {{$errors->has('username') ? 'has-error':''}}">
            {{Form::label('email','Email')}}
            {{Form::text('email',Request::old('email'),['placeholder'=>'Email','class'=>'form-control'])}}
        </div>
        <div class="form-group {{$errors->has('password') ? 'has-error':''}}">

            {{Form::label('password','Password')}}
            {{Form::password('password',['placeholder'=>'Password','class'=>'form-control'])}}
        </div>

    {{Form::submit('Sign Up',['id'=>'login-button','class'=>'btn btn primary'])}}
    {{Form::close()}}
    </div>
    @endsection
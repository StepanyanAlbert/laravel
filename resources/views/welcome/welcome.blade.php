@extends('layouts.master')
@section('title')
    Welcome!!
    @endsection
<div class="container-fluid">
    @section('content')

        <div class="col-md-2 col-md-offset-5">
            {{Form::open(['url'=>'signin','method'=>'post','class'=>'form'])}}
            <div class="form-group {{$errors->has('username') ? 'has-error':''}}">
                {{Form::label('username','Username')}}
                {{Form::text('username',Request::old('username'),['placeholder'=>'Username','class'=>'form-control'])}}
            </div>
            <div class="form-group {{$errors->has('password') ? 'has-error':''}}">

                {{Form::label('password','Password')}}
                {{Form::password('password',['placeholder'=>'Password','class'=>'form-control'])}}
            </div>

                {{Form::submit('Sign In',['id'=>'login-button','class'=>'btn btn primary'])}}
                {{Form::close()}}

        </div>
    @endsection
</div>

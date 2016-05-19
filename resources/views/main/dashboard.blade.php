@extends('layouts.master')
@section('title')

@endsection

@section('content')
    <div class="col-md-4 col-md-offset-4">
        {{Form::open(['url'=>'createbook','method'=>'post','files'=>true,'class'=>'form'])}}
        <div class="form-group {{$errors->has('title') ? 'has-error':''}}">
            {{Form::label('title','Title')}}
            {{Form::text('title',Request::old('title'),['placeholder'=>'Title','class'=>'form-control'])}}
        </div>

        <div class="form-group {{$errors->has('brief') ? 'has-error':''}}">
            {{Form::label('brief','Brief introduction')}}
            {{Form::textarea('brief',Request::old('brief'),['placeholder'=>'Brief introduction','class'=>'form-control'])}}
        </div>
        <div class="form-group {{$errors->has('password') ? 'has-error':''}}">
            {{Form::label('image','Choose a cover')}}
            {!! Form::file('image') !!}
        </div>

        {{Form::submit('Create book',['id'=>'login-button','class'=>'btn btn primary'])}}
        {{Form::close()}}

    </div>

@endsection
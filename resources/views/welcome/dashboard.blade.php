@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container">
        @if ($name)
            {{$name}}
            @endif

    </div>
    @endsection
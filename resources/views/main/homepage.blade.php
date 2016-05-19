@extends('layouts.master')
@section('title')
Homepage
@endsection
  @section('content')
        <div class="col-md-8 col-md-offset-4 ">
        <h2 class="watchbook ">List of your books</h2>

           @foreach($books as $book)
                <article>Book title -->{{$book->title}}</article>
                <article>Book brief_intro -->{{$book->brief_intro}}</article>

                <article><img src='{{url('images/'.$book->cover)}}'  class="img-responsive" id='image' alt="bookcover"></article>

               @endforeach
@endsection
</div>
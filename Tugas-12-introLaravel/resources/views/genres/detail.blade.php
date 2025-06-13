@extends("layouts.layout")
@section("title")
    Detail Genres
@endsection
@section("content")
   <h1>{{$genre->name}}</h1>
   <p>{{$genre->description}}</p>
   <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
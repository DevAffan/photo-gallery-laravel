@extends('layouts.app')

@section('content')

<h1>{{$photo->title}}</h1>
<a href="/albums/{{$photo->album->id}}" class="btn btn-secondary m-2">Back</a>
<form action="{{route('photos.destroy' , $photo->id)}}" method="post">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger m-2">Delete</button>
</form>
<div>
    <img src="/storage/albums/{{$photo->album->id}}/{{$photo->photo}}" alt="" height="500px">
</div>

@endsection

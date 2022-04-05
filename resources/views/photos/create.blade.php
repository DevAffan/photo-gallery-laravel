@extends('layouts.app')

@section('content')

<h1>Create Photo</h1>
<form action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Photo</label>
        <input type="file" class="form-control" id="photo" name="photo">
      </div>
      <input type="hidden" name="album_id" value="{{$album_id}}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

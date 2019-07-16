@extends('layouts.main')

@section('title', 'index')

@section('content')
  @if (Auth::user()->id != $user)
    <script>window.location.href = "{{ route('posts.index',['user'=>Auth::user()->id]) }}";</script>
  @endif
  <div class="container">
    <form action="{{ route('posts.store',['user'=>$user]) }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="textInput">Titulo del post</label>
        <input type="text" class="form-control" id="textInput" aria-describedby="TitleHelp" placeholder="Titulo" name="title">
        {{-- <small id="TitleHelp" class="form-text text-muted">Titulo de tu post</small> --}}
      </div>

      <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="content"></textarea>
        </div>

        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
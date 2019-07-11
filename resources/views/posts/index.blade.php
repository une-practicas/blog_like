@extends('layouts.main')

@section('title', 'index')

@section('content')
     <div class="container">
    {{-- @foreach ($post as $posts) --}}
    @php
    $i = 0;
    $open = False;
    @endphp
    @foreach ($posts as $post)
        @if ($i%2 == 0)
            <div class="row">
            @php
                $open = True;
            @endphp
        @endif
        <div class="col-sm">
            {{-- <div class="row"> --}}
                <div>{{$post->title}}</div>
                <div>{{$post->content}}</div>
            <form action="{{URL::to('/')}}/users/{{$user}}/posts/{{$post->id}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit">Borrar</button>
            </form>
            {{-- </div> --}}
        </div>
        @if ($i%2 != 0)
            </div>
            @php
            $open = False;
            @endphp
        @endif  
        @php
            $i = $i+1    
        @endphp
    @endforeach
    @if ($open)
        </div>
    @endif

</div>

   @endsection
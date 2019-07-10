<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <h1>Lista fumetti</h1>
    <div class="comics-wrapper">
      @foreach ($comics as $comic)

        <div class="comics-cards">
          <h2>{{$comic->title}}</h2>
          <img src="{{$comic->cover}}" alt="{{$comic->title}}">
          <div>
            <a href="{{route('comics.show', $comic)}}">Vai al fumetto</a>
          </div>
        </div>

      @endforeach
    </div>

  </body>
</html>

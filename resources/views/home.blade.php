<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <title>laravel_model_controller</title>
</head>
<body>
  <div class="container-fluid">
    <div class="container">
      <div class="card-wrapper">
        @foreach($movies as $movie)
          <div class="card">
            <ul>
              <li>
                <h2 class="title">{{$movie['title']}}</h2>
                <h4 class="original-title"> {{$movie['original_title']}} </h4>
                <p>date: {{$movie['date']}}</p>
                <p>vote: {{$movie['vote']}} </p>
              </li>
            </ul>
          </div>
        @endforeach
      </div>
    </div>
  </div>

</body>
</html>
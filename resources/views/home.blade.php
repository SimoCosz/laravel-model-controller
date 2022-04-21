<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel_model_controller</title>
</head>
<body>
  
  <ul>
    @foreach($movies as $movie)
    <div class="card-wrapper">
      <li>
        {{$movie['title']}}
      </li>
    </div>
    @endforeach
  </ul>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index de sílabo</title>
</head>
<body>
  <a href="{{route('upload')}}">Create a new syllable</a>
  <ul>
    @forelse ($syllables as $syllable)
      <li>
        <a href="#">{{$syllable->syllable}}</a>
      </li>
        
    @empty
        <p>No data</p>
    @endforelse
  </ul>
</body>
</html>
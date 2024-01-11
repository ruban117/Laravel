<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  @vite('resources/css/app.css')
</head>
<body>
  @foreach ($data as $key=>$value)
      <p>Name:- {{$value->name}}</p>
      <p>Email:- {{$value->email}}</p>
      <p>Phone:- {{$value->phone}}</p>
      <p>Address:- {{$value->address}}</p>
  @endforeach
</body>
</html>
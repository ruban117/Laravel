<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
    {{-- <h1> Name:- {{ $name }}</h1>
    <h1> City:- {{ $city }}</h1>
    {!! $alert  !!} --}}

    @foreach ($user as $id=>$v)
        <p>Id:- {{ $id }} | Name:- {{ $v['name'] }} | Contact:- {{ $v['phone'] }} | City:- {{ $v['city'] }}
        <a href="{{ route('users.view',$id) }}">Show</a></p>
    @endforeach

</body>
</html>
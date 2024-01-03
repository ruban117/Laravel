<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('style')
    <title>Document</title>
</head>
<body>
    <h1>Header Section</h1>

    @yield('content')

    <h1>Footer Section</h1>

    @stack('scripts')
</body>
</html>


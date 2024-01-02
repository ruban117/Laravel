<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Ruban - @yield('title')</title>
</head>
<body>
  <div class="box h-[500px] w-[900px] border mx-auto my-32 border-black">
    <div class="title  h-24 flex items-center bg-pink-200">
      <h1 class="text-2xl px-4 font-bold">Ruban Pathak</h1>
    </div>
    <div class="navs h-8 bg-green-300 flex items-center space-x-4">
      <a href=""></a>
      <a href="/home" class="underline">Home</a>
      <p>|</p>
      <a href="/about" class="underline">About</a>
      <p>|</p>
      <a href="/post" class="underline">Post</a>
    </div>
    <div class="content flex h-80">
      <div class="content w-[80%] space-x-4 space-y-8">
        <p></p>
        @yield('content')
      </div>
      <div class="content bg-yellow-300 w-[20%]">
        <ul class="space-x-8 space-y-4 list-disc font-bold">
          <p></p>
          <li><a href="/home" class="underline">Home</a></li>
          <li><a href="/about" class="underline">About</a></li>
          <li><a href="/post" class="underline">Post</a></li>
        </ul>
      </div>
    </div>

    <div class="footer h-[10%] bg-green-300 space-x-4">
      <p></p>
      <p class="py-4">&copy Ruban Pathak @ 2024 All Rights Reserved</p>
    </div>
  </div>
</body>
</html>
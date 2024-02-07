<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <form method="POST" action="{{ route('add') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uemail">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your City</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ucity">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="upass">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

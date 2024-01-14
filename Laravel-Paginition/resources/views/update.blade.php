<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update User</title>
  </head>
  <body>
    <div class="container my-4">
        <h1 class="my-4">Update Users Here</h1>
        <form method="post" action="{{ route('update',$data->id) }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputPassword1" name="useremail" value="{{ $data->email }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="userage"  value="{{ $data->age }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">City</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="usercity" value="{{ $data->city }}">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </body>
</html>
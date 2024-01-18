<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <h1>Form Validations</h1>
        <form method="POST" action="{{ route('adduser') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="{{ old('username') }}">
              <span class="text-danger">
                @error('username')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email Address</label>
              <input class="form-control @error('useremail') is-invalid @enderror" id="exampleInputPassword1" name="useremail" value="{{ old('useremail') }}">
              <span class="text-danger">
                @error('useremail')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input class="form-control @error('userage') is-invalid @enderror" id="exampleInputPassword1" name="userage" value="{{ old('userage') }}">
                <span class="text-danger">
                    @error('userage')
                        {{ $message }}
                    @enderror
                  </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">User City</label>
                <input class="form-control @error('usercity') is-invalid @enderror" id="exampleInputPassword1" name="usercity" value="{{ old('usercity') }}">
                <span class="text-danger">
                    @error('usercity')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
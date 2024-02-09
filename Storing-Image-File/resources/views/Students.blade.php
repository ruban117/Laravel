<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Storage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
  <!-- Add Student Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="uemail">
                </div>
                <div class="mb-3">
                    <label for="exampleInputFile" class="form-label">Your Avatar</label>
                    <input type="file" class="form-control" id="exampleInputFile" name="upic">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
    <div class="container my-5">
        <h1>List Of Students</h1>
        <button type="button" class="btn btn-success my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Student</button>
    </div>
    <div class="container my-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($students as $key=>$value)
              <tr>
                <td>{{ $i }}</td>
                <td><img src="/storage/{{ $value->avatar }}" height="60" width="60" alt="" class="rounded-circle"></td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
              </tr>
              @php
                $i++;
              @endphp
              @endforeach
            </tbody>
          </table>
          {{$students->links('pagination::bootstrap-5')}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

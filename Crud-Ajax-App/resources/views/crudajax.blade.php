<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

  </head>
  <body>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <h2>CRUD APP Using Laravel And Ajax</h2>
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h1 class="text-light">Manage Students</h1>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                            <i class="bi-plus-circle me-2"></i>Add New Student
                        </button>
                    </div>
                    <div class="card-body" id="show_all_students">
                      <h1 class="text-center text-secondary my-5">Loading......</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Employee -->
 <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" id="add_student_form" enctype="multipart/form-data">
          @csrf
          <div class="modal-body p-4 bg-light">
            <div class="row">
              <div class="col-lg">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="First Name" required>
              </div>
              <div class="col-lg">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
              </div>
            </div>
            <div class="my-2">
              <label for="email">E-Mail</label>
              <input type="email" name="email" class="form-control" placeholder="E-Mail" required>
            </div>
            <div class="my-2">
              <label for="image">Your Avatar</label>
              <input type="file" name="image" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add_student_btn" class="btn btn-primary">Add Student</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="
  https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
  "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>


        $(document).ready(function(){
        // Function to fetch all students
        function fetchAllStudents() {
            $.ajax({
                type: "GET",
                url: "{{ route('fetchAll') }}", // Change to your Laravel route
                success: function(response){
                    $("#show_all_students").html(response);
                },
                error: function(error){
                    console.log(error.responseText);
                }
            });
        }

        // Initial fetch when the page loads
        fetchAllStudents();

        // Submit form to add new student
        $('#add_student_form').submit(function(event){
            event.preventDefault();
            var form = $("#add_student_form")[0];
            var data = new FormData(form);
            $("#add_student_btn").prop("disabled", true);
            $.ajax({
                type: "post",
                url: "{{ route('store') }}",
                data: data,
                processData: false,
                contentType: false,
                success: function(data){
                    Swal.fire({
                        title: "Success!",
                        text: "Student Created Successfully!",
                        icon: "success"
                    });
                    $("#add_student_btn").prop("disabled", false);
                    $('#addEmployeeModal').modal('hide');
                    // Fetch all students again after adding a new one
                    fetchAllStudents();
                    $('#add_student_form')[0].reset();
                },
                error: function(e){
                    console.log(e.responseText);
                    $("#add_student_btn").prop("disabled", false);
                }
            })
        })
    });
    </script>
  </body>
</html>

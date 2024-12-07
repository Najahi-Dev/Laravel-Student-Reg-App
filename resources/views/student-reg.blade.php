<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .bg-dark {
            background-color: #343a40 !important;
        }
        .bg-info {
            background-color: #6f42c1 !important;
        }
        h2, h3 {
            color: #343a40;
        }
        .form-control {
            border-radius: 0.5rem;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #17a2b8;
            box-shadow: 0 0 5px rgba(23, 162, 184, 0.5);
        }
        .btn-dark {
            background-color: #343a40;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-dark:hover {
            background-color: #23272b;
        }
        .list-group-item {
            transition: background-color 0.3s;
        }
        .list-group-item:hover {
            background-color: #e9ecef;
        }
        .container-fluid {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-check-label {
            margin-left: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark p-2">
            <h3 class="text-white">Laravel Project</h3>
        </div>
        <div class="row bg-info py-5">
            <div class="col-6">
                <h2>Registration</h2>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <form action="/add-student" method="post" id="registration-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="tel" class="form-control" name="phone" id="phone" required>
                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">Address:</label>
                        <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                        <div class="invalid-feedback">Please enter your address.</div>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="form-label">Gender:</label>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="">Select your gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="invalid-feedback">Please select your gender.</div>
                    </div>

                    <div class="form-group">
                        <label for="department" class="form-label">Department:</label>
                        <input type="text" class="form-control" name="department" id="department" required>
                        <div class="invalid-feedback">Please enter your department.</div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="parttime" id="parttime" value="1">
                        <label class="form-check-label" for="parttime">Part-time Student</label>
                    </div>

                    <div class="form-group">
                        <label for="joined_date" class="form-label">Joined Date:</label>
                        <input type="date" class="form-control" name="joined_date" id="joined_date" required>
                        <div class="invalid-feedback">Please enter your joined date.</div>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    @csrf
                </form>
            </div>
            <div class="col-6">
                <h3>Registered Students</h3>
                @if ($studentList)
                    <ul class="list-group" id="registered-students">
                        @foreach ($studentList as $student)
                            <li class="list-group-item">{{$student->name}} - {{$student->email}} - {{$student->joined_date}}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No students registered yet.</p>
                @endif

            </div>
        </div>
    </div>
</body>
</html>

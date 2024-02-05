<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Form</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body>
        <div class="container mt-5 border border-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2>Registration Form</h2>
                    <form id="form" action="{{ url('/user-registration') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="FirstName">First Name</label>
                            <input type="text" class="form-control" id="FirstName" name="FirstName"
                                value="{{ old('FirstName') }}" placeholder="Enter First Name">
                            <span>
                                @error('FirstName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="LastName"
                                value="{{old('lastName')}}" placeholder="Enter Last Name">
                            <span>
                                @error('LastName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" id="Email" name="Email"
                                value="{{old('Email')}}" aria-describedby="emailHelp" placeholder="Enter email">
                            <span>
                                @error('Email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="Password"
                                value="{{ old('Password') }}" placeholder="Password">
                            <span>
                                @error('Password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </span>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <script>
                            // Your SweetAlert configuration and trigger code
                            // Example:
                            Swal.fire(
                                'Good job!',
                                '{{ session('success') }}',
                                'success'
                            );
                        </script>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>

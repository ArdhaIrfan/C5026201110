<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Registration Form</title>

    <!-- Link file CSS -->
    <link rel="stylesheet" href="stylesheetp.css">

    <style>
        body {
    margin: 30%;
    margin-top: 5%;
    margin-bottom: 5%;
}
.error {
    color: red;
    font-style: italic;
    font-size: small;
}
.placeholderstyle {
    font-style: normal;
    color: initial;
    font-size: medium;
}
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <h2 class="alert alert-primary text-center mt-5">Sign up</h2>

        <div class="mb-4 text-center">
            <a href="bootstrap.html" class="mb-3">or sign in</a>
        </div>

        <!-- Form group using Bootstrap -->
        <form action="registered.html" id="form">
            <div class="form-group">

                <!-- Name -->
                <div class="row mb-3">
                    <div class="col-md-2 py-auto">
                        <label for="First Name">Name</label>
                    </div>
                    <div class="col-md-10 py-auto">
                        <input type="text" name="name" class="form-control placeholderstyle" placeholder="" id="name">
                    </div>
                </div>

                <!-- Username -->
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="username" class="form-control placeholderstyle" placeholder="example: takahashi07" id="username">
                    </div>
                </div>

                <!-- Address -->
                <div class="form-group mb-2">
                    <label for="address" class="mb-1">Address</label>
                    <input type="text" name="address" class="form-control placeholderstyle" placeholder="" id="address">
                </div>

                <!-- Email -->
                <div class="form-group mb-2">
                    <label for="Email" class="mb-1">Email</label>
                    <input type="email" name="email" class="form-control placeholderstyle" placeholder="takahashiran@example.com"
                        id="email">
                </div>

                <!-- Password -->
                <div class="form-group mb-2">
                    <label for="Password" class="mb-1">Password</label>
                    <input type="password" name="password" class="form-control placeholderstyle" placeholder="" id="password">
                </div>

                <!-- Phone Number -->
                <div class="form-group mb-2">
                    <label for="Username" class="mb-1">Phone Number</label>
                    <input type="text" name="number" class="form-control placeholderstyle" placeholder="" id="number">
                </div>

                <!-- Zip Code -->
                <div class="form-group mb-2">
                    <label for="zip" class="mb-1">Zip Code</label>
                    <input type="text" name="zip" class="form-control placeholderstyle" placeholder="" id="zip">
                </div>

                <!-- Date of Birth and Nationality -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="DateofBirth" class="mb-1">Date of Birth</label>
                            <input type="date" name="date" class="form-control" id="dob">
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <label for="Nationality" class="mb-1">Nationality</label>
                            <input type="text" name="nationality" class="form-control" placeholder="Nationality" id="nationality">
                        </div>
                    </div>
                </div>

                <!-- Gender radios -->
                <div class="form-group mb-3">
                    <label for="">Sex</label>
                    <div>
                        <div class="form-check-inline">
                            <input type="radio" name="sex" class="form-check-input" name="radio1" name="radio2"
                                checked="">
                            <label>Male</label>
                        </div>

                        <div class="form-check-inline">
                            <input type="radio" name="sex" class="form-check-input" name="radio1" name="radio2">
                            <label>Female</label>
                        </div>
                    </div>
                </div>

                <!-- Dropdown -->
                <div class="form-group mb-2">
                    <label for="">Select your course</label>
                    <select name="select" id="select" class="form-select placeholderstyle">
                        <option selected></option>
                        <option value="BTECH">BTECH</option>
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                        <option value="B.COM">B.COM</option>
                        <option value="GEEKSFORGEEKS">GEEKSFORGEEKS</option>
                    </select>
                </div>

                <!-- Additional information -->
                <div class="form-group mb-3">
                    <label for="">Why do choose that course?</label>
                    <textarea name="why" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <!-- Submit Button -->
                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary mb-3" id="submit">Register</button>
                </div>

                <div style="text-align: center">
                    <button type="reset" class="btn btn-danger mb-3" id="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    {{-- <script src="registration.js"></script> --}}
    <script>
        $(document).ready(function() {

jQuery.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-z][a-z\s]+$/i.test(value);
}, "Name can only contain letters and cannot start with a space.");

$("#form").validate({

    rules: {
        name: {
            required: true,
            minlength: 2,
            lettersonly: true
        },
        address: {
            required: true,
            minlength: 5
        },
        username: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        password: {
            required: true,
            rangelength: [8, 16]
        },
        number: {
            required: true,
            number: true,
            minlength: 7
        },
        zip: {
            required: true,
            number: true,
            rangelength: [6, 6]
        },
        select: {
            required: true
        },
    },
    messages: {
        zip: {
            rangelength: 'Please enter a value of 6 characters long.'
        }
    }
});
});
    </script>

</body>

</html>

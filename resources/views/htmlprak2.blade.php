<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Form Input Peserta Vaksinasi</title>

    <!-- Link file CSS -->
    <link rel="stylesheet" href="uts_style.css">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <p>Nama: Ardha Irfan Hakim<br>Nama Panggilan: Ardha<br>NRP: 5026201110</p>
        <h3 class="alert alert-primary text-center mt-5">Form Input Peserta Vaksinasi</h3>

        <div class="mb-4 text-center">
            <a href="uts_accountlogin.html" class="mb-3">atau masuk</a>
        </div>

        <!-- Form group using Bootstrap -->
        <form action="uts_register_successful.html" id="form">
            <div class="form-group">

                <!-- Name -->
                <div class="row mb-3">
                    <div class="col-md-3 py-auto">
                        <label for="First Name">Nama Peserta</label>
                    </div>
                    <div class="col-md-9 py-auto">
                        <input type="text" name="name" class="form-control placeholderstyle" placeholder="" id="name">
                    </div>
                </div>

                <!-- NIK -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nik">NIK</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nik" class="form-control placeholderstyle" placeholder="" id="nik">
                    </div>
                </div>

                <!-- Jenis Vaksin -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="">Jenis Vaksin</label>
                    </div>
                    <div class="col-md-9">
                        <select name="select" id="select" class="form-select placeholderstyle">
                            <option selected></option>
                            <option value="AZ">AZ</option>
                            <option value="Sinovac">Sinovac</option>
                            <option value="Moderna">Moderna</option>
                        </select>
                    </div>
                </div>

                <!-- No Batch -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="batch">No Batch</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="batch" class="form-control placeholderstyle" placeholder="" id="batch">
                    </div>
                </div>

                <!-- Submit Button -->
                <div style="text-align: center" class="mt-4">
                    <button type="submit" class="btn btn-primary mb-3 mx-2" id="submit">Simpan</button>
                    <button type="reset" class="btn btn-danger mb-3 mx-2" id="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="uts_validation.js"></script>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    {{-- Ini --}}
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

body {
  overflow-x: hidden;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
}

#table {
    width: 90%;
    /* margin: auto; */
    margin-top: 1%;
    margin-bottom: 2%;
}

#headtable {
    background:rgb(209, 209, 209);
}

/* Toggle Styles */

#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{

}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 14px;
  padding: 16px 24px;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.centertext {
    text-align: center;
}

.title {
    margin-top: 1%;
    margin-bottom: 2%;
}

form {
    width: 60%;
    margin: auto;
}

label {
    font-weight: initial;
}

#footer {
    margin-top: 5%;
    margin-bottom: 1%;
    padding-top: 1%;
    padding-bottom: 1%;
    background-color: #263238;
    color: #fff;
    font-size: 11px;
    text-align: center;
}

    </style>

</head>

<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
          <header>
            <a href="#">Daftar Tabel</a>
          </header>
          <ul class="nav">
            <li>
              <a href="/pegawai">
                <i class="zmdi zmdi-view-dashboard"></i> Pegawai
              </a>
            </li>
            <li>
              <a href="/absen">
                <i class="zmdi zmdi-link"></i> Absen
              </a>
            </li>
            <li>
              <a href="/tugas">
                <i class="zmdi zmdi-widgets"></i> Tugas
              </a>
            </li>
            <li>
                <a href="/mouse">
                  <i class="zmdi zmdi-widgets"></i> Praktikum
                </a>
            </li>
            <li>
                <a href="/keranjangbelanja">
                  <i class="zmdi zmdi-widgets"></i> Keranjang Belanja (EAS)
                </a>
            </li>
            {{-- <li>
              <a href="#">
                <i class="zmdi zmdi-calendar"></i> Events
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-info-outline"></i> About
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-settings"></i> Services
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-comment-more"></i> Contact
              </a>
            </li> --}}
          </ul>
        </div>

        <!-- Content -->
        <div id="content">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
                <br>
                @section('header')
                <img class="center" src="https://media-exp1.licdn.com/dms/image/C5603AQEAdcFaR-tdpA/profile-displayphoto-shrink_800_800/0/1619919737115?e=1644451200&v=beta&t=m9hr5nRPfHtqZmpcIJQv6YKgyA5iMpEcG-MBFuRbisY" alt="Foto" width="80" height="80" style="border-radius: 50%">
                    <h4 style="text-align: center">Ardha Irfan Hakim<br></h4>
                    <h6 style="text-align: center">5026201110</h6>
                    @show
              {{-- <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                  </a>
                </li>
                <li><a href="#">Test User</a></li>
              </ul> --}}
            </div>
          </nav>
            <div class="container-fluid" id="table">
                <h3 class="centertext title">@yield('judulhalaman')</h3>
                @section('cari')

                @show
                @section('konten')

                @show
            </div>
        </div>
        <div id="footer">
            <p>
                Copyright Ardha Irfan Hakim &copy;. All rights reserved.
            </p>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../assets/css/material-dashboard.min.css?v=2.1.2" rel="stylesheet" />

  <link rel="stylesheet" href="{{ mix('/css/rollsheet.css') }}">
    <title>School System</title>
</head>
<body>
    <div class="wrapper" >
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
      
              Tip 2: you can also add an image using data-image tag
          -->
            <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                SchoolManagement
              </a></div>
            <div class="sidebar-wrapper">
              <ul class="nav">
              <li class="nav-item {{Request::segment(1) == 'attendance' ? 'active' : '' }}  ">  <!-- getting segment from URL -->
                  <a class="nav-link" href="/attendance">
                    <i class="material-icons">fact_check</i>
                    <p>Attendance</p>
                  </a>
                </li>
                <li class="nav-item {{Request::segment(1) == 'students' ? 'active' : '' }}  ">  <!-- getting segment from URL -->
                  <a class="nav-link" href="/students">
                    <i class="material-icons">person_search</i>
                    <p>Students</p>
                  </a>
                </li>
                <li class="nav-item {{Request::segment(1) == 'teachers' ? 'active' : '' }} ">
                  <a class="nav-link" href="/teachers">
                    <i class="material-icons">person</i>
                    <p>Teachers</p>
                  </a>
                </li>
                <li class="nav-item {{Request::segment(1) == 'programs' ? 'active' : '' }} ">
                  <a class="nav-link" href="/programs">
                    <i class="material-icons">event</i>
                    <p>Programs</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Sidebar ends here-->
          @yield('content')
    </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

  <!-- Plugin for the Perfect Scrollbar -->
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>

  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>

  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>

  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>

  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" ></script>

  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="assets/js/plugins/jquery.datatables.min.js"></script>

  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>

  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>

  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" ></script>

  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>

  <!--  Google Maps Plugin    -->
  <script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=2.1.2" type="text/javascript"></script>
</html>
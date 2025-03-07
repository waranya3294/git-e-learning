<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ห้องสอบ</title>

  <!-- jquery 3.7.1 -->
  <script src="assets/lib/jquery/jquery-3.7.1.js"></script>

  <!-- Tinymce -->
  <script src="assets/lib/tinymce/tinymce.min.js"></script>


  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> -->


  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="assets/lib/jquery/bootstrap1.11.3-icons.min.css">
  <!-- <link href="assets/lib/jquery/bootstrap5.3.3.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="assets/lib/css/styles.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- calendar -->
  <script src="assets/lib/calendar/6.1.15fullcalendar.js"></script>
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/moment.min.js"></script>
  <script src="assets/lib/calendar/moment-timezone-with-data.min.js"></script>

  <link rel="stylesheet" href="assets/lib/jquery/daterangepicker.css" />
  <script src="assets/lib/jquery/daterangepicker.min.js"></script>

  <script src="assets/lib/calendar/index.global.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>

  <!-- sweetalert -->
  <script src="assets/lib/sweetalert/sweetalert.js"></script>

  <!-- fontawsome -->
  <link rel="stylesheet" href="assets/lib/fontawsome/css/brands.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/solid.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/regular.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/fontawesome.css">

  <!-- datatable -->
  <script src="assets/lib/dataTables/dataTables.js"></script>
  <script src="assets/lib/dataTables/dataTables.bootstrap5.js"></script>
  <link rel="stylesheet" href="assets/lib/dataTables/dataTables.bootstrap5.css">

<!--sheetJS CDN  -->
  <script src="assets/lib/sheetJS/xlsx.full.min.js"></script>

  <!-- apexcharts -->
  <script src="assets/lib/apexcharts/apexcharts.js"></script>

  <style>
    @font-face {
      font-family: "Kanit";
      font-weight: 400;
      font-style: normal;
      src: url(assets/lib/fonts/Kanit/Kanit-Regular.ttf);
    }

    * {
      font-family: "Kanit", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
  </style>
</head>


<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark shadow-sm">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-2">
      <img src="images/logo.png" class="img-fluid " alt="logo">
      <!-- <img src="images/logo.png" class="img-fluid" alt="logo"> -->
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user fa-fw"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket pe-2"></i>Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">

      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="overflow-y: auto; width:230px;">
        <div class="sb-sidenav-menu">
          <div class="nav mt-3">
            <!-- Admin -->
            <div class="menu-profile p-3 d-flex align-items-center  rounded-0" style="background-color: #47474757; border: 1px solid #47474757;">
              <div class="profile-image">
                <img src="images/Admin.png" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
              </div>
              <div class="profile-info ms-3" style="color: #ecf0f1;">
                <p class="mb-0 fw-bold" style="font-size: 18px;">HR</p>
                <span style="font-size: 14px; color: #bdc3c7;">Admin</span>
              </div>
            </div>
            <hr>

            <a class="nav-link" href="dashboard_maincontent.php">
              <div class="sb-nav-link-icon"><i class="bi bi-speedometer2" style="color:white"></i></div>
              หน้าแรก
            </a>

            <a class="nav-link collapsed" href="exam_room_maincontent.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon "><i class="bi bi-house-gear-fill" style="color:white"></i></div>
              จัดการห้องสอบ
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav ms-2">
                <a class="nav-link" href="room_maincontent.php"><i class="fa-regular fa-circle fa-sm me-2"></i>สร้างห้องเรียนและบทเรียน</a>
                <!-- <a class="nav-link" href="section_maincontent.php"><i class="fa-regular fa-circle fa-sm me-2"></i>สร้างจุดปฏิบัติงาน</a> -->
                <a class="nav-link" href="exam_maincontent.php"><i class="fa-regular fa-circle fa-sm me-2"></i>สร้างข้อสอบ</a>
              </nav>
            </div>

            <a class="nav-link collapsed" href="summary.php" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages2">
              <div class="sb-nav-link-icon"><i class="fas fa-edit" style="color:white"></i></div>
              ข้อมูลผู้เข้าสอบ
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion ms-2" id="sidenavAccordionPages">
                <a class="nav-link" href="employee_list_maincontent.php"><i class="fa-regular fa-circle fa-sm me-2"></i> รายชื่อผู้เข้าสอบ</a>
              </nav>
            </div>

            <a class="nav-link" href="edit_exam_user_maincontent.php">
              <div class="sb-nav-link-icon"><i class="fas fa-edit" style="color:white"></i></div>
              จัดการผู้เข้าสอบ
            </a>

            <a class="nav-link" href="exam_queue_maincontent.php">
              <div class="sb-nav-link-icon"><i class="fas fa-edit" style="color:white"></i></div>
              จัดการจองคิวสอบ
            </a>

            <a class="nav-link" href="exam_approval_maincontent.php">
              <div class="sb-nav-link-icon"><i class="fas fa-edit" style="color:white"></i></div>
              อนุมัติการเข้าสอบ
            </a>


          </div>
        </div>
      </nav>

    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4" style="width: 100%; height: 100%;">
          <!-- 
          <div class="card mt-4">
            <div class="container "> -->
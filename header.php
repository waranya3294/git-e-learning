<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <title>ห้องสอบ</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <!-- amcharts -->
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

  <!-- Quill -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/lib/css/styles.css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- fontawsome -->
  <link rel="stylesheet" href="assets/lib/fontawsome/css/brands.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/solid.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/regular.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/fontawesome.css">

  <!-- sheetJS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
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

    #editor-container {
      height: 200px;
      /* กำหนดความสูงให้ editor */
    }

    #display-container {
      margin-top: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }

    .profile-image {
      display: flex;
      justify-content: center;
      align-items: center;

    }

    .profile-image img {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      object-fit: cover;
      border: 3px solid white;
      /* เส้นขอบ */

    }

    #chartdiv {
      width: 100%;
      height: 500px;
    }

  </style>
</head>

<?php //session_start(); 
?>

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
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user fa-fw"></i></a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket pe-2"></i>Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">


      <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav mt-4">
            <div class="menu-profile mt-3">
              <div class="profile-image mb-3">
                <img src="images/5.jpg" alt="Profile Picture">
              </div>
              <div class="profile-info ms-3" style="color:white;">
                <p>รหัสพนักงาน : xxxx</p>
                <p>ชื่อ-นามสกุล : xxxx xxxxx</p>
                <p>แผนก : สี</p>
              </div>
            </div>
            <hr>

            <a class="nav-link" href="dashboard_maibcontent.php">
              <div class="sb-nav-link-icon"><i class="bi bi-speedometer2" style="color:white"></i></div>
              หน้าแรก
            </a>

            <a class="nav-link collapsed" href="exam_room_maincontent.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon "><i class="bi bi-tools" style="color:white"></i></div>
              จัดการห้องสอบ
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="room_maincontent.php"><i class="bi bi-laptop pe-2"></i>สร้างห้องเข้าสอบ</a>
                <a class="nav-link" href="section_maincontent.php"><i class="bi bi-pencil pe-2"></i>สร้างsection</a>
                <a class="nav-link" href="exam_maincontent.php"><i class="bi bi-envelope-paper pe-2"></i>สร้างชุดทดสอบ</a>
              </nav>
            </div>


            <a class="nav-link collapsed" href="summary.php" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages2">
              <div class="sb-nav-link-icon"><i class="fas fa-book-open" style="color:white"></i></div>
              ข้อมูลผู้เข้าสอบ
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link" href="report_maincontent.php"> รายชื่อผู้เข้าสอบ</a>
              </nav>
            </div>
          </div>
        </div>
      </nav>

    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid p-0 ">
          <!-- 
          <div class="card mt-4">
            <div class="container "> -->
         
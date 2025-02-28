<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <title>ห้องสอบ</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

  <!-- Quill -->
  <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/lib/css/styles.css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="assets/lib/css/progress_bar.css">
  <!-- SweetAlert2 -->
  <script src="assets/lib/sweetalert/sweetalert.js"></script>


  <!-- fontawsome -->
  <link rel="stylesheet" href="assets/lib/fontawsome/css/brands.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/solid.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/regular.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/fontawesome.css">

  <!-- datatable -->
  <link href="assets/lib/dataTables/dataTables.bootstrap5.css" rel="stylesheet">
  <script src="assets/lib/dataTables/dataTables.js"></script>
  <script src="assets/lib/dataTables/dataTables.bootstrap5.js"></script>

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
    }

    .sb-sidenav {
      width: auto;
      white-space: nowrap;
    }
  </style>
</head>


<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
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
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ยินดีต้อนรับ<i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

          <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">

      <nav class="sb-sidenav accordion sb-sidenav-dark" style="overflow-y: auto; width:230px;" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav mt-3">
            <div class="menu-profile p-3 d-flex align-items-center shadow-sm rounded-0" style="background-color: #2c3e50; border: 1px solid #34495e;">
              <div class="profile-image">
                <img src="images/Admin.png" alt="Profile Picture" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
              </div>
              <div class="profile-info ms-3" style="color: #ecf0f1;">
                <p class="mb-0 fw-bold" style="font-size: 18px;">4284</p>
                <span style="font-size: 14px; color: #bdc3c7;">วรัญญา หันจางสิทธิ์</span><br>
                <span style="font-size: 14px; color: #bdc3c7;">student</span>
              </div>
            </div>
            <hr>

            <a class="nav-link collapsed" href="exam_room_maincontent.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"></div>
              <div class="text-wrap">บทเรียนที่ 1 ความปลอดภัยในการทำงาน</div>
              <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-wrap" href="learning_maincontent.php"><i class="fa-regular fa-circle fa-sm me-2" style="font-size: 0.8rem;"></i>ประเภทของการพ่นสี</a>
                <a class="nav-link text-wrap" href="#"><i class="fa-regular fa-circle fa-sm me-2" style="font-size: 0.8rem;"></i> วิธีการสวมใส่ชุด PPE</a>

              </nav>
            </div>

            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages2">
              <div class="sb-nav-link-icon text-wrap"></div>
              <div class="text-wrap"> บทเรียนที่ 2 เครื่องมือและอุปกรณ์</div>
              <div class="sb-sidenav-collapse-arrow"></div>
            </a>

            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePages3" aria-expanded="false" aria-controls="collapsePages2">
              <div class="sb-nav-link-icon"></div>
              <div class="text-wrap">บทเรียนที่ 3 วิธีการทำงาน /การแก้ไขปัญหา</div>
              <div class="sb-sidenav-collapse-arrow"></div>
            </a>

            <a class="nav-link collapsed" style="cursor: pointer" onclick="window.location.href='posttest_maincontent.php'" data-bs-toggle="collapse" data-bs-target="#collapsePages3" aria-expanded="false" aria-controls="collapsePages3">
              <div class="sb-nav-link-icon"></div>
              <div class="text-wrap">แบบทดสอบหลังเรียน</div>
              <div class="sb-sidenav-collapse-arrow"></div>
            </a>

            <a class="nav-link collapsed" style="cursor: pointer" onclick="window.location.href='summary_maincontent.php'" data-bs-toggle="collapse" data-bs-target="#collapsePages4" aria-expanded="false" aria-controls="collapsePages4">
              <div class="sb-nav-link-icon"></div>
              สรุปผลคะแนน
              <div class="sb-sidenav-collapse-arrow"></div>
            </a>

          </div>
        </div>
      </nav>

    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4 ">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>หน้าแรก</title>
  <link href="assets/lib/jquery/bootstrap5.3.0.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/lib/jquery/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- fontawsome -->
  <link rel="stylesheet" href="assets/lib/fontawsome/css/brands.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/solid.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/regular.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/fontawesome.css">

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

    body {
      background-image: url('images/3.png');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      animation: fadeIn 1s ease-in-out;
    }

    .card {
      width: 100%;
      max-width: 400px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(15px);
      border: 2px solid rgb(255, 255, 255, 0.3);
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card p-4">
      <div class="card-body text-center">
        <img class="img-fluid mb-3 mt-3" src="images/logo.png" alt="logo">
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-sm" id="floatingInput" name="floatingInput" placeholder="name@example.com">
          <label for="floatingInput"><i class="fa-solid fa-user me-2"></i>User</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control form-control-sm" id="floatingPassword" name="floatingPassword" placeholder="Password">
          <label for="floatingPassword"><i class="fa-solid fa-key me-2"></i> Password</label>
        </div>
        <div class="row ">
          <div class="col-lg-6 col-sm-6 mb-2 text-end">
            <button type="submit" class="btn btn-login fw-bold text-white" style="background-color: rgba(0, 179, 192, 1);" type="submit" onclick="window.location.href='dashboard_maibcontent.php'">
              <i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ
            </button>
          </div>
          <div class="col-lg-6 col-sm-6 text-start">
            <button class="btn btn-login text-dark" style="background-color: white; border: 1px solid #ccc;" onclick="window.location.href='login.php'">
              <i class="fa-solid fa-calendar-check"></i> จองคิวสอบ
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
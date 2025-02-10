
<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าแรก</title>

  <!-- Bootstrap -->
  <link href="assets/lib/jquery/bootstrap5.3.0.min.css" rel="stylesheet">

  <!-- FontAwesome (CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

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
      background-image: url('images/1.jpg');
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
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(15px);
      /* border: 2px solid rgb(255, 255, 255, 0.3); */
    }
  </style>
</head>

<body>
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
            <button type="submit" class="btn  text-white" style="background-color: rgba(0, 179, 192, 1);" type="submit" onclick="window.location.href='dashboard_maincontent.php'">
              <i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ
            </button>
          </div>
          <div class="col-lg-6 col-sm-6 text-start">
            <button class="btn text-dark" style="background-color: white; border: 1px solid #ccc;" onclick="window.location.href='login.php'">
              <i class="fa-solid fa-calendar-check"></i> จองคิวสอบ
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
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
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    a {
      text-decoration: none;
      color: #007bff;
      font-weight: 500;
      display: block;
    }

    a:hover {
      text-decoration: underline;
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
            <label for="floatingInput"><i class="fa-solid fa-user me-2"></i> รหัสพนักงาน</label>
          </div>
          <div class="form-floating ">
            <input type="password" class="form-control form-control-sm" id="floatingPassword" name="floatingPassword" placeholder="Password">
            <label for="floatingPassword"><i class="fa-solid fa-key me-2"></i> รหัสผ่าน</label>
          </div>
          <div class="row mt-2">
            <div class="col text-end">
              <a href="resetpassword.php">เปลี่ยนรหัสผ่าน?</a>
            </div>
          </div>
          <div class="row mt-3 ">
            <div class="col-lg-6 col-sm-6 mb-2 text-end">
              <button type="submit" class="btn  text-white" style="background-color: rgba(0, 179, 192, 1);" onclick="getUserData()">
                <i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ
              </button>
            </div>
            <div class="col-lg-6 col-sm-6 text-start">
              <button class="btn text-dark" style="background-color: white;" onclick="window.location.href='reservation.php'">
                <i class="fa-solid fa-calendar-check"></i> จองคิวสอบ
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function getUserData() {
        var username = $("#floatingInput").val();
        var password = $("#floatingPassword").val();
        // console.log('User : ' + username + ' Pass : ' + password);
        var formData = new FormData();
        formData.append('user', username);
        formData.append('pass', password);

        $.ajax({
          url: 'test.php',
          method: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
            var res = JSON.parse(response);
            Swal.fire({
              icon: res.icon,
              title: res.title,
              text: res.text,
              confirmButtonText: 'ตกลง',
              confirmButtonColor: res.btnColor,
              showCancelButton: true,
              cancelButtonText: 'ยกเลิก',
              allowOutsideClick: false
            }).then((result)=>{
              if(result.isConfirmed){
                window.location.href = res.location;
              }else{
                window.location.reload();
              }
            })
          }
        })
      }
    </script>

  </body>

</html>
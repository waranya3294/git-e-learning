<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/lib/fontawsome/css/brands.css">
    <link rel="stylesheet" href="assets/lib/fontawsome/css/solid.css">
    <link rel="stylesheet" href="assets/lib/fontawsome/css/regular.css">
    <link rel="stylesheet" href="assets/lib/fontawsome/css/fontawesome.css">
</head>
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

<body>
    <main class="form-signin">
        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center" style="max-width: 500px; margin: 0 auto;">
            <div class="row ">
                <div class="card border-0 shadow rounded-3 mb-2" style="--bs-card-bg: rgba(255, 255, 255, 0.5);">
                    <div class="card-body">
                        <img class="img-fluid mb-5 mt-3" src="images/logo.png" alt="">
                        <!-- <form method="POST" id="loginForm"> -->
                        <div class="form-floating mb-3">
                            <input type="ID" class="form-control form-control-sm" id="floatingInput" name="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"><i class="fa-solid fa-user me-2"></i> ID</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-sm" id="floatingPassword" name="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><i class="fa-solid fa-key me-2"></i> Password</label>
                        </div>
                        <div class="d-grid mt-5 mb-3">
                            <button class="btn btn-login fw-bold text-white" id="login-btn" style="background-color: rgba(0, 179, 192, 1);" type="submit" onclick="window.location.href='dashboard_maibcontent.php'">
                                <i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ
                            </button>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
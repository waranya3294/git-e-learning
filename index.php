

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>เริ่มต้น</title>
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
            position: relative;
            background-image: url('images/3.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }

        .container {
            width: 420px;
            max-width: 800px;
            color: white;
            backdrop-filter: blur(15px);
            border: 2px solid rgb(255,255,255,0.3);
            background: transparent;
            border-radius: 10px;
        }

        .title h3 {
            font-size: 36px;
            
            color: white;
        }

        .btn {
            font-size: 20px;
            margin: 10px 0;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="container text-center p-4 rounded-3 shadow-lg">
        <div class="title mb-3" style="color:black">
            <h3>KOBELCO CONSTRUCTION MACHINERY SOUTHEAST ASIA CO., LTD.</h3>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <button type="submit" class="btn btn-primary rounded-pill btn-lg w-100" onclick="window.location.href='login.php'">
                    <i class="fa-solid fa-floppy-disk"></i> ผู้เข้าสอบ
                </button>
            </div>
            <div class="col-12 col-md-6">
                <button class="btn btn-light rounded-pill btn-lg w-100" onclick="window.location.href='homepage.php'">ผู้ลงข้อสอบ</button>
            </div>
        </div>
    </div>

</body>

</html>
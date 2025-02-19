<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เปลี่ยนรหัสผ่าน</title>
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
            /* background: linear-gradient(to right, #4facfe, #00f2fe); */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-header {
            background-color: #18B0BD;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 22px;
            font-weight: bold;
            /* border-top-left-radius: 15px;
            border-top-right-radius: 15px; */
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-success {
            background: #28a745;
            border: none;
            padding: 12px;
            font-size: 18px;
            width: 100%;
            transition: background 0.3s ease;
        }

        /* .btn-success:hover {
            background: #218838;
        } */

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: 500;
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card shadow-sm rounded-0" style="width: 450px;">
            <header class="login-header">
                เปลี่ยนรหัสผ่าน
            </header>
            <div class="card-body" style=" padding: 30px;">
                <div class="mb-3">
                    <label for="current-password">รหัสผ่านปัจจุบัน <span class="text-danger">*</span></label>
                    <input type="password" id="current-password" class="form-control" placeholder="รหัสผ่านปัจจุบัน">
                </div>
                <div class="mb-3">
                    <label for="new-password">รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                    <input type="password" id="new-password" class="form-control" placeholder="รหัสผ่านใหม่">
                </div>
                <div class="mb-3">
                    <label for="confirm-password">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                    <input type="password" id="confirm-password" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                </div>
                <a href="index.php" class="text-start">« กลับไปยังหน้าลงชื่อเข้าใช้งาน</a>
                <div class="mt-4">
                    <button class="btn btn-success">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
$type = $_GET['user_type'];
session_start();

$_SESSION['user_type'] = $type;

?>

<div class="container mt-4 " style="color: #333;">
  <div class="card shadow-sm rounded-1 mb-4" style="border: none;border-top: 4px solid #00adb0;">
    <div class="card-body">
      <h3 style="color: #007bff;">สร้างห้องเข้าสอบ</h3>
      <div class="row">
        <div class="col mt-3">
          <div class="btn btn-success" onclick="window.location.href='exam_room_maincontent.php'" style="font-size:18px; border: none;">
            <i class="fas fa-plus"></i> สร้างห้องเข้าสอบ
          </div>
        </div>
      </div>
      <hr>
    </div>

    <div class="containar  p-lg-2 mb-2">
      <div class="card card shadow-sm rounded-1">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">
                <i class="bi bi-folder-fill" style="color:blue"></i> สี
              </h2>
            </div>
            <div class="col text-end">
              <i class="fa-regular fa-trash-can" style="color: red; cursor: pointer" onclick="showDelete()" title="ลบข้อมูล"></i>
            </div>
            <div class="row">
              <div class="col">
                <label for="text">วัน/เวลาที่สร้าง:</label><br>

              </div>
            </div>

            <div class="row mt-4 m-0">
              <div class="col text-end p-0">
                <button class="btn btn-primary" onclick="window.location.href='section_maincontent.php'" style="background-color: #007bff; border: none;">เข้าห้องสอบ</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="containar p-lg-2 mb-2" style="cursor: pointer">
    <div class="card card shadow-sm rounded-1">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">
                <i class="bi bi-folder-fill" style="color:red"></i> เชื่อม
              </h2>
            </div>
            <div class="col text-end">
              <i class="fa-regular fa-trash-can" style="color: red; cursor: pointer" onclick="showDelete()" title="ลบข้อมูล"></i>
            </div>
            <div class="row">
              <div class="col">
                <label for="text">วัน/เวลาที่สร้าง:</label><br>
              </div>
            </div>

            <div class="row mt-4 m-0">
              <div class="col text-end p-0">
                <button class="btn btn-primary" onclick="window.location.href='section_maincontent.php'" style="background-color: #007bff; border: none;">เข้าห้องสอบ</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="containar p-lg-2 mb-3" style="cursor: pointer">
    <div class="card card shadow-sm rounded-1 ">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">
                <i class="bi bi-folder-fill" style="color:green"></i> ประกอบ
              </h2>
            </div>
            <div class="col text-end">
              <i class="fa-regular fa-trash-can" style="color: red; cursor: pointer" onclick="showDelete()" title="ลบข้อมูล"></i>
            </div>
            <div class="row">
              <div class="col">
                <label for="text">วัน/เวลาที่สร้าง:</label><br>
              </div>
            </div>

            <div class="row mt-4 m-0">
              <div class="col text-end p-0">
                <button class="btn btn-primary" onclick="window.location.href='section_maincontent.php'" style="background-color: #007bff; border: none;">เข้าห้องสอบ</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function showDelete() {
    Swal.fire({
      title: "คุณต้องการลบข้อมูลนี้หรือไม่",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "ใช่",
      cancelButtonText: "ไม่ใช่"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          text: "เรียบร้อย",
          icon: "success"
        });
      }
    });
  }
</script>
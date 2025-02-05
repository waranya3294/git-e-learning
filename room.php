<?php
$type = $_GET['user_type'];
session_start();

$_SESSION['user_type'] = $type;

?>

<div class="container-fluid mt-4 " style="color: #333;">
  <div class="card shadow-sm rounded-1 mb-4 p-4" style="border: none;">
    <div class="card-body">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-sm-6">
          <h1 class="display-4" style="color: #18B0BD;margin: 0;">สร้างห้องสอบ</h1>
        </div>
        <div class="col-lg-6 col-sm-6 text-end ">
          <div class="btn btn-success" onclick="window.location.href='exam_room_maincontent.php'" style="font-size:18px; border: none;">
            <i class="fas fa-plus"></i> สร้างห้องสอบ
          </div>
        </div>
      </div>
      <hr>
    </div>

    <div class="px-4">
      <div class="card shadow-sm rounded-1 mb-3" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">
                สี
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
                <button class="btn btn-primary" onclick="window.location.href='section_maincontent.php'" style="background-color: #23b2b5; border: none;">เข้าห้องสอบ</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card shadow-sm rounded-1 mb-3" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">
                เชื่อม
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
                <button class="btn btn-primary" onclick="window.location.href='section_maincontent.php'" style="background-color: #23b2b5; border: none;">เข้าห้องสอบ</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card shadow-sm rounded-1 mb-3" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">
                ประกอบ
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
                <button class="btn btn-primary" onclick="window.location.href='section_maincontent.php'" style="background-color: #23b2b5; border: none;">เข้าห้องสอบ</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card shadow-sm rounded-1 mb-4" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">
                CNC
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
            <div class="row mt-4">
              <div class="col text-end p-0">
                <button class="btn btn-primary" onclick="window.location.href='section_maincontent.php'" style="background-color: #23b2b5; border: none;">เข้าห้องสอบ</button>
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
      confirmButtonColor: "green",
      cancelButtonColor: "#d33",
      confirmButtonText: "ใช่",
      cancelButtonText: "ไม่ใช่"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          text: "เรียบร้อย",
          icon: "success",
          timer: 1500,
          showConfirmButton: false,
        });
      }
    });
  }
</script>
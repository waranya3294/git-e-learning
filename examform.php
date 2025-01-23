<div class="container mt-4">
    <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;" >
        <div class="card-body ">
        <div class="row">
        <div class="col mt-3">
            <h4 style="color:blue;">สร้างเนื้อหา</h4>
        </div>
    </div>
    <div class="row">
        <div class="col mt-3  text-end">
            <button class="btn btn-success" onclick="window.location.href='form_maincontent.php'">
                <i class="bi bi-plus-circle-fill" style="color:white"></i> เพิ่มเนื้อหาใหม่</button>
        </div>
    </div>
    <hr>
<?php
require ("connection.php");
$conn = new MyConnection();
$pdo = $conn->getPdo();
$response = array();

$query = "SELECT story_id, story_detail FROM tbl_story ";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($response);
?>


<div>
    <?php echo $result['story_detail']; ?>
</div>


    <div class="container mt-3 p-0">
        <div class="card shadow-sm rounded-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4>ชื่อบทเรียน1</h4>
                    </div>
                    <div class="col text-end">
                        <button class="btn btn-warning" onclick="" title="แก้ไขข้อมูล">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 p-0">
        <div class="card shadow-sm rounded-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4>ชื่อบทเรียน2</h4>
                    </div>
                    <div class="col text-end ">
                        <button class="btn btn-warning" onclick="" title="แก้ไขข้อมูล">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
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
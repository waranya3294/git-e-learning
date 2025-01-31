<div class="container mt-4">
    <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;" >
        <div class="card-body ">
        <div class="row">
        <div class="col mt-3">
            <h2>สร้างเนื้อหา</h2>
        </div>
    </div>
    <div class="row">
        <div class="col mt-3  text-end">
            <button class="btn btn-success" onclick="window.location.href='form_maincontent.php'">
            <i class="fas fa-plus"></i> เพิ่มเนื้อหาใหม่</button>
        </div>
    </div>
    <hr>
    
<!-- <?php
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
</div> -->


    <div class="container mt-3 p-0">
        <div class="card shadow-sm rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p style="font-size:20px;">ความรู้พื้นฐานของการพ่นสี</p>
                    </div>
                    <div class="col text-end">
                        <button class="btn btn-outline-warning" onclick="showForm()" title="แก้ไขข้อมูล">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 p-0">
        <div class="card shadow-sm rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p style="font-size:20px;">การสวมใส่ชุด PPE</p>
                    </div>
                    <div class="col text-end ">
                        <button class="btn btn-outline-warning" onclick="showForm()" title="แก้ไขข้อมูล">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
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
          icon: "success"
        });
      }
    });
  }

  function showForm() {
    Swal.fire({
      allowOutsideClick: false,
      width: 700,
      confirmButtonText:'ตกลง',
      confirmButtonColor:'green',
      html: `
     <div class="col">
                    <div class="text-start">
                        <label for="exam_id">ชื่อบทเรียน</label>
                    </div>
                    <input type="text" name="title" id="title" class="form-control mb-3" placeholder="ชื่อบทเรียน" required-1>
                </div>
                <div class="col">
                    <div class="text-start">
                        <label for="exam_id">เนื้อหาบทเรียน</label>
                    </div>
                    <textarea type="text" name="title" id="title" class="form-control mb-3" placeholder="ชื่อชุดข้อสอบ" required-1>
            `,
    });
  }
</script>
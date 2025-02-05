<div class="container-fluid mt-4">
    <div class="card shadow-sm rounded-1" style="border: none;">
        <div class="card-body ">
            <div class="row d-flex align-items-center">
                <div class="col" style="color: #18B0BD;">
                    <h1 class="display-4">สร้างเนื้อหา</h1>
                </div>
                <div class="col text-end">
                    <button class="btn btn-success" onclick="window.location.href='form_maincontent.php'">
                        <i class="fas fa-plus"></i> เพิ่มเนื้อหาใหม่</button>
                </div>
            </div>
            <hr>

            <!-- <?php
                    require("connection.php");
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


            <div class="container-fluid mt-3 p-0">
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
            <div class="container-fluid mt-3 p-0">
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
    function showForm() {
        Swal.fire({
            allowOutsideClick: false,
            width: 700,
            confirmButtonText: 'ตกลง',
            confirmButtonColor: 'green',
            html: `
                <div class="col">
                    <div class="text-start">
                        <label for="exam_id">ชื่อบทเรียน</label>
                    </div>
                    <input type="text" name="title" id="title" class="form-control mb-3" placeholder="ชื่อบทเรียน">
                </div>
                <div class="col">
                    <div class="text-start">
                        <label for="exam_id">เนื้อหาบทเรียน</label>
                        <textarea id="tiny"></textarea>
                    </div>
                </div>`,
            didOpen: () => {
                setTimeout(() => {
                    tinymce.init({
                        branding: false,
                        selector: 'textarea#tiny',
                        plugins: 'image link media table  preview  fullscreen lists fontsizeinput color textcolor',
                        toolbar: 'undo redo | fontsizeinput fontsizeselect | image link media  bold italic backcolor forecolor |\
                        bullist numlist checklist table | alignleft aligncenter alignright alignjustify preview fullscreen',
                        image_title: true,
                        automatic_uploads: true,
                        file_picker_types: 'image media file',
                        media_live_embeds: true,
                    });
                }, 300); // รอให้ Swal โหลดก่อน 300ms
            }
        });
    }

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
</script>
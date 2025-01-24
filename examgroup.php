<div class="container mt-3">
    <div class="card shadow-sm mb-3" style="border: none;border-top: 4px solid #00adb0;">
        <div class="card-body">
            <div class="row">
                <div class="col mt-3">
                    <h3 style="color:blue;">หมวดหมู่ข้อสอบ</h3>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3 text-end">
                    <button type="text" class="btn btn-success" onclick="window.location.href='exam_form_maincontent.php'">
                        <i class="bi bi-plus-circle-fill" style="color:white"></i> เพิ่มข้อมูลใหม่</button>
                </div>
            </div>
            <hr>

            <div class="row text-center">
                <div class="col">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="row"><b>ลำดับ</b></th>
                                <th><b>ชื่อหมวดหมู่</b></th>
                                <th><b>จำนวนข้อสอบ</b></th>
                                <th><b>คำสั่ง</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>ความปลอดภัยในการพ่นสี</th>
                                <th>5 ข้อ</th>
                                <th>
                                    <button class="btn btn-warning btn-sm" title="แก้ไขข้อมูล" onclick="showForm()"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-danger btn-sm" title="ลบข้อมูล" onclick="showDelete() "><i class="bi bi-trash"></i></button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
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

    function showForm() {
        Swal.fire({
            title: "แก้ไขข้อมูล",
            confirmButtonColor: "green",
            allowOutsideClick: false,
            html: `
            <div class="row">
            <div class="col text-start mb-3">
            <label for="text">ชื่อชุดข้อสอบ</label>
            <input type="text" name="question" class="form-control" placeholder="ชื่อชุดข้อสอบ">
            </div>
            <label for="text">แสดงชุดข้อสอบ</label>
            </div>`,
        })
    }
</script>

<div class="container-fluid mt-4">
    <div class="card shadow-sm rounded-1 mb-4" style="border: none;">
        <div class="card-body">
            <div class="row">
                <h2>Workplace</h2>
            </div>
            <div class="row">
                <div class="col text-end mt-4 mb-3">
                    <button type="button" class="btn btn-success" style="font-size: 18px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus" onclick=""></i> เพิ่มส่วนงาน
                    </button>
                </div>
                <hr>

                <!-- popup Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มส่วนงาน</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label for="text">ชื่อส่วนงาน:<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="modal-footer mt-5">
                                <button type="button" class="btn btn-success" title="save" onclick="window.location.href='section_maincontent.php'"><i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3 p-lg-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <h4 onclick="window.location.href='exam_maincontent.php'">Top coat
                                </h4>
                            </div>
                            <div class="col text-end">
                                <i class="fa-regular fa-trash-can" style="color: red;" onclick="showDelete()" title="ลบข้อมูล"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="button" class="btn btn-outline-primary" onclick="window.location.href='exam_maincontent.php'">เพิ่มบทเรียน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3 p-lg-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <h4 onclick="window.location.href='exam_maincontent.php'"> Small Part
                                </h4>
                            </div>
                            <div class="col text-end">
                                <i class="fa-regular fa-trash-can" style="color: red;" onclick="showDelete()" title="ลบข้อมูล"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="button" class="btn btn-outline-primary" onclick="window.location.href='exam_maincontent.php'">เพิ่มบทเรียน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3 p-lg-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <h4 onclick="window.location.href='exam_maincontent.php'">Under Coat
                                </h4>
                            </div>
                            <div class="col text-end">
                                <i class="fa-regular fa-trash-can" style="color: red;" onclick="showDelete()" title="ลบข้อมูล"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="button" class="btn btn-outline-primary" onclick="window.location.href='exam_maincontent.php'">เพิ่มบทเรียน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3 p-lg-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <h4 onclick="window.location.href='exam_maincontent.php'">Final Paint
                                </h4>
                            </div>
                            <div class="col text-end">
                                <i class="fa-regular fa-trash-can" style="color: red;" onclick="showDelete()" title="ลบข้อมูล"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="button" class="btn btn-outline-primary" onclick="window.location.href='exam_maincontent.php'">เพิ่มบทเรียน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3 p-lg-2 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <h4 onclick="window.location.href='exam_maincontent.php'">Painting
                                </h4>
                            </div>
                            <div class="col text-end">
                                <i class="fa-regular fa-trash-can" style="color: red;" onclick="showDelete()" title="ลบข้อมูล"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="button" class="btn btn-outline-primary" onclick="window.location.href='exam_maincontent.php'">เพิ่มบทเรียน</button>
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
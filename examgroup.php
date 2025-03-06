<div class="container-fluid mt-4  ">
    <div class="card shadow-sm mb-3" style="border: none;">
        <div class="card-body">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <h1 class="display-4" style="color: #18B0BD;">ประเภทข้อสอบ</h1>
                </div>
                <div class="col text-end">
                    <button type="text" class="btn btn-success" onclick="window.location.href='exam_form_maincontent.php'">
                        <i class="fas fa-plus"></i> เพิ่มชุดข้อสอบใหม่</button>
                </div>
            </div>
            <hr>

            <div class="row text-center">
                <div class="table-responsive mt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="thead-light">
                            <tr >
                                <th class="text-center"><b>ลำดับ</b></th>
                                <th class="text-center"><b>ชื่อประเภทข้อสอบ</b></th>
                                <th class="text-center"><b>จำนวนข้อสอบ</b></th>
                                <th class="text-center"><b>จัดการ</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>1</td>
                                <td>ประเภทงานสี</td>
                                <td>50 ข้อ</td>
                                <td>
                                    <button class="btn btn-outline-warning btn-sm me-2" title="แก้ไขข้อมูล" onclick="window.location.href='editexam_form_maincontent.php'"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-outline-danger btn-sm" title="ลบข้อมูล" onclick="showDelete() "><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   let table = new DataTable('#example', {
    paging: false,
    searching: false,
    language: {
      url: "assets/lib/dataTables/language.json",
      info: ""
    }
  });


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

    function showForm() {
        Swal.fire({
            title: "แก้ไขข้อมูล",
            confirmButtonColor: "green",
            allowOutsideClick: false,
            html: `
            <div class="container mt-4">
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2><i class="bi bi-folder"></i> ลงข้อสอบ</h2>
                </div>
            </div>
            <!-- button นำข้อมูลเข้า -->
            <div class="row">
                <div class="col-12 text-end mb-4">
                    <button type="button" class="btn btn-primary" id="uploadBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-file-earmark-arrow-down-fill"></i> นำเข้าข้อมูลจาก Excel
                    </button>
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#previewModal" title="แสดงตัวอย่าง" onclick="previewExam()">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- นำไฟล์ excel เข้า -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    <i class=" fas fa-file-import" style="color: green;"></i> นำเข้าไฟล์ Excel
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-custom alert-outline-warning" role="alert">
                                            <div class="alert-text">
                                                <p class="text-warning">วิธีการนำเข้าไฟล์คำถาม</p>
                                                1. จำนวนข้อคำถามไม่เกิน 50 แถว/ไฟล์ หากเกินโดยระบบจะตัดแค่ 100 แถวเท่านั้น
                                                <br>2. จำกัดขนาดไฟล์ไม่เกิน 500kb/ไฟล์
                                                <br>3. รองรับไฟล์ Excel ที่มีนามสกุล .xls เท่านั้น
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>เลือกไฟล์ Excel เพื่อนำเข้าข้อสอบ (นามสกุล .xls เท่านั้น)</label>
                                            <input type="file" class="form-control" id="file_excel" name="file_excel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="excel_data">
                                    <i class=" fas fa-file-import"></i> นำข้อมูลเข้า
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-3">
                    <input type="text" name="title" class="form-control" onclick="showToolbar(this)" placeholder="ตั้งชื่อหัวข้อสอบ" required>
                </div>

                <div class="mt-3 mb-2">
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="รายละเอียดแบบทดสอบ"></textarea>
                </div>


                <div class="question-box mb-4">
                <div id="excel_display_area" class="mt-4"></div>
                    <div class="row mt-3 mb-3">
                        <div class="col-10 text-start">
                            <label for="title">ตั้งคำถาม:<span class="text-danger">*</span></label>
                            <input type="text" name="question" class="form-control" placeholder="เพิ่มคำถาม ?" onclick="showToolbar(this)">
                            <span class="text-danger required-asterisk" style="display: none;">*</span>
                        </div>
                        <div class="col-2 d-flex align-items-end justify-content-start">
                            <label for="question_image" id="question_image_label" class="btn btn-outline-primary">
                                <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                            </label>
                            <input type="file" id="question_image" class="d-none" onchange="previewImage(this, 'question')">
                        </div>
                    </div>
                    <!-- Show image -->
                    <div class="mb-4" id="showimage"></div>
                    <!-- ตัวเลือก -->
                    <div id="options-container" class="mb-4 options-container">
                        <!-- ตัวเลือกตัวอย่าง -->
                        <div class="row align-items-center mb-2 g-2">
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            </div>
                            <div class="col-auto">
                                <label for="option_image_1" class="btn btn-outline-primary d-flex align-items-center">
                                    <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                                </label>
                                <input type="file" id="option_image_1" class="d-none" onchange="previewImage(this, 'option')">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="ตัวเลือกที่ 1">
                            </div>
                            <div class="col-auto">
                                <button class="btn" onclick="removeOption(this)" title="ลบตัวเลือก">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- ปุ่มเพิ่มตัวเลือก -->
                    <div class="mb-4 text-start">
                        <button class="btn default" onclick="addOption(this)"><i class="fas fa-plus"></i> <u>เพิ่มตัวเลือก</u></button>
                    </div>
                    <hr>

                    <!-- funtion -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 d-flex align-items-center">
                                <button class="btn btn-secondary me-2" onclick="addNewQuestion()" title="เพิ่มคำถาม">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                                <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Preview Modal -->
        <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="previewModalLabel">แสดงตัวอย่าง</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="previewContent">
                        <!-- แสดงเนื้อหา -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>`,
        })
    }
</script>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองคิวสอบ</title>
    <link href="assets/lib/jquery/bootstrap5.3.0.min.css" rel="stylesheet">
    <script src="assets/lib/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/lib/jquery/moment.min.js"></script>
    <script src="assets/lib/jquery/daterangepicker.min.js"></script>
    <link rel="stylesheet" href="assets/lib/jquery/daterangepicker.css" />
    <script src="assets/lib/sweetalert/sweetalert.js"></script>
    <!-- fontawsome -->
    <link rel="stylesheet" href="assets/lib/fontawsome/css/brands.css">
    <link rel="stylesheet" href="assets/lib/fontawsome/css/solid.css">
    <link rel="stylesheet" href="assets/lib/fontawsome/css/regular.css">
    <link rel="stylesheet" href="assets/lib/fontawsome/css/fontawesome.css">

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

        .card-body {
            padding: 2rem;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

    </style>
</head>

<body>
    <div class="col text-end p-3">
        <button class="btn btn-secondary" onclick="window.location.href='index.php'">
            <i class="fa-solid fa-arrow-left"></i> กลับ</button>
    </div>

    <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm " style="width: 100%; max-width: 1000px;">
            <div class="card-body">
                <h2 class="mb-4 text-center" style="margin: 0;">จองคิวสอบ</h2>
                <hr>

                <!-- เลือกรอบสอบ -->
                <div class="mb-3">
                    <label for="exam_id" class="form-label">เลือกรอบสอบ</label>
                    <select class="form-select" id="exam_id">
                        <option value="">-- เลือกรอบวันสอบ --</option>
                        <option value="exam1" data-name="ความปลอดภัยของการพ่นสี" data-start="24/02/2025" data-end="31/03/2025">ความปลอดภัยของการพ่นสี</option>
                        <option value="exam2" data-name="ประเภทของการพ่นสี" data-start="24/02/2025" data-end="31/03/2025">ประเภทของการพ่นสี</option>
                        <option value="exam3">Test</option>
                        <option value="exam4">Test</option>
                    </select>
                </div>

                <!-- เลือกวันที่ -->
                <div class="mb-3" id="date_section" style="display: none;">
                    <label for="datetimes" class="form-label">จองคิวสอบ <span class="text-danger">*</span></label>
                    <input type="text" id="datetimes" class="form-control" placeholder="เลือกวันที่">
                </div>

                <!-- กรอกรหัสพนักงาน -->
                <div class="mb-3" id="emp_section" style="display: none;">
                    <label for="emp_id" class="form-label">รหัสพนักงาน</label>
                    <div class="col-lg-6">
                        <input type="text" id="emp_id" class="form-control" placeholder="กรอกรหัสพนักงาน">
                    </div>
                </div>

                <!-- ข้อมูลพนักงาน -->
                <div id="employee_info" class="p-3 border rounded" style="display: none;">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <label for="name">ชื่อ - นามสกุล:</label>
                            <div class="mb-2">
                                <input type="text" id="emp_name" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label>เพศ:</label>
                            <input type="text" id="emp_gender" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <label for="department">แผนก:</label>
                            <div class="mb-2">
                                <input type="text" id="emp_department" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label for="factory" class="form-label m-0">โรงงาน:</label>
                            <select name="factory" id="emp_factory" class="form-select">
                                <option value="TS">TS</option>
                                <option value="PD">PD</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ปุ่มยืนยัน -->
                <div class="text-end mt-3" id="confirm_button_section" style="display: none;">
                    <button class="btn btn-success" id="confirm_button">ยืนยันการจอง</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#exam_id').change(function() {
                let selected = $(this).find(':selected');
                let startDate = selected.data('start');
                let endDate = selected.data('end');

                if (startDate && endDate) {
                    $('#datetimes').daterangepicker({
                        singleDatePicker: true,
                        minDate: moment(startDate, 'DD/MM/YYYY'),
                        maxDate: moment(endDate, 'DD/MM/YYYY'),
                        locale: {
                            format: 'DD/MM/YYYY'
                        }
                    });
                    $('#date_section').fadeIn();
                } else {
                    $('#date_section, #emp_section, #employee_info, #confirm_button_section').fadeOut();
                }
            });

            $('#datetimes').on('apply.daterangepicker', function() {
                $('#emp_section').fadeIn();
            });

            // ข้อมูลพนักงานตัวอย่าง
            const employeeData = {
                "1001": {
                    name: "สมชาย ใจดี",
                    gender: "ชาย",
                    department: "สี",
                    factory: "TS"
                },
                "1002": {
                    name: "มานะ มั่นคง",
                    gender: "ชาย",
                    department: "ประกอบ",
                    factory: "TS"
                },
                "1003": {
                    name: "สุภาพร สายใจ",
                    gender: "หญิง",
                    department: "เชื่อม",
                    factory: "PD"
                }
            };

            $('#emp_id').on('keyup', function() {
                let empId = $(this).val().trim();
                if (employeeData[empId]) {
                    $('#emp_name').val(employeeData[empId].name);
                    $('#emp_gender').val(employeeData[empId].gender);
                    $('#emp_department').val(employeeData[empId].department);
                    $('#emp_factory').val(employeeData[empId].factory);
                    $('#employee_info').fadeIn();
                    $('#confirm_button_section').fadeIn();
                } else {
                    $('#employee_info, #confirm_button_section').fadeOut();
                    if (empId) {}
                }
            });

            $('#confirm_button').click(function() {
                let examName = $('#exam_id').find(':selected').data('name');
                let examDate = $('#datetimes').val();
                let empId = $('#emp_id').val();

                if (examName && examDate && empId) {
                    Swal.fire({
                        icon: 'success',
                        title: 'จองคิวสอบสำเร็จ',
                        html: `<div class="exam-info p-3 rounded shadow-sm">
                            <p class="mb-2 text-start">คุณจองคิวสอบ: <label class="fw-bold">${examName}</label></p>
                            <p class="mb-2 text-start">วันที่: <label class="fw-bold">${examDate}</label></p>
                            <p class="text-start">รหัสพนักงาน: <label class="fw-bold">${empId}</label></p>
                        </div>
                    `,
                        // showCloseButton: true,
                        showConfirmButton: true,
                        confirmButtonColor: "green",
                        confirmButtonText: "ตกลง",
                    }).then((result) => {
                        window.location.href = 'index.php';
                    });
                }
            });
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองคิวสอบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="assets/lib/sweetalert/sweetalert.js"></script>
</head>

<body>
<div class="container mt-5 d-flex justify-content-center align-items-center" >
    <div class="card shadow-sm " style="width: 100%; max-width: 1000px;">
        <div class="card-body">
            <h2 class="mb-4 text-center" style="color: #18B0BD;margin: 0;">จองคิวสอบ</h2>
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
                        <label>ชื่อ - นามสกุล:</label>
                        <div class="mb-2">
                            <input type="text" id="emp_name" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <label for="gender" class="form-label m-0">เพศ:</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <label>แผนก:</label>
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
                        html: `<div style="text-align:start;">
                                คุณจองคิวสอบ <label>${examName}<label> 
                                วันที่ <label>${examDate}<label>
                                รหัสพนักงาน <label>${empId}<label>
                            </div>`,
                        // showCloseButton: true,
                        // showConfirmButton: false
                    });

                } else {
                    alert("⚠️ กรุณากรอกข้อมูลให้ครบถ้วน");
                }
            });
        });
    </script>
</body>

</html>
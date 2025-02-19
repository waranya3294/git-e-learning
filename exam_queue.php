<style>
    .demo-range .el-date-editor {
        margin: 8px;
    }

    .demo-range .el-range-separator {
        box-sizing: content-box;
    }
</style>

<div class="container-fluid mt-4 mb-4">
    <h1 class="display-4" style="color: #18B0BD;">จัดการจองคิวสอบ</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col text-end mb-2">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><i class="fas fa-plus"></i> เพิ่มช่วงเวลา</button>
                    <button class="btn btn-secondary"><i class="fa-solid fa-download"></i> Report</button>
                </div>
            </div>
            <hr style="margin: 0 -15px; color:#aaaaaa;">

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onshow="showReserve()">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มรอบเวลา</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!-- เลือกห้องสอบ -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="exam" class="form-label m-0">เลือกห้องสอบ <span class="text-danger">*</span></label>
                                        <select name="exam" id="exam" class="form-select">
                                            <option value="1">ความปลอดภัยของการพ่นสี</option>
                                            <option value="2">การสวมใส่ชุด PPE</option>
                                            <option value="3">Test</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- เลือกโรงงาน -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="factory" class="form-label m-0">โรงงาน <span class="text-danger">*</span></label>
                                        <select name="factory" id="factory" class="form-select">
                                            <option value="1">TS (ตาสิทธิ์)</option>
                                            <option value="2">PD (ปลวกแดง)</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- จองคิวสอบ -->
                                <div class="row mb-3">
                                    <div class="col-lg-12 text-start">
                                        <label for="datetimes" class="form-label m-0">เลือกวันที่ <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" id="datetimes" name="datetimes" class="form-control" required placeholder="เลือกวันที่" aria-describedby="exam_starttime" onclick="showReserve()">
                                            <span class="input-group-text" id="exam_starttime" style="cursor: pointer;">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- รอบเวลา -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="datetime" class="form-label m-0">รอบเวลา <span class="text-danger">*</span></label>
                                        <div id="timeSlotsContainer">
                                            <!-- พื้นที่สำหรับแสดงรอบเวลาที่เลือก -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    09:00 - 10:00 น.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    10:30 - 11:30 น.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    13:00 - 14:00 น.
                                                </label>
                                            </div>
                                        </div>
                                        <!-- ปุ่มสำหรับเพิ่มตัวเลือก -->
                                        <div class="form-check p-0">
                                            <button type="button" class="btn" onclick="addOption()"><i class="fas fa-plus"></i> เพิ่มรอบเวลา</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- จำนวนที่นั่ง -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="seats" class="form-label m-0">จำนวนที่นั่ง <span class="text-danger">*</span></label>
                                        <input class="form-control" type="number" id="seats" name="seats" placeholder="จำนวนที่นั่ง">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="window.location.href='exam_queue_maincontent.php'">เพิ่ม</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr style=" font-size:18px;">
                            <th><b>#</b></th>
                            <th><b>วันที่</b></th>
                            <th><b>ชื่อหลักสูตร</b></th>
                            <th><b>โรงงาน</b></th>
                            <th><b>จำนวนที่นั่ง</b></th>
                            <th><b>สถานะ</b></th>
                            <th><b>จัดการ</b></th>
                            <th><b>ดูรายละเอียด</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle" style="font-size: 18px;">
                            <td>1</td>
                            <td>13 กุมภาพันธ์ 2568 <br>09:00 - 10:00 น.</td>
                            <td>ความปลอดภัยของการพ่นสี</td>
                            <td class="text-center">ตาสิทธิ์</td>
                            <td class="text-center">5/5</td>
                            <td class="text-center">
                                <span class="badge text-bg-danger">เต็ม</span>
                            </td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-warning" onclick="showDetails(1)" style="color:white;"><i class="bi bi-eye"></i> ดูรายละเอียด</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="font-size: 18px;">
                            <td>2</td>
                            <td>13 กุมภาพันธ์ 2568 <br> 10:30 - 11:30 น. </td>
                            <td>ความปลอดภัยของการพ่นสี</td>
                            <td class="text-center">ตาสิทธิ์</td>
                            <td class="text-center">3/5</td>
                            <td class="text-center">
                                <span class="badge text-bg-success">ว่าง</span>
                            </td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-warning" onclick="showDetails(2)" style="color:white;"><i class="bi bi-eye"></i> ดูรายละเอียด</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    let table = new DataTable('#example', {
        language: {
            url: "assets/lib/dataTables/language.json"
        }
    });

    // ฟังก์ชันสำหรับเพิ่มรอบเวลาใหม่
    function addOption() {
        // สร้างกล่อง div ใหม่ที่จะเป็นตัวห่อฟอร์มการเลือกเวลา
        const newTimeSlotDiv = document.createElement('div');
        newTimeSlotDiv.classList.add('form-check', 'd-flex', 'mt-2'); // เพิ่ม flexbox

        // สร้างตัวเลือก radio button ใหม่
        const newRadioButton = document.createElement('input');
        newRadioButton.classList.add('form-check-input', 'me-2'); // เพิ่มคลาสเพื่อให้เป็น input แบบ radio
        newRadioButton.type = 'radio';
        newRadioButton.name = 'flexRadioDefault'; // ใช้ชื่อเดียวกันกับตัวเลือกเดิม

        
        // สร้าง label สำหรับตัวเลือกใหม่
        const newLabel = document.createElement('label');
        // newLabel.classList.add('form-check-label'); // เพิ่มคลาสเพื่อจัดรูปแบบ
        newLabel.setAttribute('for', 'flexRadioDefaultNew'); // กำหนด for ให้ตรงกับ id ของ input

        // สร้าง input type="time" สำหรับกรอกเวลาเอง
        const newTimeInput = document.createElement('input');
        newTimeInput.classList.add('form-control', 'me-2'); // เพิ่มคลาสเพื่อให้สอดคล้องกับการออกแบบ
        newTimeInput.type = 'time';
        newTimeInput.placeholder = 'เวลาเริ่มต้น';

        // สร้างปุ่มลบ
        const deleteButton = document.createElement('button');
        deleteButton.classList.add('btn', 'btn-sm');
        deleteButton.innerHTML = '<i class="bi bi-x-lg"></i>';
        deleteButton.onclick = function() {
            newTimeSlotDiv.remove(); // ลบ div ทั้งชุดเมื่อกดปุ่มลบ
        };

        // นำ radio button และ label มารวมกันใน div
        newTimeSlotDiv.appendChild(newRadioButton);
        newTimeSlotDiv.appendChild(newLabel);
        newTimeSlotDiv.appendChild(newTimeInput);
        newTimeSlotDiv.appendChild(deleteButton);

        // เพิ่ม div ใหม่ไปยังพื้นที่ที่แสดงรอบเวลา
        document.getElementById('timeSlotsContainer').appendChild(newTimeSlotDiv);
    }

    function showReserve() {
        const datetime = $("#datetime").val();
        $("#datetimes").daterangepicker({
            autoUpdateInput: false,
            showDropdowns: true, // แสดงตัวเลือกปี/เดือน
            singleDatePicker: true, // ✅ ให้เลือกได้เพียงวันเดียว
            minDate: moment().startOf('month'), // ✅ ป้องกันการเลือกวันเก่า
            locale: {
                format: "DD/MM/YYYY",
                cancelLabel: "Clear",
                daysOfWeek: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส"], // แสดงวันเป็นภาษาไทย
                monthNames: [
                    "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                    "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
                ]
            },
            isInvalidDate: function(date) {
                // ✅ บล็อกวันเสาร์ (6) และอาทิตย์ (0)
                return (date.isoWeekday() === 6 || date.isoWeekday() === 7);
            }
        });

        $("#datetimes").on("apply.daterangepicker", function(ev, picker) {
            $(this).val(picker.startDate.format("DD/MM/YYYY"));
        });

        $("#datetimes").on("cancel.daterangepicker", function(ev, picker) {
            $(this).val("");
        });

        // เปิด Datepicker เมื่อกดไอคอน 📅
        $("#exam_starttime").on("click", function() {
            $("#datetimes").focus();
        });
    }

    function editUser() {
        Swal.fire({
            width: 700,
            html: `
            <div class="text-start mb-3">
             <h2>แก้ไขข้อมูล</h2>
            </div>
            <hr style="margin:0 -15px;">
            <!-- เลือกห้องสอบ -->
            <div class="row mb-3 mt-3">
                <div class="col text-start">
                    <label for="exam" class="form-label m-0">เลือกห้องสอบ <span class="text-danger">*</span></label>
                        <select name="exam" id="exam" class="form-select">
                            <option value="1">ความปลอดภัยของการพ่นสี</option>
                            <option value="2">การสวมใส่ชุด PPE</option>
                            <option value="3">Test</option>
                        </select>
                     </div>
                </div>
                 <!-- เลือกโรงงาน -->
            <div class="row mb-3 mt-3">
                <div class="col text-start">
                    <label for="factory" class="form-label m-0">โรงงาน <span class="text-danger">*</span></label>
                        <select name="factory" id="factory" class="form-select">
                            <option value="1">TS (ตาสิทธิ์)</option>
                            <option value="2">PD (ปลวกแดง)</option>
                        </select>
                </div>
            </div>

            <!-- จองคิวสอบ -->
            <div class="row mb-3">
                <div class="col-lg-12 text-start">
                    <label for="datetimes" class="form-label m-0">เลือกวันที่ <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" id="swal-datetimes" name="datetimes" class="form-control" required placeholder="เลือกช่วงเวลา" aria-describedby="exam_starttime">
                            <span class="input-group-text" id="swal_exam_starttime" style="cursor: pointer;">
                            <i class="fa-solid fa-calendar-days"></i>
                            </span>
                        </div>
                    </div>
                </div>

             <!-- รอบเวลา -->
            <div class="row mb-3 text-start">
                <div class="col">
                    <label for="datetime" class="form-label m-0">รอบเวลา <span class="text-danger">*</span></label>
                        <div id="swal-timeSlotsContainer">
                        <!-- พื้นที่สำหรับแสดงรอบเวลาที่เลือก -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="swal-flexRadioDefault" id="swal-flexRadioDefault1">
                                <label class="form-check-label" for="swal-flexRadioDefault1">
                                    09:00 - 10:00 น.
                                </label>
                            </div>
                    <div class="form-check">
                       <input class="form-check-input" type="radio" name="swal-flexRadioDefault" id="swal-flexRadioDefault2" checked>
                            <label class="form-check-label" for="swal-flexRadioDefault2">
                                10:30 - 11:30 น.
                            </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="swal-flexRadioDefault" id="swal-flexRadioDefault3">
                        <label class="form-check-label" for="swal-flexRadioDefault3">
                            13:00 - 14:00 น.
                        </label>
                    </div>
                    </div>
                    <!-- ปุ่มสำหรับเพิ่มตัวเลือก -->
                    <div class="form-check p-0">
                        <button type="button" class="btn" onclick="addSwalOption()"><i class="fas fa-plus"></i> เพิ่มรอบเวลา</button>
                    </div>
                </div>
            </div>


            <!-- จำนวนที่นั่ง -->
            <div class="row mb-3">
                <div class="col text-start">
                    <label for="seats" class="form-label m-0">จำนวนที่นั่ง <span class="text-danger">*</span></label>
                    <input class="form-control" type="number" id="seats" name="seats" placeholder="จำนวนที่นั่ง">
                </div>
            </div>
            `,
            confirmButtonText: 'ตกลง',
            confirmButtonColor: 'green',
            showCancelButton: true,
            cancelButtonText: 'ยกเลิก',
            didOpen: () => {
                // แสดงปฏิทินใน Swal
                $("#swal-datetimes").daterangepicker({
                    autoUpdateInput: false,
                    showDropdowns: true, // แสดงตัวเลือกปี/เดือน
                    singleDatePicker: true, // ✅ ให้เลือกได้เพียงวันเดียว
                    minDate: moment().startOf('month'), // ✅ ป้องกันการเลือกวันเก่า
                    locale: {
                        format: "DD/MM/YYYY",
                        cancelLabel: "Clear",
                        daysOfWeek: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส"], // แสดงวันเป็นภาษาไทย
                        monthNames: [
                            "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                            "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
                        ]
                    },
                    isInvalidDate: function(date) {
                        // ✅ บล็อกวันเสาร์ (6) และอาทิตย์ (0)
                        return (date.isoWeekday() === 6 || date.isoWeekday() === 7);
                    }
                });

                $("#swal-datetimes").on("apply.daterangepicker", function(ev, picker) {
                    $(this).val(picker.startDate.format("DD/MM/YYYY"));
                });

                $("#swal-datetimes").on("cancel.daterangepicker", function(ev, picker) {
                    $(this).val("");
                });

                // เปิด Datepicker เมื่อกดไอคอน 📅
                $("#swal_exam_starttime").on("click", function() {
                    $("#swal-datetimes").focus();
                });
            }
        })

    }

   // ฟังก์ชันสำหรับเพิ่มรอบเวลาใหม่ใน Swal
function addSwalOption() {
    // สร้าง div ใหม่สำหรับรอบเวลา
    const newTimeSlotDiv = document.createElement('div');
    newTimeSlotDiv.classList.add('form-check', 'd-flex', 'mt-2'); // เพิ่มคลาสสำหรับจัดรูปแบบ

    // สร้าง radio button ใหม่
    const newRadioButton = document.createElement('input');
    newRadioButton.classList.add('form-check-input', 'me-2'); // เพิ่มคลาสให้กับ radio button
    newRadioButton.type = 'radio'; // กำหนดเป็นประเภท radio button
    newRadioButton.name = 'swal-flexRadioDefault'; // ตั้งชื่อให้กับ radio button

    // สร้าง label สำหรับ radio button
    const newLabel = document.createElement('label');
    newLabel.setAttribute('for', 'swal-flexRadioDefaultNew'); // ตั้งค่าให้ตรงกับ id ของ radio button

    // สร้าง input สำหรับกรอกเวลาเอง
    const newTimeInput = document.createElement('input');
    newTimeInput.classList.add('form-control', 'me-2'); // เพิ่มคลาสให้กับ input

    // สร้างปุ่มสำหรับลบรอบเวลา
    const deleteButton = document.createElement('button');
    deleteButton.classList.add('btn', 'btn-sm'); // เพิ่มคลาสให้กับปุ่ม
    deleteButton.innerHTML = '<i class="bi bi-x-lg"></i>'; // ใส่ไอคอนสำหรับปุ่มลบ
    deleteButton.onclick = function() {
        newTimeSlotDiv.remove(); // ลบ div ทั้งหมดเมื่อกดปุ่มลบ
    };

    // เพิ่ม radio button, label, input และปุ่มลบเข้าไปใน div
    newTimeSlotDiv.appendChild(newRadioButton);
    newTimeSlotDiv.appendChild(newLabel);
    newTimeSlotDiv.appendChild(newTimeInput);
    newTimeSlotDiv.appendChild(deleteButton);

    // เพิ่ม div ที่สร้างขึ้นไปยัง container ที่ต้องการ
    document.getElementById('swal-timeSlotsContainer').appendChild(newTimeSlotDiv);
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
                    icon: "success",
                    timer: 1500,
                    showConfirmButton: false,
                });
            }
        });
    }

    function showDetails(row) {
        // ข้อมูลตัวอย่างสำหรับแสดงรายละเอียด
        const details = [
            {
                courseName: "ความปลอดภัยของการพ่นสี",
                dateTime: "13 กุมภาพันธ์ 2568 เวลา 09:00 - 10:00 น.",
                location: "โรงงานตาสิทธิ์",
                seats: "5 ที่นั่ง",
                status: "เต็ม"
            },
            {
                courseName: "ความปลอดภัยของการพ่นสี",
                dateTime: "13 กุมภาพันธ์ 2568 เวลา 10:30 - 11:30 น.",
                location: "โรงงานตาสิทธิ์",
                seats: "3 ที่นั่ง",
                status: "ว่าง"
            }
        ];

        // ดึงข้อมูลตามแถวที่คลิก
        const detail = details[row - 1];
        localStorage.setItem('courseDetail', JSON.stringify(detail));
        window.location.href = 'course_details_maincontent.php'; // Change the redirection URL
    }
</script>
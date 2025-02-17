<style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: normal;
        src: url(assets/lib/fonts/Kanit/Kanit-Regular.ttf);
        font-size: 14px;
    }

    th,
    td {
        text-align: center;
        vertical-align: middle;
        padding: 10px;
        /* เพิ่มช่องว่างให้ดูสวยขึ้น */
        border: 1px solid #ddd;
    }

    .middle {
        text-align: center;
        vertical-align: middle;
    }

    #calendar {
        max-width: 600px;
    }

    .fc-prev-button {
        background-color: #FF3333;
        border-color: #FF3333;
        color: white;
    }

    .fc-next-button {
        background-color: #FF3333;
        border-color: #FF3333;
        color: white;
    }

    .fc-toolbar-title {
        color: #FF5733;
    }


    .fc .fc-highlight {
        background: #ffff8c;
    }

    .selected-date {
        background: #ffff8c !important;
    }
</style>

<div class="container-fluid mt-4">
    <h2 style="color: #18B0BD;"><b>แดชบอร์ด</b></h2>
    <hr>
    <div class="row">
        <div class="col-md-4 mt-2 mb-2">
            <div class="card shadow-sm border-0 rounded overflow-hidden" onclick="window.location.href='room_maincontent.php'" style="cursor: pointer;">
                <div class="card-body text-start text-white" style="background: linear-gradient(135deg, #01a6ba,  #0288a6a6);">
                    <div class="icon" style="font-size: 3.5rem;">🏢</div>
                    <h2 class="mt-2 fw-bold text-start">สร้างห้องสอบ</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2 mb-2">
            <div class="card shadow-sm border-0 rounded overflow-hidden" onclick="window.location.href='examform_maincontent.php'" style="cursor: pointer;">
                <div class="card-body text-start text-white" style="background: linear-gradient(135deg, #96cfcf, #64b3b3);">
                    <div class="icon" style="font-size: 3.5rem;">📄</div>
                    <h2 class="mt-2 fw-bold text-start">สร้างเนื้อหา</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2 mb-2">
            <div class="card shadow-sm border-0 rounded overflow-hidden" onclick="window.location.href='examgroup_maincontent.php'" style="cursor: pointer;">
                <div class="card-body text-start text-white" style="background: linear-gradient(135deg, #afd7f6, #85b8e0);">
                    <div class="icon" style="font-size: 3.5rem;">📝</div>
                    <h2 class="mt-2 fw-bold text-start">สร้างข้อสอบ</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt-4 mb-3">
    <div class="card shadow-sm rounded-1">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-sm-6 ">
                    <h2 style="color: #18B0BD;"><b>ปฏิทินการสอบ</b></h2>
                    <div id='calendar' class="mt-4" style="cursor: pointer"></div>
                    <div class="row align-items-center justify-content-center d-flex mt-2">
                        <div class="col-auto d-flex align-items-center">
                            <button class="btn btn-success me-1"></button>
                            <p class="mb-0">ว่าง</p>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <button class="btn btn-danger me-1"></button>
                            <p class="mb-0">เต็ม</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mt-4">
                    <h4>แสดงรายการ</h4>
                    <!-- <label for="text" style="font-size: 18px;">ชื่อห้องสอบ: <span id="selected-room"></span></label> -->
                    <label for="text" style="font-size: 18px;" class="mb-2">วันที่: <span id="selected-date"></span></label>
                    <div class="table-responsive">
                        <table id="employee-table" class="table table-striped " style="width:100%">
                            <thead>
                                <tr>
                                    <th class="Middle">รหัสพนักงาน</th>
                                    <th class="Middle">ชื่อ - นามสกุล</th>
                                    <!-- <th class="Middle">ห้องสอบ</th> -->
                                    <td>รอบเวลา</td>
                                    <th class="Middle">ตำแหน่ง</th>
                                    <th class="Middle">แผนก</th>
                                    <th class="Middle">จุดปฏิบัติงาน</th>
                                    <th class="Middle">โรงงาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- แสดงข้อมูลในตาราง -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-3 mb-4">
    <h2 style="color: #18B0BD;"><b>ตารางจองคิวสอบ</b></h2>
    <hr>
    <div class="card shadow-sm rounded-1">
        <div class="card-body">
            <div class="row">
                <div class="col text-end">
                    <button class="btn btn-success" onclick="window.location.href='reservation.php'">จองคิวสอบ</button>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr style=" font-size:14px;">
                            <th class="Middle">รหัสพนักงาน</th>
                            <th class="Middle">ชื่อ - นามสกุล</th>
                            <!-- <th class="Middle">ห้องสอบ</th> -->
                            <th class="Middle">วันที่จอง</th>
                            <td>รอบเวลา</td>
                            <th class="Middle">ตำแหน่ง</th>
                            <th class="Middle">แผนก</th>
                            <th class="Middle">จุดปฏิบัติงาน</th>
                            <th class="Middle">โรงงาน</th>
                            <th class="Middle">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="middle">
                            <td class="text-center middle">518</td>
                            <td class="middle text-start">นาย ปฏิวัฒน์ นาดี </td>
                            <!-- <td class="middle">ประกอบ</td> -->
                            <td class="middle">18/02/2025</td>
                            <td></td>
                            <td class="middle text-start">Manufacturing</td>
                            <td class="middle text-start">Manufacturing Pluakdaeng Factory</td>
                            <td class="middle text-start">CNC</td>
                            <td class="middle">PD</td>
                            <td> <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4 mb-4">
    <h2 style="color: #18B0BD;"><b>สรุปผลการสอบ</b></h2>
    <hr>
    <div class="card shadow-sm rounded-1">
        <div class="card-body">
            <h4 class="text-center mb-4">TS</h4>
            <div id="chart"></div>
            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr class="text-center" style="font-size:18px; border: 1px solid ridge;">
                            <th class="text-center">ประเภท</th>
                            <th class="text-center">จำนวนผู้เข้าสอบ</th>
                            <th class="text-center">สอบเสร็จแล้ว</th>
                            <th class="text-center">ยังไม่สอบ</th>
                            <th class="text-center">ผ่าน</th>
                            <th class="text-center">ไม่ผ่าน</th>
                            <th class="text-center">ดาวน์โหลด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>สี</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>เชื่อม</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>ประกอบ</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>CNC</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow-sm rounded-1 mt-4">
        <div class="card-body">
            <h4 class="text-center mb-4">PD</h4>
            <div id="chart1"></div>
            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center" style="font-size:18px; border: 1px solid ridge;">
                            <th class="text-center">ประเภท</th>
                            <th class="text-center">จำนวนผู้เข้าสอบ</th>
                            <th class="text-center">สอบเสร็จแล้ว</th>
                            <th class="text-center">ยังไม่สอบ</th>
                            <th class="text-center">ผ่าน</th>
                            <th class="text-center">ไม่ผ่าน</th>
                            <th class="text-center">ดาวน์โหลด</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>สี</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>เชื่อม</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>ประกอบ</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <td>CNC</td>
                            <td>100</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let tables = document.querySelectorAll('.table');
        tables.forEach(table => {
            new DataTable(table, {
                paging: false,
                searching: false,
                language: {
                    url: "assets/lib/dataTables/language.json",
                    info: ""
                }
            });
        });

        $('#filter-date').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            locale: {
                format: 'DD/MM/YYYY'
            }
        });

        $('#filter-date').on('apply.daterangepicker', function(ev, picker) {
            let selectedDate = picker.startDate.format('YYYY-MM-DD');
            filterEmployeesByDate(selectedDate);
        });

        // แสดงชื่อในตาราง
        function filterEmployeesByDate(date) {

            let employeeData = {
                '2025-02-18': [{
                    id: '518',
                    name: 'นาย ปฏิวัฒน์',
                    department: 'Manufacturing ',
                    section: 'Manufacturing Pluakdaeng Factory',
                    wrokplace: 'CNC',
                    factory: 'PD',

                }],

            };

            let employees = employeeData[date] || [];
            let tbody = document.querySelector('#employee-table tbody');
            tbody.innerHTML = '';


            employees.forEach(emp => {
                let row = `
                <tr>
                    <td>${emp.id}</td>
                    <td>${emp.name}</td>
                    <td></td>
                    <td>${emp.department}</td>
                    <td>${emp.section}</td>
                    <td>${emp.wrokplace}</td>
                    <td>${emp.factory}</td>
                </tr>`;
                tbody.innerHTML += row;
            });
        }

        //calendar
        // กำหนดตัวแปรสำหรับ element ของปฏิทิน
        var calendarEl = document.getElementById('calendar');

        // สร้างปฏิทินโดยใช้ FullCalendar
        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'local', // ใช้ timezone ตามเครื่องของผู้ใช้
            locale: 'th', // ตั้งค่าให้ใช้ภาษาไทย
            themeSystem: 'bootstrap5', // ใช้ธีมของ Bootstrap 5
            selectable: true, // เปิดให้สามารถเลือกช่วงวันได้

            // กำหนดส่วนหัวของปฏิทิน
            headerToolbar: {
                left: 'prev', // ปุ่มย้อนกลับและไปข้างหน้า
                right: "next",
                center: 'title', // แสดงชื่อเดือนและปีตรงกลาง

            },
            weekNumbers: false, // แสดงหมายเลขสัปดาห์
            dayMaxEvents: true, // กำหนดให้แต่ละวันสามารถแสดงหลายเหตุการณ์ได้

            // ฟังก์ชันเมื่อผู้ใช้ลากเลือกช่วงวัน
            select: function(info) {
                // แปลงวันที่เริ่มต้นและวันที่สิ้นสุดให้อยู่ในรูปแบบภาษาไทย (วัน เดือน ปี)
                let startDate = new Date(info.start).toLocaleDateString('th-TH', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                });
                let endDate = new Date(info.end - 1).toLocaleDateString('th-TH', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                });

                // แสดงช่วงวันที่เลือกใน element ที่มี id เป็น "selected-date"
                document.getElementById('selected-date').innerText = ` ${startDate} ถึง ${endDate}`;
            },

            // ฟังก์ชันเมื่อผู้ใช้คลิกวันที่ในปฏิทิน
            dateClick: function(info) {
                // แปลงวันที่ที่คลิกเป็นภาษาไทย
                let selectedDate = new Date(info.date).toLocaleDateString('th-TH', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                });

                // แสดงวันที่ที่เลือกใน element ที่มี id เป็น "selected-date"
                document.getElementById('selected-date').innerText = ` ${selectedDate}`;

                // เรียกใช้ฟังก์ชัน filterEmployeesByDate() เพื่อตรวจสอบข้อมูลพนักงานตามวันที่ที่เลือก
                filterEmployeesByDate(info.dateStr);
            },

            events: [{
                    start: '2025-02-11',
                    title: 'ว่าง ',
                    color: 'green'
                },
                {
                    start: '2025-02-12',
                    title: 'ว่าง ',
                    color: 'green'
                },
                {
                    start: '2025-02-13',
                    title: 'เต็ม ',
                    color: 'red'
                }
            ],

            // กำหนดเหตุการณ์ (events) ที่จะแสดงในปฏิทิน
            //     events: [{
            //             title: 'สอบสี', // ชื่อเหตุการณ์
            //             start: '2025-02-03', // วันที่เริ่มต้น
            //             end: '2025-02-07', // วันที่สิ้นสุด
            //             color: '#ffa500', // สีของเหตุการณ์
            //         },
            //         {
            //             title: 'สอบความปลอดภัยของการพ่นสี',
            //             start: '2025-02-07',
            //             end: '2025-02-15',
            //             color: '#00adb0',
            //         },
            //         {
            //             title: 'เชื่อม',
            //             start: '2025-02-07',
            //             end: '2025-02-11',
            //             color: '#9933FF',
            //         },
            //         {
            //             title: 'สอบประกอบ',
            //             start: '2025-02-28',
            //             color: '#3CB371',
            //         }
            //     ],
        });

        // แสดงผลปฏิทิน
        calendar.render();

    });

    async function fetchEmployeeData(empId) {
        // จำลองข้อมูลพนักงาน
        const employeeData = {
            "1001": {
                name: "สมชาย ใจดี",
                department: "สี",
                factory: "TS"
            },
            "1002": {
                name: "มานะ มั่นคง",
                department: "ประกอบ",
                factory: "TS"
            },
            "1003": {
                name: "สุภาพร สายใจ",
                department: "เชื่อม",
                factory: "PD"
            },
        };

        return employeeData[empId] || null;
    }

    async function showReserve() {
        const {
            value: date
        } = await Swal.fire({
            title: "เลือกวันสอบ",
            html: `
             <div class="row mb-3">
        <div class="col-lg-12">
            <select class="form-control" id="exam_id">
                <option value="">-- เลือกรอบวันสอบ--</option>
                <option value="exam1">ความปลอดภัยของการพ่นสี (24 กุมภาพันธ์ 2568 - 31 มีนาคม 2568)</option>
                <option value="exam1">ประเภทของการพ่นสี (24 กุมภาพันธ์ 2568 - 31 มีนาคม 2568)</option>
                <option value="exam2">Test</option>
                <option value="exam3">Test</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-12 text-start">
            <label for="datetimes">จองคิวสอบ <span class="text-danger">*</span></label>
            <div class="input-group">
                <input type="text" id="datetimes" name="datetimes" class="form-control" required placeholder="เลือกช่วงเวลา" aria-describedby="exam_starttime">
                <span class="input-group-text" id="exam_starttime" style="cursor: pointer;">
                    <i class="fa-solid fa-calendar-days"></i>
                </span>
            </div>
        </div>
    </div>`,
            showCancelButton: true,
            cancelButtonText: "ยกเลิก",
            confirmButtonColor: "green",
            confirmButtonText: "ถัดไป",

            preConfirm: () => {
                const exam_id = $("#exam_id").val();
                const datetimes = $("#datetimes").val();

                if (!exam_id) {
                    Swal.showValidationMessage("กรุณาเลือกรอบวันสอบ!");
                }
                if (!datetimes) {
                    Swal.showValidationMessage("กรุณาเลือกวันที่สอบ!");
                }

                if (!exam_id || !datetimes) {
                    return false; // ป้องกันการปิด Swal
                }

                return {
                    exam_id,
                    datetimes
                };
            },
            didOpen: () => {
                // ✅ กำหนด Datepicker ใน SweetAlert2 ให้เลือกเป็นเดือน
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

        });
        const {
            value: empData
        } = await Swal.fire({
            title: "กรอกรหัสพนักงาน",
            html: `
            <input type="text" id="id_input" class="swal2-input " placeholder="รหัสพนักงาน" onkeyup="validateID(event)"> 
            <p id="id_warning" style="color: red; display: none;">กรุณากรอกตัวเลขเท่านั้น</p>
            <div id="emp_info"></div>
        `,
            showCancelButton: true,
            confirmButtonColor: "green",
            confirmButtonText: "ยืนยัน",
            cancelButtonText: "ยกเลิก",
            preConfirm: async () => {
                let empIdInput = document.getElementById("id_input").value;
                if (!empIdInput || isNaN(empIdInput)) {
                    Swal.showValidationMessage("กรุณากรอกรหัสพนักงานที่เป็นตัวเลข");
                    return false;
                }

                let empData = await fetchEmployeeData(empIdInput);
                if (!empData) {
                    Swal.showValidationMessage("ไม่พบข้อมูลพนักงาน");
                    return false;
                }
                return {
                    empId: empIdInput,
                    ...empData
                };
            }
        });

        if (!empData) return;

        Swal.fire({
            title: 'จองคิวสอบสำเร็จ',
            icon: 'success',
            timer: 3000,
            showConfirmButton: false
        });

        document.getElementById('selected-room').innerText = empData.exam_id;
        document.getElementById('selected-date').innerText = date.datetimes;

        console.log("วันสอบที่เลือก:", date);
        console.log("รหัสพนักงาน:", empData.empId);
        console.log("ชื่อ:", empData.name);
        console.log("แผนก:", empData.department);
        console.log("โรงงาน:", empData.factory);
    }

    function validateID(event) {
        let idInput = document.getElementById("id_input").value;
        let warningText = document.getElementById("id_warning");
        let empInfo = document.getElementById("emp_info");

        if (isNaN(idInput) || idInput.trim() === "") {
            warningText.style.display = "block";
            empInfo.innerHTML = "";
        } else {
            warningText.style.display = "none";
            fetchEmployeeData(idInput).then(data => {
                if (data) {
                    empInfo.innerHTML = `
                     <div class="row ">
        <div class="col-md-12 col-lg-12 text-start mb-3">
            <label class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" id="emp_name_preview" class="form-control" value="${data.name}" readonly>
        </div>
        <div class="col-md-12 col-lg-12 text-start mb-3">
            <label class="form-label">แผนก</label>
            <input type="text" id="emp_department_preview" class="form-control" value="${data.department}" readonly>
        </div>
        <div class="col-md-12 col-lg-12 text-start mb-3">
            <label class="form-label">โรงงาน</label>
            <input type="text" id="emp_factory_preview" class="form-control" value="${data.factory}" readonly>
        </div>
    </div>`;
                } else {
                    empInfo.innerHTML = "<span style='color: red;'>ไม่พบข้อมูลพนักงาน</span>";
                }
            });
        }
        // กด Enter เพื่อกดยืนยัน
        if (event.key === "Enter") {
            document.querySelector(".swal2-confirm").click();
        }
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


    // กราฟ TS
    var options = {
        series: [{
            name: 'จำนวนผู้เข้าสอบทั้งหมด',
            data: [100, 100, 200, 120]
        }, {
            name: 'สอบแล้ว',
            data: [76, 85, 101, 98]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 5,
                borderRadiusApplication: 'end'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['สี', 'เชื่อม', 'ประกอบ', 'CNC'],
        },
        yaxis: {
            title: {
                text: 'จำนวนพนักงาน'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return +val
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();


    var options = {
        series: [{
            name: 'จำนวนผู้เข้าสอบทั้งหมด',
            data: [100, 100, 200, 120]
        }, {
            name: 'สอบแล้ว',
            data: [76, 85, 101, 98]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 5,
                borderRadiusApplication: 'end'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['สี', 'เชื่อม', 'ประกอบ', 'CNC'],
        },
        yaxis: {
            title: {
                text: 'จำนวนพนักงาน'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return +val
                }
            }
        }
    };
    // กราฟ PD
    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
</script>
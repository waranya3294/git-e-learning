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

        <div class="col-md-6 mt-2 mb-2">
            <div class="card shadow-sm border-0 rounded overflow-hidden" onclick="window.location.href='examgroup_maincontent.php'" style="cursor: pointer;">
                <div class="card-body text-start text-white" style="background: linear-gradient(135deg, #afd7f6, #85b8e0);">
                    <div class="icon" style="font-size: 3.5rem;">📝</div>
                    <h2 class="mt-2 fw-bold text-start">สร้างข้อสอบ</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-2 mb-2">
            <div class="card shadow-sm border-0 rounded overflow-hidden" onclick="window.location.href='room_maincontent.php'" style="cursor: pointer;">
                <div class="card-body text-start text-white" style="background: linear-gradient(135deg, #01a6ba,  #0288a6a6);">
                    <div class="icon" style="font-size: 3.5rem;">🏢</div>
                    <h2 class="mt-2 fw-bold text-start">สร้างห้องเรียนและบทเรียน</h2>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid mt-4 mb-3">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <div class="row">
                <!-- Calendar Section -->
                <div class="col-lg-6 col-md-12">
                    <h2 class=" text-info mb-4"><b>ปฏิทินการสอบ</b></h2>
                    <div id='calendar' class="mt-4 p-3 border rounded shadow-sm" style="cursor: pointer; min-height: 500px;"></div>
                    <div class="d-flex justify-content-center align-items-center gap-4 mt-3">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-success me-2" style="width: 20px; height: 20px;"></button>
                            <p class="mb-0">ว่าง</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-danger me-2" style="width: 20px; height: 20px;"></button>
                            <p class="mb-0">เต็ม</p>
                        </div>
                    </div>
                </div>

                <!-- Reservation Status Section -->
                <div class="col-lg-6 col-md-12">
                    <h2 class="text-start mt-5">แสดงสถานะจองสอบ</h2>
                    <label style="font-size: 24px;" class="d-block text-start mt-3">วันที่: <span id="selected-date"></span></label>

                    <div id="factory_group" class="d-none">
                        <div class="row g-3 mt-2">
                            <div class="col-12">
                                <div class="card shadow-sm rounded-3">
                                    <div class="card-body">
                                        <p class="fw-bold" style="font-size: 22px;">โรงงาน : TS (ตาสิทธิ์)</p>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 9:00 - 10:00 น. (3/5) <button class="badge bg-success border-0">ว่าง</button></label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 10:30 - 11:30 น. (2/5) <button class="badge bg-success border-0">ว่าง</button></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card shadow-sm rounded-3">
                                    <div class="card-body">
                                        <p class="fw-bold" style="font-size: 22px;">โรงงาน : PD (ปลวกแดง)</p>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 9:00 - 10:00 น. (3/5) <button class="badge bg-success border-0">ว่าง</button></label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 10:30 - 11:30 น. (2/5) <button class="badge bg-success border-0">ว่าง</button></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Exam_factory_group" class="d-none">
                        <div class="row g-3 mt-2">
                            <div class="col-12">
                                <div class="card shadow-sm rounded-3">
                                    <div class="card-body">
                                        <p class="fw-bold" style="font-size: 22px;">โรงงาน : TS (ตาสิทธิ์)</p>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 9:00 - 10:00 น. (5/5) <button class="badge bg-danger border-0">เต็ม</button></label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 10:30 - 11:30 น. (5/5) <button class="badge bg-danger border-0">เต็ม</button></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card shadow-sm rounded-3">
                                    <div class="card-body">
                                        <p class="fw-bold" style="font-size: 22px;">โรงงาน : PD (ปลวกแดง)</p>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 9:00 - 10:00 น. (5/5) <button class="badge bg-danger border-0">เต็ม</button></label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <label class="form-check-label" style="font-size: 18px;"><i class="fa-regular fa-clock"></i> 10:30 - 11:30 น. (5/5) <button class="badge bg-danger border-0">เต็ม</button></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid mt-3 mb-4">
    <h2 style="color: #18B0BD;"><b>ตารางแสดงรายการจองคิวสอบ</b></h2>
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
                            <!-- <th>#</th> -->
                            <th>วันที่จอง</th>
                            <th>รอบเวลา</th>
                            <th class="text-start">รหัสพนักงาน</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>ตำแหน่ง</th>
                            <th>ฝ่าย</th>
                            <th>แผนก</th>
                            <th>จุดปฏิบัติงาน</th>
                            <th>โรงงาน</th>
                            <th>สถานะ</th>
                            <th class="Middle">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>3</td> -->
                            <td>12/02/2025</td>
                            <td>09:00 - 10:00 น.</td>
                            <td class="text-center">3790</td>
                            <td>นาย เทวัน บุญยะบุตร</td>
                            <td>Painter</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Final Paint 20 Ton</td>
                            <td>TS</td>
                            <td><span class="badge text-bg-warning" style="font-size: 14px;"></>จองสอบ</td>
                            <td> <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>12/02/2025</td>
                            <td>09:00 - 10:00 น.</td>
                            <td class="text-center">3804</td>
                            <td>นาย อนุวัฒน์ โถทอง</td>
                            <td>Painter</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Final Paint 35 Ton</td>
                            <td>TS</td>
                            <td><span class="badge text-bg-warning" style="font-size: 14px;"></>จองสอบ</td>
                            <td> <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>12/02/2025</td>
                            <td>09:00 - 10:00 น.</td>
                            <td class="text-center">0549</td>
                            <td>นาย สนิท เงาใส</td>
                            <td>Painter</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Final Paint 35 Ton</td>
                            <td>TS</td>
                            <td><span class="badge text-bg-warning" style="font-size: 14px;"></>จองสอบ</td>
                            <td> <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button></td>

                        </tr>
                        <tr class="middle">
                            <!-- <td>1</td> -->
                            <td>12/02/2025</td>
                            <td>10:30 - 11:30 น.</td>
                            <td class="text-center">3811</td>
                            <td>นาย วิทยา ลอยอากาศ</td>
                            <td>Painter</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Top Coat</td>
                            <td>TS</td>
                            <td><span class="badge text-bg-warning" style="font-size: 14px;"></>จองสอบ</td>
                            <td> <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button></td>
                        </tr>
                        <tr>
                            <!-- <td>2</td> -->
                            <td>12/02/2025</td>
                            <td>10:30 - 11:30 น.</td>
                            <td class="text-center">3768</td>
                            <td>นาย วีระศักดิ์ คงชูดี</td>
                            <td>Painter</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Top Coat</td>
                            <td>TS</td>
                            <td><span class="badge text-bg-warning" style="font-size: 14px;"></>จองสอบ</td>
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
            <h4 class="text-center mb-4">โรงงาน : TS (ตาสิทธิ์)</h4>
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
            <h4 class="text-center mb-4">โรงงาน : PD (ปลวกแดง)</h4>
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
                paging: true,
                searching: true,
                language: {
                    url: "assets/lib/dataTables/language.json",

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

            dateClick: function(info) {
                // แปลงวันที่ที่คลิกเป็นภาษาไทย
                let selectedDate = new Date(info.date).toLocaleDateString('th-TH', {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                });

                // แสดงวันที่ที่เลือกใน element ที่มี id เป็น "selected-date"
                document.getElementById('selected-date').innerText = ` ${selectedDate}`;

                if (info.dateStr === '2025-02-11' || info.dateStr === '2025-02-12' || info.dateStr === '2025-02-13') {
                    if (info.dateStr === '2025-02-13') {
                        // แสดง element ที่มี id เป็น "Exam_factory_group"
                        document.getElementById('Exam_factory_group').classList.remove('d-none');
                        // ซ่อน element ที่มี id เป็น "factory_group"
                        document.getElementById('factory_group').classList.add('d-none');
                    } else {
                        // แสดง element ที่มี id เป็น "factory_group"
                        document.getElementById('factory_group').classList.remove('d-none');
                        // ซ่อน element ที่มี id เป็น "Exam_factory_group"
                        document.getElementById('Exam_factory_group').classList.add('d-none');
                    }
                } else {
                    // ซ่อนทั้ง "factory_group" และ "Exam_factory_group"
                    document.getElementById('factory_group').classList.add('d-none');
                    document.getElementById('Exam_factory_group').classList.add('d-none');
                }

                // เรียกใช้ฟังก์ชัน filterEmployeesByDate() เพื่อตรวจสอบข้อมูลพนักงานตามวันที่ที่เลือก
                filterEmployeesByDate(info.dateStr);
                displayReservationStatus(info.dateStr);
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
        });

        // แสดงผลปฏิทิน
        calendar.render();

        function displayReservationStatus(date) {
            const reservationData = {
                '2025-02-12': [{
                        factory: 'TS',
                        time: '9:00 - 10:00 น.',
                        status: 'ว่าง'
                    },
                    {
                        factory: 'TS',
                        time: '10:30 - 11:30 น.',
                        status: 'เต็ม'
                    },
                    {
                        factory: 'PD',
                        time: '9:00 - 10:00 น.',
                        status: 'ว่าง'
                    },
                    {
                        factory: 'PD',
                        time: '10:30 - 11:30 น.',
                        status: 'เต็ม'
                    }
                ],
                '2025-02-13': [ // Add data for the full date
                    {
                        factory: 'TS',
                        time: '9:00 - 10:00 น.',
                        status: 'เต็ม'
                    },
                    {
                        factory: 'TS',
                        time: '10:30 - 11:30 น.',
                        status: 'เต็ม'
                    },
                    {
                        factory: 'PD',
                        time: '9:00 - 10:00 น.',
                        status: 'เต็ม'
                    },
                    {
                        factory: 'PD',
                        time: '10:30 - 11:30 น.',
                        status: 'เต็ม'
                    }
                ]
            };

            const reservations = reservationData[date] || [];
            const reservationContainer = document.getElementById('reservation-status');
            reservationContainer.innerHTML = '';

            reservations.forEach(reservation => {
                const reservationElement = `
            <div class="card mt-2">
                <div class="card-body p-2">
                    <p class="m-0" style="font-size: 18px;"><b>${reservation.factory}</b></p>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" style="font-size:18px;">${reservation.time} (${reservation.status})</label>
                    </div>
                </div>
            </div>
        `;
                reservationContainer.innerHTML += reservationElement;
            });
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
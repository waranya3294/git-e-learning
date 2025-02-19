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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.15/index.global.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/locales/th.min.js"></script>
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

        #calendar {
            max-width: 900px;
            margin: 20px auto;
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

        #right-sidebar {
            position: absolute;
            right: 0;
            top: 50px;
            width: 300px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .selected-date {
            background: #ffff8c !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-2 d-none" id="test">
            <div class="col-lg-6 col-sm-6 mb-3 mt-4">
                <div class="row d-flex justify-content-center">
                    <div id="calendar"></div>
                </div>
                <div class="row align-items-center justify-content-center d-flex">
                    <div class="col-auto d-flex align-items-center" id="test1">
                        <h4 style="color:red;">*กรณีต้องการยกเลิก : เลือกวันที่ที่คุณทำการจองไว้</h4>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <button class="btn btn-success me-1"></button>
                        <p class="mb-0">ว่าง</p>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <button class="btn btn-danger me-1"></button>
                        <p class="mb-0">เต็ม</p>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <button class="btn btn-warning me-1"></button>
                        <p class="mb-0">จองแล้ว</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mt-5">
                <div id="rightSidebar" class="sidebar d-none">
                    <h1 class="text-end" style="color:#FF3333;">ข้อมูลการจองของฉัน</h1>
                    <div class="card">
                        <div class="card-body">
                            <div id="bookingInfo">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- แสดงคำอธิบายกรณ๊จะเข้ามายกเลิกการจอง
                <div id="Exam" class="d-none mt-5">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center text-center">
                            <p style="color:red; font-size: 24px;"><b>กรณีต้องการยกเลิก : เลือกวันที่ที่คุณทำการจองไว้</b></p>
                        </div>
                    </div>
                </div> -->

                <div id="Exam-booking-content" class="d-none">
                    <h1 class="text-end" style="color:#FF3333;">ระบบจองสอบออนไลน์</h1>
                    <div class="card" style=" height: 400px; display: none;" id="right-content">
                        <div class="card-body" id="employee-info">
                            <div class="col">
                                <label class="form-label">รหัสพนักงงาน</label>
                                <input type="text" id="exam_id" class="form-control" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">ชื่อ-นามสกุล</label>
                                <input type="neme" id="name" class="form-control" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">ตำแหน่ง</label>
                                <input type="position" id="Position" class="form-control" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">ฝ่าย</label>
                                <input type="department" id="department" class="form-control" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">แผนก</label>
                                <input type="section" id="section" class="form-control" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">จุดปฏิบัติงาน</label>
                                <input type="workplace" id="workplace" class="form-control" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">โรงงาน</label>
                                <input type="factory" id="factory" class="form-control" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3" id="factorySelection" style="display: none;">
                        <h4 for="text">กรุณาเลือกโรงงานสถานที่สอบ<span style="color:red;">*</span></h4>
                        <div class="d-flex gap-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="TS">
                                <label class="form-check-label" for="inlineRadio1" style="font-size:18px;">TS (ตาสิทธิ์)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="PD">
                                <label class="form-check-label" for="inlineRadio2" style="font-size:18px;">PD (ปลวกแดง)</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3" id="timeSelection" style="display: none;">
                        <h4 for="text">กรุณาเลือกเวลาสอบ<span style="color:red;">*</span></h4>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <p class="text-center m-0" style="font-size: 18px;"><b>TS (ตาสิทธิ์)</b></p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio1" value="time1">
                                        <label class="form-check-label" for="timeRadio1" style="font-size:18px;">9:00 - 10:00 น. (3/5)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio2" value="time2">
                                        <label class="form-check-label" for="timeRadio2" style="font-size:18px;">10:30 - 11:30 น. (3/5)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <p class="text-center m-0" style="font-size: 18px;"><b>PD (ปลวกแดง)</b></p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio1" value="time1">
                                        <label class="form-check-label" for="timeRadio1" style="font-size:18px;">9:00 - 10:00 น. (3/5)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio2" value="time2">
                                        <label class="form-check-label" for="timeRadio2" style="font-size:18px;">10:30 - 11:30 น. (2/5)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 mt-4">
                        <div class="col text-center">
                            <button class="btn btn-success" style="font-size: 20px;" onclick="showData()" id="btnBooking">บันทึก</button>
                            <button class="btn btn-danger" style="font-size: 20px;" onclick="window.location.href='index.php'">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ประกาศตัวแปรสำหรับเก็บวันที่ที่เลือกและรหัสพนักงาน
        let selectedDate = null;
        let exam_id = null;

        // ฟังก์ชันสำหรับการแปลงวันที่เป็นภาษาไทย
        function formatDateThai(dateStr) {
            const months = [
                "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
            ];
            const date = new Date(dateStr);
            const day = date.getDate();
            const month = months[date.getMonth()];
            const year = date.getFullYear() + 543;
            return `${day} ${month} ${year}`;
        }

        // ฟังก์ชันสำหรับแสดงกล่องยืนยันการจอง
        function showData() {
            Swal.fire({
                title: 'ยืนยันการจอง',
                icon: 'success',
                confirmButtonText: 'ตกลง',
                cancelButtonText: "ยกเลิก",
                confirmButtonColor: 'green',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    saveBooking(selectedDate); // ฟังก์ชันสำหรับบันทึกการจอง
                }
            });
        }

        // ฟังก์ชันสำหรับบันทึกการจอง
        function saveBooking(date) {
            if (!date) {
                Swal.fire("กรุณาเลือกวันที่ก่อนทำการจอง");
                return;
            }
            let event = window.calendar.getEvents().find(event => event.startStr === date);

            if (event) {
                // ถ้าสถานะเป็น "จองแล้ว"
                event.setProp('title', 'รออนุมัติ'); // เปลี่ยนชื่อเหตุการณ์เป็น "รอนุมัติ"
                event.setProp('color', '#ffc107'); // เปลี่ยนสีเป็นเหลือง
            } else {
                // ถ้าไม่มีเหตุการณ์ในวันที่เลือก ให้เพิ่มเหตุการณ์ใหม่
                window.calendar.addEvent({
                    start: date,
                    title: 'รอนุมัติ',
                    color: '#ffc107'
                });
            }
            $("#rightSidebar").removeClass("d-none"); // แสดง rightSidebar
            $("#Exam-booking-content").addClass("d-none"); // ซ่อนหน้าจอการจอง
            $("#Exam").addClass("d-none"); // ซ่อนคำอธิบายกรณีจะเข้ามายกเลิกการจอง
            updateMyBooking(); // แสดงข้อมูลการจองทันที
        }

        // ฟังก์ชันสำหรับอัปเดตข้อมูลการจองของฉัน
        function updateMyBooking() {
            if (!selectedDate || !exam_id) return;

            let employeeData = {
                "518": {
                    name: "นาย ปฏิวัฒน์ นาดี",
                    position: "CNC Controller",
                    department: "Manufacturing",
                    section: "Manufacturing Pluakdaeng Factory",
                    workplace: "CNC",
                    factory: "PD"
                },
                "3790": {
                    name: "นาย เทวัน บุญยะบุตร",
                    position: "painter",
                    department: "Manufacturing",
                    section: "Manufacturing Tasith Factory",
                    workplace: "Final Paint 20 Ton",
                    factory: "TS"
                }
            } [exam_id];

            let factoryName = employeeData.factory === "TS" ? "TS (ตาสิทธิ์)" : "PD (ปลวกแดง)";

            let bookingInfo = `
                <p style="font-size:20px;"><strong>วันที่ :</strong> ${formatDateThai(selectedDate)}</p>
                <p style="font-size:20px;"><strong>รหัสพนักงาน :</strong> ${exam_id}</p>
                <p style="font-size:20px;"><strong>ชื่อ - นามสกุล :</strong> ${employeeData.name}</p>
                <p style="font-size:20px;"><strong>ตำแหน่ง :</strong> ${employeeData.position}</p>
                <p style="font-size:20px;"><strong>ฝ่าย :</strong> ${employeeData.department}</p>
                <p style="font-size:20px;"><strong>แผนก :</strong> ${employeeData.section}</p>
                <p style="font-size:20px;"><strong>จุดปฏิบัติงาน :</strong> ${employeeData.workplace}</p>
                <p style="font-size:20px;"><strong>โรงงาน :</strong> ${factoryName}</p>
                <label for="text" class="d-flex justify-content-center align-items-center" style="font-size:24px; color:red;">*หากต้องการยกเลิกจองสอบ กรุณากดปุ่มยกเลิก</label>

                <!-- จัดตำแหน่งปุ่มตรงกลาง -->
                <div class="mt-3 mb-3 d-flex justify-content-center align-items-center">
                    <button class="btn btn-warning me-2" style="font-size: 20px;" id="confirmCancel" onclick="cancelBooking(selectedDate)">ยกเลิก</button>
                  
                        <button class="btn btn-secondary" style="font-size: 20px;" onclick="window.location.href='index.php'">กลับหน้าแรก</button>
                 
                </div> `;

            $("#bookingInfo").html(bookingInfo);
            $("#rightSidebar").removeClass("d-none"); //แสดง
            $("#Exam-booking-content").addClass("d-none"); //ซ่อน
            $("#Exam").addClass("d-none");
        }

        // ฟังก์ชันสำหรับยกเลิกการจอง
        function cancelBooking(date) {
            // console.log("Test");
            Swal.fire({
                title: "ยืนยันการยกเลิก?",
                text: "การจองของคุณจะถูกยกเลิก",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "ตกลง",
                cancelButtonText: "ยกเลิก",
                confirmButtonColor: "green"
            }).then((result) => {
                if (result.isConfirmed) {
                    // ค้นหากิจกรรมในปฏิทินตามวันที่
                    let calendarEvent = window.calendar.getEvents().find(event => event.startStr === date);
                    if (calendarEvent) {
                        // ลบเหตุการณ์จากปฏิทิน (การยกเลิกการจอง)
                        calendarEvent.remove();
                    }

                    // เพิ่มเหตุการณ์ "เปิดสอบ" สำหรับวันที่ที่ถูกยกเลิก
                    calendar.addEvent({
                        start: date,
                        title: 'ว่าง',
                        color: 'green', // เปลี่ยนสีเป็นสีเขียว
                    });

                    // รีเฟรชข้อมูลใน sidebar
                    $("#rightSidebar").addClass("d-none"); //ซ่อน
                    $("#Exam-booking-content").removeClass("d-none"); //แสดง
                    bookingStatus = true; // อัปเดตสถานะการจอง

                    Swal.fire({
                        icon: "success",
                        title: "ยกเลิกการจองสำเร็จ",
                        showConfirmButton: false,
                        timer: 2000
                    }).then(() => {
                        $(".fc-day").removeClass("selected-date");
                        $(`.fc-day[data-date="${date}"]`).addClass("selected-date");
                    });
                    // renderCancelButton(); // อัปเดตปุ่มยกเลิก
                }
            });
        }


        $(document).ready(function() {
            // แสดงกล่องสำหรับกรอกรหัสพนักงาน
            Swal.fire({
                allowOutsideClick: false, // ป้องกันการคลิกนอกกล่องเพื่อปิด
                showCancelButton: true, // แสดงปุ่มยกเลิก
                confirmButtonText: 'ตกลง', // ข้อความปุ่มตกลง
                cancelButtonText: 'ยกเลิก', // ข้อความปุ่มยกเลิก
                confirmButtonColor: 'green', // สีปุ่มตกลง
                icon: "warning", // ไอคอนแจ้งเตือน
                title: "กรุณากรอกรหัสพนักงาน", // หัวข้อแจ้งเตือน
                input: "text", // ให้ผู้ใช้กรอกข้อมูล
                preConfirm: (value) => {
                    if (!value) {
                        Swal.showValidationMessage("กรอกรหัสพนักงาน");
                        return false;
                    }
                    const validIds = ["518", "3790"]; // รายชื่อรหัสพนักงานที่ถูกต้อง
                    if (!validIds.includes(value)) {
                        Swal.showValidationMessage("ไม่พบข้อมูลพนักงาน");
                        return false;
                    } else {
                        return value;
                    }
                }
            }).then((result) => {
                if (result.isConfirmed && result.value) {
                    exam_id = result.value;
                    $("#test").removeClass("d-none"); // แสดงเนื้อหาที่ถูกซ่อน
                    initializeCalendar(exam_id); // เรียกใช้ฟังก์ชันเริ่มต้นปฏิทิน
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // ถ้าผู้ใช้กดปุ่ม "ยกเลิก" ให้กลับไปหน้า reser.php
                    window.location.href = 'index.php';
                }
            });

            // คลิกที่พื้นที่นอกปฏิทินแล้วให้คืนค่าการเลือกวันที่
            $(document).click(function(event) {
                if (!$(event.target).closest('.fc-day, .fc-daygrid-day').length) {
                    $(".fc-day").removeClass("selected-date");
                    if (selectedDate) {
                        $(`.fc-day[data-date="${selectedDate}"]`).addClass("selected-date");
                    }
                }
            });
        });
        // ฟังก์ชันสำหรับการตั้งค่าปฏิทิน
        function initializeCalendar(exam_id) {
            // $("#Exam").removeClass("d-none"); // โชว์คำอธิบายกรณีจะเข้ามายกเลิกการจอง
            const calendarEl = document.getElementById("calendar");
            const mockData = {
                "518": {
                    name: "นาย ปฏิวัฒน์ นาดี",
                    position: "CNC Controller",
                    department: "Manufacturing",
                    section: "Manufacturing Pluakdaeng Factory",
                    workplace: "CNC",
                    factory: "PD",
                    booking_status: true,
                    booking_date: "2025-02-18",
                },
                "3790": {
                    name: "นาย เทวัน บุญยะบุตร",
                    position: "painter",
                    department: "Manufacturing",
                    section: "Manufacturing Tasith Factory",
                    workplace: "Final Paint 20 Ton",
                    factory: "TS",
                    booking_status: false,
                    booking_date: ""
                }
            };

            const employeeData = mockData[exam_id];

            // กำหนดรายการ Events เริ่มต้น
            let events = [{
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
            ];

            // ถ้าพนักงานมีการจองแล้ว
            if (employeeData?.booking_status) {
                selectedDate = employeeData.booking_date;
                events = events.filter(event => event.start !== employeeData.booking_date);
                events.push({
                    start: employeeData.booking_date,
                    title: 'จองแล้ว',
                    color: '#ffc107'
                });
                updateMyBooking();
            } else {
                $("#test1").addClass("d-none");
            }

            // สร้างปฏิทิน FullCalendar
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'th',
                selectable: true,
                dateClick: function(info) {
                    selectedDate = info.dateStr;
                    // ลบคลาสจากวันที่ที่เลือกก่อนหน้า (ถ้ามี)
                    $(".fc-day").removeClass("selected-date");
                    // เพิ่มคลาสที่เลือกให้กับวันที่ใหม่
                    $(`.fc-day[data-date="${selectedDate}"]`).addClass("selected-date");

                    let event = window.calendar.getEvents().find(event => event.startStr === selectedDate);
                    if (event && event.title.includes('จองแล้ว')) {
                        // วันที่จองแล้ว
                        updateMyBooking();
                    } else if (event && event.title.includes('เต็ม')) {
                        // วันที่เต็ม
                        Swal.fire({
                            icon: 'error',
                            title: 'ไม่สามารถจองได้',
                            text: 'วันที่นี้เต็มแล้ว',
                            confirmButtonText: 'ตกลง',
                            confirmButtonColor: 'red'
                        });
                    } else if (event && event.title.includes('ว่าง')) {
                        if (employeeData?.booking_status) {
                            // จองไม่ได้เนื่องจากมีสถานะว่า จองแล้ว
                            $("#bookingInfo").html("");
                            $("#Exam-booking-content").removeClass("d-none");
                            $("#rightSidebar").addClass("d-none");
                            $("#btnBooking").removeClass("d-none"); //ซ่อนปุ่ม
                            $("#Exam").addClass("d-none"); // ซ่อนคำอธิบายกรณีจะเข้ามายกเลิกการจอง
                            $("#employee-info").html(`
                            <p style="font-size:26px;"><strong>วันที่ : ${formatDateThai(selectedDate)}</strong></p>
                            <p style="font-size:18px;"><strong>รหัสพนักงาน :</strong> ${exam_id}</p>
                            <p style="font-size:18px;"><strong>ชื่อ - นามสกุล :</strong> ${employeeData.name}</p>
                            <p style="font-size:18px;"><strong>ตำแหน่ง :</strong> ${employeeData.position}</p>
                            <p style="font-size:18px;"><strong>ฝ่าย :</strong> ${employeeData.department}</p>
                            <p style="font-size:18px;"><strong>แผนก :</strong> ${employeeData.section}</p>
                            <p style="font-size:18px;"><strong>จุดปฏิบัติงาน :</strong> ${employeeData.workplace}</p>
                            <p style="font-size:18px;"><strong>โรงงาน :</strong> ${employeeData.factory}</p>
                        `);

                            if (employeeData.factory === "PD") {
                                $("#inlineRadio2").prop("checked", true);
                            } else if (employeeData.factory === "TS") {
                                $("#inlineRadio1").prop("checked", true);
                            }
                        } else {
                            console.log("จองได้");
                            $("#bookingInfo").html("");
                            $("#Exam-booking-content").removeClass("d-none");
                            $("#rightSidebar").addClass("d-none");
                            $("#Exam").addClass("d-none"); // ซ่อนคำอธิบายกรณีจะเข้ามายกเลิกการจอง
                            $("#employee-info").html(`
                            <p style="font-size:26px;"><strong>วันที่ : ${formatDateThai(selectedDate)}</strong></p>
                            <p style="font-size:18px;"><strong>รหัสพนักงาน :</strong> ${exam_id}</p>
                            <p style="font-size:18px;"><strong>ชื่อ - นามสกุล :</strong> ${employeeData.name}</p>
                            <p style="font-size:18px;"><strong>ตำแหน่ง :</strong> ${employeeData.position}</p>
                            <p style="font-size:18px;"><strong>ฝ่าย :</strong> ${employeeData.department}</p>
                            <p style="font-size:18px;"><strong>แผนก :</strong> ${employeeData.section}</p>
                            <p style="font-size:18px;"><strong>จุดปฏิบัติงาน :</strong> ${employeeData.workplace}</p>
                            <p style="font-size:18px;"><strong>โรงงาน :</strong> ${employeeData.factory}</p>
                        `);

                            if (employeeData.factory === "PD") {
                                $("#inlineRadio2").prop("checked", true);
                            } else if (employeeData.factory === "TS") {
                                $("#inlineRadio1").prop("checked", true);
                            }
                        }

                    } else {
                        // วันที่ยังไม่จอง
                        $("#Exam-booking-content").addClass("d-none");
                    }

                    $("#right-content, #factorySelection, #timeSelection").show();
                },

                timeZone: "Asia/Bangkok",
                themeSystem: "bootstrap5",
                headerToolbar: {
                    left: "prev",
                    center: "title",
                    right: "next",
                },
                weekNumbers: false,
                dayMaxEvents: false,
                events: events
            });

            calendar.render(); // แสดงปฏิทิน
            window.calendar = calendar; // เก็บข้อมูลปฏิทินใน global scope
        }
    </script>
</body>

</html>
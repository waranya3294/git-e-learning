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
            margin: 40px auto;
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
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-2 d-none" id="test">
            <div class="col-lg-8 col-sm-8 mb-3">
                <div class="row mt-5 d-flex justify-content-center">
                    <div id="calendar"></div>
                </div>
                <div class="row align-items-center justify-content-center">
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


            <div class="col-lg-4 col-sm-4 mt-5">
                <div id="rightSidebar" class="sidebar d-none mt-5">
                    <h3 class="text-end mt-5" style="color:#FF3333;">ข้อมูลการจองของฉัน</h3>
                    <div class="card">
                        <div class="card-body">
                            <div id="bookingInfo">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- แสดงคำอธิบายกรณ๊จะเข้ามายกเลิกการจอง -->
                <div class="col-lg-12 col-sm-12 mt-5">
                    <div id="Exam" class=" d-none mt-5">
                        <div class="card">
                            <div class="card-body">
                                <p style="color:red; font-size: 20px;"><b>กรณีต้องการยกเลิก : เลือกวันที่ที่คุณทำการจองไว้</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Exam-booking-content" class="d-none mt-5">
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
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-2">
                                    <p class="text-center m-0" style="font-size: 18px;"><b>TS (ตาสิทธิ์)</b></p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio1" value="time1">
                                        <label class="form-check-label" for="timeRadio1" style="font-size:18px;">9:00 - 10:00 น.</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio2" value="time2">
                                        <label class="form-check-label" for="timeRadio2" style="font-size:18px;">10:30 - 11:30 น.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-2">
                                    <p class="text-center m-0" style="font-size: 18px;"><b>PD (ปลวกแดง)</b></p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio1" value="time1">
                                        <label class="form-check-label" for="timeRadio1" style="font-size:18px;">9:00 - 10:00 น.</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio2" value="time2">
                                        <label class="form-check-label" for="timeRadio2" style="font-size:18px;">10:30 - 11:30 น.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 mt-4">
                        <div class="col text-center">
                            <button class="btn btn-success" onclick="showData()">บันทึก</button>
                            <button class="btn btn-danger" onclick="window.location.href='login.php'">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let selectedDate = null;
        let exam_id = null;

        // Function to format date in Thai
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
                confirmButtonColor: 'green',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    const selectedDateElement = document.querySelector(`.fc-day[data-date="${selectedDate}"]`);
                    if (selectedDateElement) {
                        saveBooking(selectedDate); // ฟังก์ชันสำหรับบันทึกการจอง
                    }
                }
            });
        }

        // ฟังก์ชันสำหรับบันทึกการจอง
        function saveBooking(date) {
            let event = window.calendar.getEvents().find(event => event.startStr === date);

            if (event) {
                // ถ้าสถานะเป็น "จองแล้ว"
                event.setProp('title', 'จองแล้ว'); // เปลี่ยนชื่อเหตุการณ์เป็น "จองแล้ว"
                event.setProp('color', '#ffc107'); // เปลี่ยนสีเป็นเหลือง
            } else {
                // ถ้าไม่มีเหตุการณ์ในวันที่เลือก ให้เพิ่มเหตุการณ์ใหม่
                window.calendar.addEvent({
                    start: date,
                    title: 'จองแล้ว',
                    color: '#ffc107'
                });
            }

            $("#rightSidebar").removeClass("d-none"); // แสดง rightSidebar
            $("#Exam-booking-content").addClass("d-none"); // ซ่อนหน้าจอการจอง
            $("#Exam").addClass("d-none"); // ซ่อนคำอธิบายกรณีจะเข้ามายกเลิกการจอง
        }

        // ฟังก์ชันสำหรับการยกเลิกการจอง
        function cancelBooking(date, booking_date) {
            $("#rightSidebar").removeClass("d-none"); //แสดงข้อมูลของฉัน
            $("#Exam-booking-content").addClass("d-none"); //ซ่อนจองออนไลน์
            $("#Exam").addClass("d-none"); // ซ่อนคำอธิบายกรณีจะเข้ามายกเลิกการจอง

            const bookingInfo = `
        <p><strong>วันที่ :</strong> ${date}</p>
        <p><strong>โรงงาน :</strong> ${$("input[name='inlineRadioOptions']:checked").next("label").text()}</p>
        <p><strong>เวลาที่จอง :</strong> ${booking_date}</p>
        <div class="mt-3 mb-3 text-center">
            <button class="btn btn-success me-2" id="confirmCancel">ตกลง</button>
            <button class="btn btn-secondary" id="cancelCancel" onclick="window.location.href='login.php'">ยกเลิก</button>
        </div>
        <label for="text" style="font-size:18px; color:red;">*ยืนยันการยกเลิกจองสอบ กรุณากดปุ่มตกลง
    `;
            $("#bookingInfo").html(bookingInfo);

            // การยกเลิกการจอง
            $("#confirmCancel").off().on("click", function() {
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
                        window.calendar.addEvent({
                            start: date,
                            title: 'ว่าง 3/5',
                            color: 'green', // เปลี่ยนสีเป็นสีเขียว

                        });

                        // รีเฟรชข้อมูลใน sidebar
                        $("#rightSidebar").addClass("d-none"); //ซ่อน
                        $("#Exam-booking-content").removeClass("d-none"); //แสดง
                        bookingStatus = false; // อัปเดตสถานะการจอง

                        Swal.fire({
                            icon: "success",
                            title: "ยกเลิกการจองสำเร็จ",
                            showConfirmButton: false,
                            timer: 2000
                        });
                    }
                });
            });
        }
        $(document).ready(function() {
            // แสดงกล่องสำหรับกรอกรหัสพนักงาน
            Swal.fire({
                allowOutsideClick: false,
                showCancelButton: true,
                confirmButtonText: 'ตกลง',
                cancelButtonText: 'ยกเลิก',
                confirmButtonColor: 'green',
                icon: "warning",
                title: "กรุณากรอกรหัสผ่าน",
                input: "text",
                preConfirm: (value) => {
                    if (!value) {
                        Swal.showValidationMessage("กรอกรหัสพนักงาน");
                        return false;
                    }
                    const validIds = ["518", "3790"];
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
                    $("#test").removeClass("d-none");
                    initializeCalendar(exam_id);
                }
            });
        });

        // ฟังก์ชันสำหรับการตั้งค่าปฏิทิน
        function initializeCalendar(exam_id) {
            $("#Exam").removeClass("d-none"); // โชว์คำอธิบายกรณีจะเข้ามายกเลิกการจอง
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
                    booking_status: true,
                    booking_date: ""
                }
            };

            const employeeData = mockData[exam_id];

            // กำหนดรายการ Events เริ่มต้น
            let events = [{
                    start: '2025-02-11',
                    title: 'ว่าง 2/5',
                    color: 'green'
                },
                {
                    start: '2025-02-12',
                    title: 'ว่าง 3/5',
                    color: 'green'
                },
                {
                    start: '2025-02-13',
                    title: 'เต็ม 5/5',
                    color: 'red'
                }
            ];

            // ถ้าพนักงานมีการจองแล้ว
            if (employeeData?.booking_status) {
                events = events.filter(event => event.start !== employeeData.booking_date);
                events.push({
                    start: employeeData.booking_date,
                    title: 'จองแล้ว',
                    color: '#ffc107'
                });
            }

            // สร้างปฏิทิน FullCalendar
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'th',
                selectable: true,
                dateClick: function(info) {
                    selectedDate = info.dateStr;

                    // Highlight the selected date
                    $(".fc-day").removeClass("selected-date");
                    $(`.fc-day[data-date="${selectedDate}"]`).addClass("selected-date");

                    let event = window.calendar.getEvents().find(event => event.startStr === selectedDate);
                    if (event && event.title === 'จองแล้ว') {
                        // วันที่จองแล้ว
                        cancelBooking(selectedDate, selectedDate);
                    } else if (event && event.title === 'เต็ม') {
                        // วันที่เต็ม
                        Swal.fire({
                            icon: 'error',
                            title: 'ไม่สามารถจองได้',
                            text: 'วันที่นี้เต็มแล้ว',
                            confirmButtonText: 'ตกลง',
                            confirmButtonColor: 'red'
                        });
                    } else {
                        // วันที่ยังไม่จอง
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
</html>1
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
            <div class="col-lg-8 col-sm-8 mb-3 ">
                <div class="row mt-5">
                    <div id="calendar"></div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end">
                        <button class="btn btn-success me-2"></button>
                        <p class="mb-0">ว่าง</p>
                    </div>
                    <div class="col d-flex align-items-center">
                        <button class="btn btn-danger me-2"></button>
                        <p class="mb-0">เต็ม</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt-5">
                <div id="rightSidebar" class="sidebar d-none">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center" style="color:#FF3333;">ข้อมูลการจอง</h4>
                            <div id="bookingInfo">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Exam-booking-content">
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
                                <label class="form-check-label" for="inlineRadio1" style="font-size:18px;">โรงงานตาสิทธิ์</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="PD">
                                <label class="form-check-label" for="inlineRadio2" style="font-size:18px;">โรงงานปลวกแดง</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3" id="timeSelection" style="display: none;">
                        <h4 for="text">กรุณาเลือกเวลาสอบ<span style="color:red;">*</span></h4>
                        <div class="d-flex gap-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio1" value="time1">
                                <label class="form-check-label" for="timeRadio1" style="font-size:18px;">เวลา 9:00 - 10:00</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="timeRadioOptions" id="timeRadio2" value="time2">
                                <label class="form-check-label" for="timeRadio2" style="font-size:18px;">เวลา 10:30 - 11:30</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 mt-4">
                        <div class="col text-center">
                            <button class="btn btn-success" onclick="showData()">บันทึก</button>
                            <button class="btn btn-danger">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let selectedDate = null;

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
                        selectedDateElement.innerHTML = `                       
                        <div id="cancel" class=d-nome>
                          <button class="btn btn-warning" onclick="cancelBooking('${selectedDate}')">ยกเลิกตารางสอบของคุณ</button>
                        </div>
                        `;
                    }
                }
            });
        }

        function cancelBooking(date) {
            // แสดงกล่องขวา
            $("#rightSidebar").removeClass("d-none"); //แสดงข้อมูลการจอง
            $("#Exam-booking-content").addClass("d-none"); //ซ่อนข้อมูลแถบล่าง
            const bookingInfo = `
        <p><strong>วันที่ :</strong> ${date}</p>
        <p><strong>โรงงาน :</strong> ${$("input[name='inlineRadioOptions']:checked").next("label").text()}</p>
        <p><strong>เวลาที่จอง :</strong> ${$("input[name='timeRadioOptions']:checked").next("label").text()}</p>
        <div class="mt-3 text-center">
            <button class="btn btn-success me-2" id="confirmCancel">ตกลง</button>
            <button class="btn btn-secondary" id="cancelCancel">ยกเลิก</button>
        </div>
    `;

            $("#bookingInfo").html(bookingInfo);
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
                        let calendarEvent = window.calendar.getEvents().find(event => event.startStr === date);
                        if (calendarEvent) {
                            calendarEvent.remove();
                        }

                        // Restore the event after cancellation
                        window.calendar.addEvent({
                            start: date,
                            title: calendarEvent.title,
                            color: calendarEvent.backgroundColor
                        });

                        // ซ่อนปุ่มยกเลิกการจองหลังการยกเลิกสำเร็จ
                        const selectedDateElement = document.querySelector(`.fc-day[data-date="${date}"]`);
                        if (selectedDateElement) {
                            selectedDateElement.querySelector('#cancel').remove();
                        }

                        $("#confirmCancel").hide();
                        $("#rightSidebar").hide();
                        Swal.fire({
                            icon: "success",
                            title: "ยกเลิกการจองสำเร็จ",
                            confirmButtonText: "ตกลง",
                            confirmButtonColor: "green",
                        });
                    }
                });
            });
        }

        function resetEvents(calendar) {
            calendar.getEventSources().forEach(eventSource => eventSource.remove());
            calendar.addEventSource([{
                    start: '2025-02-11',
                    title: 'TS: 09:00 - 10:00',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-11',
                    title: 'TS: 10:30 - 11:30',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-11',
                    title: 'PD: 09:00 - 10:00',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-11',
                    title: 'PD: 10:30 - 11:30',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-12',
                    title: 'TS: 09:00 - 10:00 ',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-12',
                    title: 'TS: 10:30 - 11:30',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-12',
                    title: 'PD: 09:00 - 10:00',
                    color: 'red'
                },
                {
                    start: '2025-02-12',
                    title: 'PD: 10:30 - 11:30',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-13',
                    title: 'TS: 09:00 - 10:00 ',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-13',
                    title: 'TS: 10:30 - 11:30',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-13',
                    title: 'PD: 09:00 - 10:00',
                    color: '#00CC00'
                },
                {
                    start: '2025-02-13',
                    title: 'PD: 10:30 - 11:30',
                    color: 'red'
                }
            ]);
        }

        $(document).ready(function() {
            let exam_id = null;
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
                    if (!value || !validIds.includes(value)) {
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

        function initializeCalendar(exam_id) {
            const calendarEl = document.getElementById("calendar");

            const mockData = {
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
            };

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'th',
                selectable: true,
                dateClick: function(info) {
                    selectedDate = info.dateStr;
                    const employeeData = mockData[exam_id];
                    if (employeeData) {
                        $("#employee-info").html(`
                            <p><strong>วันที่ :</strong> ${selectedDate}</p>
                            <p><strong>รหัสพนักงาน :</strong> ${exam_id}</p>
                            <p><strong>ชื่อ - นามสกุล :</strong> ${employeeData.name}</p>
                            <p><strong>ตำแหน่ง :</strong> ${employeeData.position}</p>
                            <p><strong>ฝ่าย :</strong> ${employeeData.department}</p>
                            <p><strong>แผนก :</strong> ${employeeData.section}</p>
                            <p><strong>จุดปฏิบัติงาน :</strong> ${employeeData.workplace}</p>
                            <p><strong>โรงงาน :</strong> ${employeeData.factory}</p>
                        `);

                        if (employeeData.factory === "PD") {
                            $("#inlineRadio2").prop("checked", true);
                        } else if (employeeData.factory === "TS") {
                            $("#inlineRadio1").prop("checked", true);
                        }
                    } else {
                        $("#employee-info").html(`<p>วันที่: ${selectedDate}</p>`);

                    }
                    $("#right-content, #factorySelection, #timeSelection").show();
                },
                timeZone: "Asia/Bangkok",
                themeSystem: "bootstrap5",
                headerToolbar: {
                    left: "",
                    center: "title",
                    right: "next",
                },
                weekNumbers: false,
                dayMaxEvents: false,
                events: [{
                    start: '2025-02-11',
                    title: 'TS: 09:00 - 10:00',
                    color: '#00CC00',
                }, {
                    start: '2025-02-11',
                    title: 'TS: 10:30 - 11:30',
                    color: '#00CC00',
                }, {
                    start: '2025-02-11',
                    title: 'PD: 09:00 - 10:00',
                    color: '#00CC00',
                }, {
                    start: '2025-02-11',
                    title: 'PD: 10:30 - 11:30',
                    color: '#00CC00',
                }, {
                    start: '2025-02-12',
                    title: 'TS: 09:00 - 10:00 ',
                    color: '#00CC00',
                }, {
                    start: '2025-02-12',
                    title: 'TS: 10:30 - 11:30',
                    color: '#00CC00',
                }, {
                    start: '2025-02-12',
                    title: 'PD: 09:00 - 10:00',
                    color: 'red',
                }, {
                    start: '2025-02-12',
                    title: 'PD: 10:30 - 11:30',
                    color: '#00CC00',
                }, {
                    start: '2025-02-13',
                    title: 'TS: 09:00 - 10:00 ',
                    color: '#00CC00',
                }, {
                    start: '2025-02-13',
                    title: 'TS: 10:30 - 11:30',
                    color: '#00CC00',
                }, {
                    start: '2025-02-13',
                    title: 'PD: 09:00 - 10:00',
                    color: '#00CC00',
                }, {
                    start: '2025-02-13',
                    title: 'PD: 10:30 - 11:30',
                    color: 'red',
                }],
            });

            calendar.render();
            window.calendar = calendar; // Make calendar globally accessible
        }
    </script>
</body>

</html>
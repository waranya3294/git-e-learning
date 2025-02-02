<div class="container mt-4">
    <h4><b>Dashboard</b></h4>
    <div class="row">
        <div class="col-md-4 mt-2 mb-2">
            <div class="card shadow-sm " onclick="window.location.href='room_maincontent.php'" style=" border: none; cursor: pointer;">
                <div class="icon text-success p-3 icon-shadow" style="font-size: 3rem;">🏢</div>
                <div class="card-body p-3" style="font-size:18px;color:green;">
                    <b style="font-size:24px;">สร้างห้องสอบ</b>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2 mb-2">
            <div class="card shadow-sm  " onclick="window.location.href='examform_maincontent.php'" style=" border: none; cursor: pointer">
                <div class="icon text-primary p-3 icon-shadow" style="font-size: 3rem;">📄</div>
                <div class="card-body p-3" style="font-size:18px;color:blue;">
                    <b style="font-size:24px;">สร้างเนื้อหา</b>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-2 ">
            <div class="card shadow-sm " onclick="window.location.href='examgroup_maincontent.php'" style=" border: none; cursor: pointer">
                <div class="icon text-danger p-3 icon-shadow" style="font-size: 3rem;color:red;">📝</div>
                <div class="card-body p-3" style="font-size:18px;color:red">
                    <b style="font-size:24px;">สร้างข้อสอบ</b>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4><b>ปฏิทินการสอบ</b></h4>
                    <hr>
                    <div class="ui container mt-3">
                        <div class="ui grid">
                            <div class="ui sixteen column">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <h4 style="cursor: pointer"><b>สถิติห้องสอบ</b></h4>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card card " style=" border: none; cursor: pointer">
                        <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style=" font-size: 2rem; color:orange;"> สี</i>
                        <div class="card-body p-3" style="font-size:26px;color:orange"><b>0 ชุด</b></div>
                        <div class="card-body p-3" style="font-size:18px;color:orange">
                            <b>ชุดข้อสอบทั้งหมด </b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card card-hover" style=" border: none; cursor: pointer">
                        <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:red;"> เชื่อม</i>
                        <div class="card-body p-3" style="font-size:26px;color:red"><b>0 ชุด</b></div>
                        <div class="card-body p-3" style="font-size:18px;color:red;">
                            <b>ชุดข้อสอบทั้งหมด</b>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card card" style=" border: none; cursor: pointer">
                        <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style=" font-size: 2rem; color:#00a12b;"> ประกอบ</i>
                        <div class="card-body p-3" style="font-size:26px;color:#00a12b"><b>0 ชุด</b></div>
                        <div class="card-body p-3" style="font-size:18px;color:#00a12b">
                            <b>ชุดข้อสอบทั้งหมด</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 ">
                    <div class="card card" style=" border: none; cursor: pointer">
                        <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:blue;"> CNC</i>
                        <div class="card-body p-3" style="font-size:26px;color:blue;"><b>0 ชุด</b></div>
                        <div class="card-body p-3" style="font-size:18px;color:blue;;">
                            <b>ชุดข้อสอบทั้งหมด</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <h4><b>จองคิวสอบ</b></h4>
                <div class="row">
                    <!-- ฝั่ง PD -->
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="text-center">PD</h2>
                                <div class="row  d-flex justify-content-center align-items-center">
                                    <!-- ที่นั่งฝั่ง PD -->
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-1">PD-1</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-2">PD-2</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-3">PD-3</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-4">PD-4</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-5">PD-5</button>
                                    </div>
                                </div>
                                <div class="row mt-2  d-flex justify-content-center align-items-center">
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-6">PD-6</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-7">PD-7</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-8">PD-8</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-9">PD-9</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-primary  seat" data-seat="PD-10">PD-10</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ฝั่ง ตาสิทธิ์ -->
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm rounded">
                            <div class="card-body">
                                <h2 class="text-center">TS</h2>
                                <div class="row  d-flex justify-content-center align-items-center">
                                    <!-- ที่นั่งฝั่ง ตาสิทธิ์ -->
                                    <div class="col-2">
                                        <button class="btn btn-outline-success  seat" data-seat="TS-1">TS-1</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-2">TS-2</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-3">TS-3</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-4">TS-4</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-5">TS-5</button>
                                    </div>
                                </div>
                                <div class="row mt-2 d-flex justify-content-center align-items-center">
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-6">TS-6</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-7">TS-7</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-8">TS-8</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-9">TS-9</button>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-success seat" data-seat="TS-10">TS-10</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container mt-4 mb-4 p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h4><b>สรุปผลการสอบ</b></h4>
                            <hr>
                        </div>
                        <div class="table-responsive mt-3">
                            <table id="data-table" class="table table-bordered">
                                <thead>
                                    <tr class="text-center table-secondary" style="font-size:18px; border: 1px solid ridge;">
                                        <th><b>ประเภท</b></th>
                                        <th><b>จำนวนผู้เข้าสอบ</b></th>
                                        <th><b>สอบเสร็จแล้ว</b></th>
                                        <th><b>ยังไม่สอบ</b></th>
                                        <th><b>ผ่าน</b></th>
                                        <th><b>ไม่ผ่าน</b></th>
                                        <th><b>ดู</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" style="font-size:18px; cursor: pointer;">
                                        <th>สี</th>
                                        <th>100</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>
                                            <div class="dropdown">
                                                <i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;"></i>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" onclick="viewGraph('สี')">ดูกราฟ</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadPNG('สี')">ดาวน์โหลด PNG</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadCSV('สี')">ดาวน์โหลด CSV</a></li>
                                                </ul>
                                            </div>
                                        </th>
                                    </tr>
                                    <!-- สามารถคัดลอกส่วนนี้สำหรับแถวอื่น ๆ ได้ -->
                                    <tr class="text-center" style="font-size:18px; cursor: pointer;">
                                        <th>เชื่อม</th>
                                        <th>100</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>
                                            <div class="dropdown">
                                                <i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;"></i>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" onclick="viewGraph('เชื่อม')">ดูกราฟ</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadPNG('เชื่อม')">ดาวน์โหลด PNG</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadCSV('เชื่อม')">ดาวน์โหลด CSV</a></li>
                                                </ul>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr class="text-center" style="font-size:18px; cursor: pointer;">
                                        <th>ประกอบ</th>
                                        <th>100</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>
                                            <div class="dropdown">
                                                <i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;"></i>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" onclick="viewGraph('เชื่อม')">ดูกราฟ</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadPNG('เชื่อม')">ดาวน์โหลด PNG</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadCSV('เชื่อม')">ดาวน์โหลด CSV</a></li>
                                                </ul>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr class="text-center" style="font-size:18px; cursor: pointer;">
                                        <th>CNC</th>
                                        <th>100</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>0</th>
                                        <th>
                                            <div class="dropdown">
                                                <i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;"></i>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" onclick="viewGraph('เชื่อม')">ดูกราฟ</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadPNG('เชื่อม')">ดาวน์โหลด PNG</a></li>
                                                    <li><a class="dropdown-item" href="#" onclick="downloadCSV('เชื่อม')">ดาวน์โหลด CSV</a></li>
                                                </ul>
                                            </div>
                                        </th>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,basicWeek,basicDay'
                        },
                        defaultDate: '2025-01-12',
                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        events: [{
                                title: 'สอบสี',
                                start: '2025-02-03',
                                end: '2025-02-05',
                                color: '#1E90FF',
                            },
                            {
                                title: 'สอบความปลอดภัยของการพ่นสี',
                                start: '2025-02-07',
                                end: '2025-02-15',
                                color: 'green',
                            },
                            {
                                title: 'เชื่อม',
                                start: '2025-02-07',
                                end: '2025-02-11',
                                color: '#9933FF',
                            },
                            {
                                title: 'สอบประกอบ',
                                start: '2025-02-28',
                                color: '#3CB371',
                            }
                        ],
                        eventClick: function(event) {
                            Swal.fire({
                                title: event.title,
                                text: event.description,
                                confirmButtonText: 'ตกลง',
                                confirmButtonColor: "green",
                            });
                        }
                    });
                });


                $(document).ready(function() {
                    // เมื่อคลิกที่ปุ่มที่นั่ง
                    $(".seat").click(function() {
                        const seatId = $(this).data("seat");
                        const currentClass = $(this).attr("class");

                        // ถ้าคลิกที่นั่งว่าง
                        if (currentClass.includes("btn-outline-primary")) {
                            $(this).removeClass("btn-outline-primary").addClass("btn-outline-danger");
                            $(this).text(seatId + " (จองแล้ว)");
                            Swal.fire({
                                title: 'ที่นั่ง ' + seatId + ' ถูกจองแล้ว!',
                                text: 'คุณได้จองที่นั่งนี้สำเร็จ',
                                icon: 'success',
                                confirmButtonText: 'ตกลง',
                                confirmButtonColor: 'green'
                            });
                        } else {
                            // ถ้าคลิกที่นั่งที่ถูกจองแล้ว
                            Swal.fire({
                                title: 'ที่นั่งนี้ถูกจองแล้ว!',
                                text: 'กรุณาเลือกที่นั่งอื่น',
                                icon: 'error',
                                confirmButtonText: 'ตกลง',
                                confirmButtonColor: 'green'
                            });
                        }
                    });
                });

                function viewGraph(type) {
                    const data = {
                        labels: ['ทั้งหมด', 'สอบไปแล้ว'],
                        datasets: [{
                            label: 'จำนวนผู้เข้าสอบ',
                            data: [100, 0], // ตัวอย่างข้อมูล คุณสามารถปรับตามข้อมูลจริง
                            backgroundColor: ['#36a2eb', '#ff6384'],
                            borderColor: ['#36a2eb', '#ff6384'],
                            borderWidth: 1
                        }]
                    };

                    const config = {
                        type: 'bar', // ประเภทของแผนภูมิ: bar, line, doughnut ฯลฯ
                        data: data,
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                tooltip: {
                                    enabled: true,
                                }
                            },
                            scales: {
                                x: {
                                    beginAtZero: true
                                }
                            }
                        }
                    };

                    Swal.fire({
                        title: 'กราฟการสอบของ ' + type,
                        html: `<canvas id="graphCanvas" width="400" height="400"></canvas>`, // เพิ่มพื้นที่สำหรับแสดงกราฟ
                        icon: 'info',
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: 'green',
                        didOpen: () => {
                            const ctx = document.getElementById('graphCanvas').getContext('2d');
                            new Chart(ctx, config); // แสดงแผนภูมิ
                        }
                    });
                }


                function downloadPNG(type) {
                    Swal.fire({
                        title: 'ดาวน์โหลด PNG',
                        text: "คุณต้องการดาวน์โหลด PNG สำหรับ: " + type,
                        icon: 'info',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: 'green'
                    });
                }

                function downloadCSV(type) {
                    Swal.fire({
                        title: 'ดาวน์โหลด CSV',
                        text: "คุณต้องการดาวน์โหลด CSV สำหรับ: " + type,
                        icon: 'info',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: 'green'
                    });
                }
            </script>
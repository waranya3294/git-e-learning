<div class="container-fluid mt-4">
    <h4><b>แดชบอร์ด</b></h4>
    <hr>
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
</div>

<div class="container-fluid mt-4 mb-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4><b>ปฏิทินการสอบ</b></h4>
                    <hr>
                    <div class="ui container-fluid mt-3">
                        <div class="ui grid">
                            <div class="ui sixteen column">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 style="cursor: pointer"><b>สถิติห้องสอบ</b></h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card" style="border: none; cursor: pointer">
                                <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style=" font-size: 2rem; color:orange;"> สี</i>
                                <div class="card-body p-3" style="font-size:26px;color:orange"><b>0 ชุด</b></div>
                                <div class="card-body p-3" style="font-size:18px;color:orange">
                                    <b>ชุดข้อสอบทั้งหมด </b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card " style=" border: none; cursor: pointer">
                                <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:red;"> เชื่อม</i>
                                <div class="card-body p-3" style="font-size:26px;color:red"><b>0 ชุด</b></div>
                                <div class="card-body p-3" style="font-size:18px;color:red;">
                                    <b>ชุดข้อสอบทั้งหมด</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card" style=" border: none; cursor: pointer">
                                <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style=" font-size: 2rem; color:#00a12b;"> ประกอบ</i>
                                <div class="card-body p-3" style="font-size:26px;color:#00a12b"><b>0 ชุด</b></div>
                                <div class="card-body p-3" style="font-size:18px;color:#00a12b">
                                    <b>ชุดข้อสอบทั้งหมด</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <div class="card" style=" border: none; cursor: pointer">
                                <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:blue;"> CNC</i>
                                <div class="card-body p-3" style="font-size:26px;color:blue;"><b>0 ชุด</b></div>
                                <div class="card-body p-3" style="font-size:18px;color:blue;;">
                                    <b>ชุดข้อสอบทั้งหมด</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div class="container-fluid mt-4">
    <div class="card">
        <div class="card-body">
            <h4 class="text-center"><b>จองคิวสอบ</b></h4>
            <hr>
            <div class="row">
                
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm rounded d-flex justify-content-center align-items-center">
                        <div class="card-body">
                            <div class="col mb-4 d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary" style="font-size:20px;">TS</button>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                              
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-1">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-1</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-2">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-2</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-3">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-3</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-4">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-4</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-5">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-5</button>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center align-items-center">
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-6">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-6</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-7">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-7</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-8">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-8</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-9">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-9</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-10">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-10</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col text-center">
                                    <i class="fa-solid fa-desktop" style="color:#00e396; font-size: 2rem;">
                                        <label for="text" style="color:black;"> ว่าง</label></i>
                                </div>
                                <div class="col text-center">
                                    <i class="fa-solid fa-user" style="font-size: 2rem;">
                                        <label for="text" style="color:black;"> ไม่ว่าง</label></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm rounded d-flex justify-content-center align-items-center">
                        <div class="card-body">
                            <div class="col mb-4 d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary" style="font-size:20px;">TS</button>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                              
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-1">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 4rem;"></i>
                                        TS-1</button>
                                </div>
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-2">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 4rem;"></i>
                                        TS-2</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-3">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-3</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-4">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-4</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-5">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-5</button>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center align-items-center">
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-6">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-6</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-7">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-7</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-8">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-8</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-9">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-9</button>
                                </div>
                                <div class="col-2 mb-3">
                                    <button class="btn btn-light seat" data-seat="TS-10">
                                        <i class="fa-solid fa-desktop" style="color:#00e396;font-size: 2rem;"></i>
                                        TS-10</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col text-center">
                                    <i class="fa-solid fa-desktop" style="color:#00e396; font-size: 2rem;">
                                        <label for="text" style="color:black;"> ว่าง</label></i>
                                </div>
                                <div class="col text-center">
                                    <i class="fa-solid fa-user" style="font-size: 2rem;">
                                        <label for="text" style="color:black;"> ไม่ว่าง</label></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid mt-4 mb-4">
    <h4><b>ตารางจองคิวสอบ</b></h4>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center table-secondary" style="font-size:18px; border: 1px solid ridge;">
                            <th><b>รหัสพนักงาน</b></th>
                            <th><b>ชื่อ - นามสกุล</b></th>
                            <th><b>ห้องสอบ</b></th>
                            <th><b>วันที่จอง</b></th>
                            <th><b>วันที่เปิดสอบ</b></th>
                            <th><b>แผนก</b></th>
                            <th><b>งาน</b></th>
                            <th><b>โรงงาน</b></th>
                        </tr>
                        <tr class="text-center">
                            <th>4284</th>
                            <th>วรัญญา หันจางสิทธิ์</th>
                            <th>ความปลอดภัยของการพ่นสี</th>
                            <th>02/03/2025</th>
                            <th>03/05/2025</th>
                            <th>TSF</th>
                            <th>Final Paint 35 Ton</th>
                            <th>TS</th>
                        </tr>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4 mb-4">
    <h4><b>สรุปผลการสอบ</b></h4>
    <hr>
    <div class="card">
        <div class="card-body">
            <h4>TS</h4>
            <div id="chart"></div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center table-secondary" style="font-size:18px; border: 1px solid ridge;">
                            <th><b>ประเภท</b></th>
                            <th><b>จำนวนผู้เข้าสอบ</b></th>
                            <th><b>สอบเสร็จแล้ว</b></th>
                            <th><b>ยังไม่สอบ</b></th>
                            <th><b>ผ่าน</b></th>
                            <th><b>ไม่ผ่าน</b></th>
                            <th><b>ดาวน์โหลด</b></th>
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
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>เชื่อม</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>ประกอบ</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>CNC</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h4>PD</h4>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center table-secondary" style="font-size:18px; border: 1px solid ridge;">
                            <th><b>ประเภท</b></th>
                            <th><b>จำนวนผู้เข้าสอบ</b></th>
                            <th><b>สอบเสร็จแล้ว</b></th>
                            <th><b>ยังไม่สอบ</b></th>
                            <th><b>ผ่าน</b></th>
                            <th><b>ไม่ผ่าน</b></th>
                            <th><b>ดาวน์โหลด</b></th>
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
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>เชื่อม</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>ประกอบ</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>CNC</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><i class="bi bi-download"></i></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
            eventLimit: true, // ให้มีลิงค์ "more" ถ้ามีอีเวนต์มากเกินไป
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

    // จองห้องสอบ
    document.addEventListener("DOMContentLoaded", function() {
        const seats = document.querySelectorAll(".seat");

        seats.forEach(seat => {
            seat.addEventListener("click", function() {
                let seatNumber = this.getAttribute("data-seat");

                if (this.classList.contains("btn-warning")) {
                    Swal.fire({
                        title: 'ที่นั่งนี้ถูกจองแล้ว!',
                        text: 'กรุณาเลือกที่นั่งอื่น',
                        icon: 'warning',
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#ffc107'
                    });
                } else {
                    Swal.fire({
                        title: `กรุณากรอกรหัสพนักงานเพื่อจองที่นั่ง ${seatNumber}:`,
                        html: `<input id="employeeId" class="swal2-input" placeholder="รหัสพนักงาน">`,
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก',
                        confirmButtonColor: 'green',
                        preConfirm: () => {
                            let employeeId = document.getElementById("employeeId").value;
                            if (!employeeId) {
                                Swal.showValidationMessage('กรุณากรอกรหัสพนักงาน!');
                                // ตรวจสอบว่าเป็นตัวเลข
                            } else if (!/^\d+$/.test(employeeId)) {
                                Swal.showValidationMessage('กรุณากรอกเฉพาะตัวเลขเท่านั้น!');
                                return false;
                            }
                            return employeeId;
                        }
                    }).then((result) => {
                        if (result.isConfirmed && result.value) {
                            this.classList.remove("btn-light");
                            this.classList.add("btn-warning");
                            this.innerHTML = `
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <i class='fa-solid fa-user' style='color:white;font-size: 2rem;'></i>
                                <span style="font-size: 1.2rem; font-weight: bold;">${seatNumber}</span>
                                <span style="font-size: 1rem; color: gray;">${result.value}</span>
                            </div>
                        `;

                            Swal.fire({
                                title: `ที่นั่ง ${seatNumber} ถูกจองแล้ว!`,
                                text: 'คุณได้จองที่นั่งนี้สำเร็จ',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 2000
                            });
                        }
                    });
                }
            });
        });
    });

    // กราฟ
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




    // function downloadPNG(type) {
    //     Swal.fire({
    //         title: 'ดาวน์โหลด PNG',
    //         text: "คุณต้องการดาวน์โหลด PNG สำหรับ: " + type,
    //         icon: 'info',
    //         confirmButtonText: 'ตกลง',
    //         confirmButtonColor: 'green'
    //     });
    // }

    // function downloadCSV(type) {
    //     Swal.fire({
    //         title: 'ดาวน์โหลด CSV',
    //         text: "คุณต้องการดาวน์โหลด CSV สำหรับ: " + type,
    //         icon: 'info',
    //         confirmButtonText: 'ตกลง',
    //         confirmButtonColor: 'green'
    //     });
    // }
</script>
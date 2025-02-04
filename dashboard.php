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

<div class="container-fluid mt-3 mb-3">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
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
                        <div class="col-lg-6 col-sm-6 mb-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color: orange;"> สี</i>
                                    <div style="font-size: 26px; color: orange;">0 ชุด</div>
                                    <div style="font-size: 20px; color: orange; font-weight: bold;">ชุดข้อสอบทั้งหมด</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 mb-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:red;"> เชื่อม</i>
                                    <div style="font-size: 26px; color:red;">0 ชุด</div>
                                    <div style="font-size: 20px; color: red; font-weight: bold;">ชุดข้อสอบทั้งหมด</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6 mb-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:#00a12b;"> ประกอบ</i>
                                    <div style="font-size: 26px; color:#00a12b;">0 ชุด</div>
                                    <div style="font-size: 20px; color: #00a12b; font-weight: bold;">ชุดข้อสอบทั้งหมด</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 mb-3">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:blue;"> CNC</i>
                                    <div style="font-size: 26px; color:blue;">0 ชุด</div>
                                    <div style="font-size: 20px; color: blue; font-weight: bold;">ชุดข้อสอบทั้งหมด</div>
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
                                        <div for="text" style="color:black;"> ว่าง</label></i>
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

<div class="container-fluid mt-3 mb-4">
    <h4><b>ตารางจองคิวสอบ</b></h4>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col text-end">
                    <button class="btn btn-success" onclick="showReserve()">จองคิวสอบ</button>
                </div>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center " style="font-size:18px; border: 1px solid ridge;">
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
                    </thead>
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
            <h4 class="text-center mb-4">TS</h4>
            <div id="chart"></div>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr class="text-center " style="font-size:18px; border: 1px solid ridge;">
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
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>เชื่อม</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>ประกอบ</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>CNC</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h4 class="text-center mb-4">PD</h4>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr class="text-center" style="font-size:18px; border: 1px solid ridge;">
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
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>เชื่อม</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>ประกอบ</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                        <tr class="text-center" style="font-size:18px; cursor: pointer;">
                            <th>CNC</th>
                            <th>100</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th><button type="button" class="btn btn-success"><i class="bi bi-download"></i></button></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
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
            confirmButtonColor: "green",
            confirmButtonText: "ถัดไป",
            showCancelButton: false,
            allowOutsideClick: false,
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
            <input type="text" id="id_input" class="swal2-input" placeholder="รหัสพนักงาน" onkeyup="validateID(event)"> 
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

        console.log("วันสอบที่เลือก:", date);
        console.log("รหัสพนักงาน:", editedData.empId);
        console.log("ชื่อ:", editedData.name);
        console.log("แผนก:", editedData.department);
        console.log("โรงงาน:", editedData.factory);
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


    // $(document).ready(function() {
    //     // เมื่อคลิกที่ปุ่มที่นั่ง
    //     $(".seat").click(function() {
    //         const seatId = $(this).data("seat");
    //         const currentClass = $(this).attr("class");

    //         // ถ้าคลิกที่นั่งว่าง
    //         if (currentClass.includes("btn-outline-primary")) {
    //             $(this).removeClass("btn-outline-primary").addClass("btn-outline-danger");
    //             $(this).text(seatId + " (จองแล้ว)");
    //             Swal.fire({
    //                 title: 'ที่นั่ง ' + seatId + ' ถูกจองแล้ว!',
    //                 text: 'คุณได้จองที่นั่งนี้สำเร็จ',
    //                 icon: 'success',
    //                 confirmButtonText: 'ตกลง',
    //                 confirmButtonColor: 'green'
    //             });
    //         } else {
    //             // ถ้าคลิกที่นั่งที่ถูกจองแล้ว
    //             Swal.fire({
    //                 title: 'ที่นั่งนี้ถูกจองแล้ว!',
    //                 text: 'กรุณาเลือกที่นั่งอื่น',
    //                 icon: 'error',
    //                 confirmButtonText: 'ตกลง',
    //                 confirmButtonColor: 'green'
    //             });
    //         }
    //     });
    // });
</script>
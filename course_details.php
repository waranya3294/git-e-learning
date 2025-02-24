<div class="container-fluid mt-4 mb-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <h2 class="text-start mb-2" style="color: #18B0BD;">รายละเอียด</h2>
                    <hr style="margin: 0 -15px; color:#d3d3d3;">
                    <div class="mt-3 p-0">
                        <p style="font-size: 18px;"><b>ชื่อหลักสูตร :</b> <span id="courseName"></span></p>
                        <p style="font-size: 18px;">
                            <b>วันที่และรอบเวลา :</b> <span id="dateTime"></span>
                        </p>
                        <p style="font-size: 18px;"><b>สถานที่สอบ :</b> <span id="location"></span></p>
                        <p style="font-size: 18px;"><b>จำนวนที่นั่ง :</b> <span id="seats"></span></p>
                        <p style="font-size: 18px;"><b>สถานะ :</b>
                            <span id="status" class="badge"></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 col-sm-12">
                    <div class="card" style="border:2px solid #18B0BD;">
                        <div class="card-body">
                            <div class="panel-heading">
                                <h2 class="panel-title" style="color: #18B0BD;">
                                    <i class="fa fa-tasks"></i> ข้อมูลการจอง
                                </h2>
                            </div>
                            <hr style="margin:0 -15px; color:#d3d3d3;">
                            <div class="table-responsive mt-3">
                                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                    <thead>
                                        <tr class="text-center" style="font-size:18px; border: 1px solid ridge;">
                                            <th>#</th>
                                            <th class="Middle">รหัสพนักงาน</th>
                                            <th class="Middle">ชื่อ - นามสกุล</th>
                                            <th class="Middle">ตำแหน่ง</th>
                                            <th class="Middle">ฝ่าย</th>
                                            <th class="Middle">แผนก</th>
                                            <th class="Middle">จุดปฏิบัติงาน</th>
                                            <th class="Middle">โรงงาน</th>
                                            <th class="Middle">สถานะ</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>1</td>
                                        <td>3790</td>
                                        <td>นาย เทวัน  บุญยะบุตร</td>
                                        <td>Painter</td>
                                        <td>Manufacturing</td>
                                        <td>Manufacturing Tasith Factory</td>
                                        <td>Final Paint 20 Ton</td>
                                        <td class="text-center">TS</td>
                                        <td class="text-center"><span class="badge text-bg-danger" style="font-size:14px;">ยังไม่สอบ</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>0549</td>
                                        <td>นาย สนิท  เงาใส  </td>
                                        <td>Painter</td>
                                        <td>Manufacturing</td>
                                        <td>Manufacturing Tasith Factory</td>
                                        <td>Final Paint 35 Ton</td>
                                        <td class="text-center">TS</td>
                                        <td class="text-center"><span class="badge text-bg-danger" style="font-size:14px;">ยังไม่สอบ</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3768</td>
                                        <td>นาย วีระศักดิ์  คงชูดี </td>
                                        <td>Painter</td>
                                        <td>Manufacturing</td>
                                        <td>Manufacturing Tasith Factory</td>
                                        <td>Top Coat</td>
                                        <td class="text-center">TS</td>
                                        <td class="text-center"><span class="badge text-bg-danger" style="font-size:14px;">ยังไม่สอบ</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>3811</td>
                                        <td>นาย วิทยา  ลอยอากาศ  </td>
                                        <td>Painter</td>
                                        <td>Manufacturing</td>
                                        <td>Manufacturing Tasith Factory</td>
                                        <td>Top Coat</td>
                                        <td class="text-center">TS</td>
                                        <td class="text-center"><span class="badge text-bg-danger" style="font-size:14px;">ยังไม่สอบ</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>3804</td>
                                        <td>นาย อนุวัฒน์  โถทอง</td>
                                        <td>Painter</td>
                                        <td>Manufacturing</td>
                                        <td>Manufacturing Tasith Factory</td>
                                        <td>Final Paint 35 Ton</td>
                                        <td class="text-center">TS</td>
                                        <td class="text-center"><span class="badge text-bg-danger" style="font-size:14px;">ยังไม่สอบ</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let table = new DataTable('#example', {
        paging: false,
        searching: false,
        language: {
            url: "assets/lib/dataTables/language.json",
            info: ""
        }
    });
    // รอให้หน้าเว็บโหลดเสร็จสมบูรณ์ก่อน
    document.addEventListener('DOMContentLoaded', function() {
        // ดึงข้อมูลรายละเอียดของหลักสูตรจาก localStorage
        const detail = JSON.parse(localStorage.getItem('courseDetail'));

        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if (detail) {
            // แสดงชื่อหลักสูตร
            document.getElementById('courseName').innerText = detail.courseName;

            // แสดงวันที่และเวลา
            document.getElementById('dateTime').innerText = detail.dateTime;

            // แสดงสถานที่
            document.getElementById('location').innerText = detail.location;

            // แสดงจำนวนที่นั่ง
            document.getElementById('seats').innerText = detail.seats;

            // แสดงสถานะและเปลี่ยนคลาสตามสถานะ
            document.getElementById('status').innerText = detail.status;
            document.getElementById('status').className = detail.status === "เต็ม" ? "badge text-bg-danger" : "badge text-bg-success";
        }
    });
</script>
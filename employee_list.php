<div class="container-fluid mt-4 mb-4">
    <h1 class="display-4" style="color: #18B0BD;">รายชื่อพนักงานทั้งหมด</h1>
    <div class="card shadow-sm rounded-1 mb-3" style="border: none; ">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col d-flex align-items-center">
                    <h4>รายชื่อพนักงานทั้งหมด</h4>
                    <div id="downloadBtn" class="btn btn-success ms-3"><i class="fa-solid fa-download"></i></div>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <select class="form-select form-select-sm" style="width: 150px;" aria-label="Small select example">
                        <option selected>--เลือกแผนก--</option>
                        <option value="1">สี</option>
                        <option value="2">เชื่อม</option>
                        <option value="3">ประกอบ</option>
                        <option value="4">CNC</option>
                        <option value="5">ทั้งหมด</option>
                    </select>
                </div>
            </div>

            <hr style="margin: 0 -15px;color:#aaaaaa;">

            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-start"><b>#</b></th>
                            <th class="text-center">รหัสพนักงาน</th>
                            <th class="text-center">ชื่อ - นามสกุล</th>
                            <th class="text-center">ตำแหน่ง</th>
                            <th class="text-center">ฝ่าย</th>
                            <th class="text-center">แผนก</th>
                            <th class="text-center">จุดปฏิบัติงาน</th>
                            <th class="text-center">โรงงาน</th>
                            <th class="text-center">คะแนนสอบ</th>
                            <th class="text-center">สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-end">1</td>
                            <td class="text-center">3790</td>
                            <td>นาย เทวัน บุญยะบุตร</td>
                            <td>painter</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Final Paint 20 Ton</td>
                            <td class="text-center">TS</td>
                            <td class="text-center">5 คะแนน</td>
                            <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">สอบเสร็จแล้ว</span></td>
                        </tr>
                        <tr>
                            <td class="text-end">2</td>
                            <td class="text-center">518</td>
                            <td>นาย ปฏิวัฒน์ นาดี </td>
                            <td>CNC Controller</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Pluakdaeng Factory</td>
                            <td>CNC</td>
                            <td class="text-center">PD</td>
                            <td class="text-center"></td>
                            <td class="text-center"><span class="badge text-bg-danger" style="font-size:14px;">ยังไม่สอบ</span></td>
                        </tr>
                        <!-- <tr>
                            <td class="text-end">3</td>
                            <td class="text-center">0549</td>
                            <td>นาย สนิท เงาใส</td>
                            <td>Painter</td>
                            <td>Manufacturing</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Final Paint 35 Ton</td>
                            <td class="text-center">TS</td>
                            <td class="text-center">0 คะแนน</td>
                            <td class="text-center"><span class="badge text-bg-danger" style="font-size:14px;">ไม่ผ่าน</span></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- กราฟ -->
<!-- <div class="container-fluid mt-3 mb-4">
    <div class="col-lg-6 col-sm-6">
        <div class="card shadow-sm rounded-1 mb-3" style="border: none;">
            <div class="card-body">
                <h4 class="mb-3">ภาพรวมการสอบ</h4>
                <div id="chart" class="text-center">
                </div>
            </div>
        </div>
    </div>
</div> -->

<script>
    document.getElementById("downloadBtn").addEventListener("click", function() {
        const table = document.getElementById("example"); // ใช้ id="example" ที่มีอยู่จริง
        const rows = table.querySelectorAll("tr");
        const data = [];

        rows.forEach((row) => {
            const cells = row.querySelectorAll("th, td"); // ดึงหัวตารางด้วย
            const rowData = [];
            cells.forEach(cell => rowData.push(cell.innerText.trim())); // ลบช่องว่าง
            data.push(rowData);
        });

        const ws = XLSX.utils.aoa_to_sheet(data);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "พนักงาน");

        XLSX.writeFile(wb, "รายชื่อพนักงาน.xlsx");
    });

    // Datatable
    let table = new DataTable('#example', {

        language: {
            url: "assets/lib/dataTables/language.json"
        },

    });

    // pic
    var options = {
        series: [45, 55],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: ['ผ่าน', 'ไม่ผ่าน'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
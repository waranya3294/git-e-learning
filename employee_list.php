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
                            <th class="text-start"><b>รหัสพนักงาน</b></th>
                            <th><b>ชื่อ-นามสกุล</b></th>
                            <th><b>แผนก</b></th>
                            <th><b>สอบหลังเรียน</b></th>
                            <th><b>สถานะ</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">1</td>
                            <td class="text-start">0000</td>
                            <td>นายสมหมาย สมสม</td>
                            <td>สี</td>
                            <td>5 คะแนน</td>
                            <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">สอบเสร็จแล้ว</span></td>
                        </tr>
                        <tr>
                            <td class="text-start">2</td>
                            <td class="text-start">0000</td>
                            <td>นายเอ บี</td>
                            <td>สี</td>
                            <td>5 คะแนน</td>
                            <td class="text-center"><span class="badge text-bg-danger " style="font-size:14px;">ยังไม่สอบ</span></td>
                        </tr>
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
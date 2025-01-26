<div class="container mt-4 mb-4">
    <h2 class="mb-3">รายชื่อพนักงานทั้งหมด</h2>
    <div class="card shadow-sm rounded-1 mb-3" style="border: none; border-top: 4px solid #00adb0;">
        <div class="card-body">
            <div class="row">
                <div class="col d-flex align-items-center ">
                    <h4>รายชื่อพนักงานทั้งหมด</h4>
                </div>
                <div class="col text-end mb-3">
                    <div id="downloadBtn" class="btn btn-primary"><i class="fa-solid fa-download"></i> ดาวน์โหลด</div>
                    <!-- <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-eye"></i> ดูทั้งหมด</div> -->
                </div>
            </div>
            <hr style="margin: 0 -15px;">
            <div class="row mt-2">
                <div class="col">
                    <select class="form-select form-select-sm" style="width: 120px;" aria-label="Small select example">
                        <option selected>เลือกแผนก</option>
                        <option value="1">สี</option>
                        <option value="2">เชื่อม</option>
                        <option value="3">ประกอบ</option>
                        <option value="4">CNC</option>
                    </select>
                </div>

                <div class="col d-flex align-items-center justify-content-end">
                    <label for="text" class="me-2">แสดง</label>
                    <select id="rowSelect" class="form-select form-select-sm" style="width: 80px;" aria-label="Small select example">
                        <option selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="ms-2">แถว</span>
                </div>
            </div>


            <div class="row text-center mt-2">
                <div class="col">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><b>#</b></th>
                                    <th><b>รหัสพนักงาน</b></th>
                                    <th><b>ชื่อ-นามสกุล</b></th>
                                    <th><b>แผนก</b></th>
                                    <th><b>สอบก่อนเรียน</b></th>
                                    <th><b>สอบหลังเรียน</b></th>
                                    <th><b>สถานะ</b></th>
                                </tr>
                            </thead>
                            <tr>
                                <th>1</th>
                                <th>0000</th>
                                <th>นายสมหมาย สมสม</th>
                                <th>สี</th>
                                <th>5 คะแนน</th>
                                <th>5 คะแนน</th>
                                <th><span class="badge text-bg-success " style="font-size:14px;">สอบเสร็จแล้ว</span></th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>0000</th>
                                <th>นายเอ บี</th>
                                <th>สี</th>
                                <th>5 คะแนน</th>
                                <th>5 คะแนน</th>
                                <th><span class="badge text-bg-danger " style="font-size:14px;">ยังไม่สอบ</span></th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>

            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">ใบรายงานผลการเข้าสอบ</h1>
                            <div id="downloadBtn" class="btn btn-primary"><i class="fa-solid fa-download"></i> ดาวน์โหลด</div>
                        </div>
                        <div class="modal-body mb-3">
                            <div class="row text-center mt-4">
                                <div class="col">
                                    <table id="modal-data-table" class="table table-bordered" style="color:blue">
                                        <thead class="table-dark">
                                            <tr>
                                                <th><b>รหัสพนักงาน</b></th>
                                                <th><b>ชื่อ-นามสกุล</b></th>
                                                <th><b>แผนก</b></th>
                                                <th><b>สอบก่อนเรียน</b></th>
                                                <th><b>สอบหลังเรียน</b></th>
                                                <th><b>สถานะ</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            Add your table rows here
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->
            <div class="row">
                <div class="col-sm-5">
                    <p id="rowInfo">แสดง 1 ถึง 10 จาก 000 แถว</p>
                </div>
                <div class="col-sm-7">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- กราฟ -->
<div class="container mt-3 mb-4">
    <div class="card shadow-sm rounded-1 mb-3" style="border: none;border-top: 4px solid #00adb0;">
        <div class="card-body">
            <div class="col">
                <div id="chartdiv">
                    <h4>ภาพรวมการสอบ</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
    document.getElementById("downloadBtn").addEventListener("click", function() {
        const table = document.getElementById("data-table");
        const rows = table.querySelectorAll("tr");
        const data = [];

        rows.forEach((row, index) => {
            const cells = row.querySelectorAll("td, th");
            const rowData = [];
            cells.forEach(cell => rowData.push(cell.innerText));
            if (rowData.length > 0) {
                data.push(rowData);
            }
        });

        const ws = XLSX.utils.aoa_to_sheet(data);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "Sheet1");

        XLSX.writeFile(wb, "รายชื่อ.xlsx");
    });

    // กราปภาพรวม
    am5.ready(function() {

        var root = am5.Root.new("chartdiv");
        root._logo.dispose();


        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        var chart = root.container.children.push(
            am5percent.PieChart.new(root, {
                endAngle: 270
            })
        );

        var series = chart.series.push(
            am5percent.PieSeries.new(root, {
                valueField: "value",
                categoryField: "category",
                endAngle: 270
            })
        );

        series.get("colors").set("colors", [
            am5.color(0x33cc33), // green
            am5.color(0xff4d4d) // red
        ]);

        series.states.create("hidden", {
            endAngle: -90
        });

        series.data.setAll([{
            category: "ผ่าน",
            value: 50,
        }, {
            category: "ไม่ผ่าน",
            value: 50,
        }]);

        series.appear(1000, 100);

    });

    document.getElementById("rowSelect").addEventListener("change", function() {
        const selectedValue = parseInt(this.value);
        const table = document.getElementById("data-table");
        const rows = table.querySelectorAll("tbody tr");
        rows.forEach((row, index) => {
            if (index < selectedValue) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });

        // If there are fewer rows than the selected value, add empty rows with sequential numbering
        const currentRowCount = rows.length;
        if (currentRowCount < selectedValue) {
            for (let i = currentRowCount; i < selectedValue; i++) {
                const emptyRow = document.createElement("tr");
                for (let j = 0; j < 7; j++) { // Assuming 7 columns
                    const emptyCell = document.createElement("td");
                    if (j === 0) {
                        emptyCell.innerText = i + 1; // Add sequential numbering
                    }
                    emptyRow.appendChild(emptyCell);
                }
                table.querySelector("tbody").appendChild(emptyRow);
            }
        }

        // Update the row info text
        document.getElementById("rowInfo").innerText = `แสดง 1 ถึง ${selectedValue} จาก 000 แถว`;
    });
</script>
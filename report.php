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
                    </select>
                </div>
            </div>

            <hr style="margin: 0 -15px;">

            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-start"><b>#</b></th>
                            <th class="text-start"><b>รหัสพนักงาน</b></th>
                            <th><b>ชื่อ-นามสกุล</b></th>
                            <th><b>แผนก</b></th>
                            <th><b>สอบก่อนเรียน</b></th>
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
                            <td>5 คะแนน</td>
                            <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">สอบเสร็จแล้ว</span></td>
                        </tr>
                        <tr>
                            <td class="text-start">2</td>
                            <td class="text-start">0000</td>
                            <td>นายเอ บี</td>
                            <td>สี</td>
                            <td>5 คะแนน</td>
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
    <div class="container-fluid mt-3 mb-4">
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


        let table = new DataTable('#example', {
            language: {
                url: "assets/lib/dataTables/language.json"
            }
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
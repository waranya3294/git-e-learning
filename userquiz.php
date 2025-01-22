<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3 style="color:blue">ประวัติการทำแบบทดสอบ</h3>
                </div>
                <div class="col text-end">
                    <button id="downloadBtn" class="btn btn-success"><i class="fa-solid fa-download"></i></button>
                </div>
            </div>

            <div class="row text-center mt-4">
                <div class="col">
                    <table class="table" id="data-table">
                        <thead class="thead-dark">
                            <tr style="font-size:20px">
                                <th><b>รหัสพนักงาน</b></th>
                                <th><b>ชื่อ-นามสกุล</b></th>
                                <th><b>คะแนนก่อนสอบ</b></th>
                                <th><b>คะแนนหลังสอบ</b></th>
                                <th><b>เวลา</b></th>
                                <th><b>สถานะ</b></th>
                            </tr>
                            <tr style="font-size:20px">
                                <th>0xxx</th>
                                <th>นาย xxx xxxx</th>
                                <th>5 คะแนน</th>
                                <th>5 คะแนน</th>
                                <th>10 นาที</th>
                                <th style="color:green">ผ่าน</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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
</script>
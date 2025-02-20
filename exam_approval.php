<div class="container-fluid mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>รออนุมัติเข้าสอบ</h3>
            <p>Admin อนุมัติสมาชิกเพื่อเข้ามาสอบ</p>
            <div class="table-responsive mt-3">
                <table id="example"class="table table-bordered"style="width: 100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">รหัสพนักงาน</th>
                            <th class="text-center">ชื่อ - นามสกุล</th>
                            <th class="text-center">แผนก</th>
                            <th class="text-center">วันที่</th>
                            <th class="text-center">รอบเวลา</th>
                            <th class="text-center">โรงงาน</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">หมายเหตุ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td>1</td>
                            <td class="text-center">3790</td>
                            <td>นาย เทวัน บุญยะบุตร</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>12 กุมภาพันธ์ 2568</td>
                            <td>09:00 - 10:00 น.</td>
                            <td class="text-center">TS</td>
                            <td>
                                <div class="text-center">
                                    <button class="btn btn-sm btn-warning me-2" style="color: white;" id="approve-btn-1" onclick="approve(1)">
                                        รออนุมัติ
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="text-center ">
                                    <button class="btn btn-sm btn-danger" id="reject-btn-1" onclick="showData(1)">
                                        ยกเลิก
                                    </button>
                                </div>
                            </td>
                            <td id="remark-1"></td>                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    let table = new DataTable("#example", {
        language: {
            url: "assets/lib/dataTables/language.json",
            info: "",
        },
    });

    // ฟังก์ชันสำหรับการอนุมัติ
    function approve(id) {
        const approveBtn = document.getElementById(`approve-btn-${id}`);
        const rejectBtn = document.getElementById(`reject-btn-${id}`);
        approveBtn.innerText = "อนุมัติแล้ว";
        approveBtn.classList.remove("btn-warning");
        approveBtn.classList.add("btn-success");
        approveBtn.disabled = true;
        rejectBtn.parentElement.classList.add("d-none"); // ซ่อนปุ่มยกเลิก
    }

    // ฟังก์ชันสำหรับการไม่อนุมัติ
    function showData(id) {
        Swal.fire({
            icon: "warning",
            html: `<div class="text-start">
             <textarea id="reason" class="form-control" placeholder="กรุณาระบุเหตุผล"></textarea>
          </div>`,
            confirmButtonText: "ตกลง",
            confirmButtonColor: "green",
            cancelButtonText: "ยกเลิก",
            showCancelButton: true,
            allowOutsideClick: false,
        }).then((result) => {
            if (result.isConfirmed) {
                const reason = document.getElementById("reason").value;
                document.getElementById(`remark-${id}`).innerText = reason;
                const rejectBtn = document.getElementById(`reject-btn-${id}`);
                const approveBtn = document.getElementById(`approve-btn-${id}`);
                rejectBtn.innerText = "ยกเลิกแล้ว";
                rejectBtn.classList.remove("btn-danger");
                rejectBtn.classList.add("btn-secondary");
                rejectBtn.disabled = true;
                approveBtn.parentElement.classList.add("d-none"); // ซ่อนปุ่มอนุมัติ
            }
        });
    }
</script>
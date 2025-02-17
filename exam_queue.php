<div class="container-fluid mt-4 mb-4">
    <h1 class="display-4" style="color: #18B0BD;">จัดการจองคิวสอบ</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col text-end mb-2">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><i class="fas fa-plus"></i> เพิ่มช่วงเวลา</button>
                    <button class="btn btn-secondary"><i class="fa-solid fa-download"></i> ดาวน์โหลด</button>
                </div>
            </div>
            <hr style="margin: 0 -15px; color:#aaaaaa;">

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มช่วงเวลา</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <label for="text">โรงงาน</label>
                                    <select name="factory" id="factory" class="form-control">
                                        <option value="1">TS (ตาสิทธิ์)</option>
                                        <option value="2">PD (ปลวกแดง)</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="text">เลือกห้องสอบ</label>
                                    <select name="exam" id="exam" class="form-control">
                                        <option value="1">ความปลอดภัยของการพ่นสี</option>
                                        <option value="2">การสวมใส่ชุด PPE</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="datetime">ช่วงเวลา</label>
                                    <input class="form-control" type="datetime" id="datetime" name="datetime" placeholder="ช่วงเวลา">
                                </div>
                                <div class="row">
                                    <label for="text">จำนวนที่นั่ง</label>
                                    <input class="form-control" type="datetime" id="datetime" name="datetime" placeholder="ช่วงเวลา">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">เพิ่ม</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr style=" font-size:18px;">
                            <th><b>วันที่</b></th>
                            <th><b>ห้องสอบ</b></th>
                            <th><b>ช่วงเวลา</b></th>
                            <th><b>จำนวนที่นั่ง</b></th>
                            <th><b>สถานะ</b></th>
                            <th><b>จัดการ</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle" style="font-size: 18px;">
                            <td>25-02-2025</td>
                            <td>ความปลอดภัยของการพ่นสี</td>
                            <td>09:00 - 10:00 น.</td>
                            <td>5/5</td>
                            <td class="text-center">
                                <span class="badge text-bg-danger">เต็ม</span>
                            </td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button>
                                    <button class="btn btn-sm btn-outline-primary" onclick=""><i class="bi bi-eye"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="font-size: 18px;">
                            <td>25-02-2025</td>
                            <td>ความปลอดภัยของการพ่นสี</td>
                            <td>10:30 - 11:30 น.</td>
                            <td>3/5</td>
                            <td class="text-center">
                                <span class="badge text-bg-success">ว่าง</span>
                            </td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button>
                                    <button class="btn btn-sm btn-outline-primary" onclick=""><i class="bi bi-eye"></i></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    let table = new DataTable('#example', {
        language: {
            url: "assets/lib/dataTables/language.json"
        }
    });


    function showDelete() {
        Swal.fire({
            title: "คุณต้องการลบข้อมูลนี้หรือไม่",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "green",
            cancelButtonColor: "#d33",
            confirmButtonText: "ใช่",
            cancelButtonText: "ไม่ใช่"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    text: "เรียบร้อย",
                    icon: "success",
                    timer: 1500,
                    showConfirmButton: false,
                });
            }
        });
    }
</script>
<style>
    th,
    td {
        text-align: center;
        vertical-align: middle;
        padding: 10px;
        /* เพิ่มช่องว่างให้ดูสวยขึ้น */
        border: 1px solid #ddd;
    }

    .middle {
        text-align: center;
        vertical-align: middle;
    }
</style>

<div class="container-fluid mt-4">
    <h1 class="display-4" style="color: #18B0BD;">จัดการผู้เข้าสอบ</h1>
    <div class="card">
        <div class="card-body">
            <div class="text-end mb-3">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i> เพิ่มข้อมูล</button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลพนักงาน</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-2">
                                <div class="col-6 text-start">
                                    <label for="text">รหัสพนักงาน</label>
                                    <input class="form-control" type="text" id="text" name="text" placeholder="รหัสพนักงาน">
                                </div>
                                <div class="col-6 text-start">
                                    <label for="text">ชื่อ - นามสกุล</label>
                                    <input class="form-control" type="text" id="text" name="text" placeholder="ชื่อ - นามสกุล">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-start">
                                    <label for="text">ตำแหน่ง</label>
                                    <input class="form-control" type="text" id="position" name="position" placeholder="ตำแหน่ง">
                                </div>
                                <div class="col-6 text-start">
                                    <label for="text">แผนก</label>
                                    <input class="form-control" type="text" id="section" name="section" placeholder="แผนก">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-start">
                                    <label for="text">ส่วนงาน</label>
                                    <input class="form-control" type="text" id="workplace" name="workplace" placeholder="ส่วนงาน">
                                </div>
                                <div class="col-6 text-start">
                                    <label for="text">โรงงาน</label>
                                    <select name="factory" id="factory" class="form-control">
                                        <option value="">--โรงงาน--</option>
                                        <option value="1">TS</option>
                                        <option value="2">PD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-start">
                                    <label for="text">ประเภทสัญญา</label>
                                    <select name="group" id="group" class="form-control">
                                        <option value="">--ประเภทสัญญา--</option>
                                        <option value="group1">KCAMS</option>
                                        <option value="group2">11 M</option>
                                        <option value="group3">SUB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="window.location.href='edituser_maincontent.php'">บันทึกข้อมูล</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">รหัสพนักงาน</th>
                            <th class="text-center">ชื่อ - นามสกุล</th>
                            <th class="text-center">ตำแหน่ง</th>
                            <th class="text-center">แผนก</th>
                            <th class="text-center">ส่วนงาน</th>
                            <th class="text-center">โรงงาน</th>
                            <th class="text-center">สัญญา</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">1</td>
                            <td class="text-center">0518</td>
                            <td>นาย ปฏิวัฒน์ นาดี</td>
                            <td>CNC Controller</td>
                            <td>Manufacturing Pluakdaeng Factory</td>
                            <td>CNC</td>
                            <td>PD</td>
                            <td>KCMSA</td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start">2</td>
                            <td class="text-center">0549</td>
                            <td>นาย สนิท เงาใส</td>
                            <td>Painter</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Final Paint 35 Ton</td>
                            <td>TS</td>
                            <td>KCMSA</td>
                            <td class="text-center">
                                <div>
                                    <button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="showDelete()"><i class="bi bi-trash"></i></button>
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
            url: "assets/lib/dataTables/language.json",
            paginate: {
                previous: "<",
                next: ">",
                first: "<<",
                last: ">>"
            }
        }
    });

    function editUser() {
        Swal.fire({
            html: `
           <div class="row">
    <h2 class="text-start">แก้ไขข้อมูลพนักงาน</h2>
    <hr>
</div>
<div class="row mb-2">
    <div class="col-6 text-start">
      <label for="text">รหัสพนักงาน</label>
            <input class="form-control" type="text" id="text" name="text" placeholder="รหัสพนักงาน">
    </div>
    <div class="col-6 text-start">
        <label for="text">ชื่อ - นามสกุล</label>
            <input class="form-control" type="text" id="text" name="text" placeholder="ชื่อ - นามสกุล">
    </div>
</div>
<div class="row mb-2">
    <div class="col-6 text-start">
      <label for="text">ตำแหน่ง</label>
            <input class="form-control" type="text" id="position" name="position" placeholder="ตำแหน่ง">
    </div>
    <div class="col-6 text-start">
        <label for="text">แผนก</label>
            <input class="form-control" type="text" id="section" name="section" placeholder="แผนก">
    </div>
</div>
<div class="row mb-2">
    <div class="col-6 text-start">
      <label for="text">ส่วนงาน</label>
            <input class="form-control" type="text" id="workplace" name="workplace" placeholder="ส่วนงาน">
    </div>
    <div class="col-6 text-start">
      <label for="text">โรงงาน</label>
        <select name="factory" id="factory" class="form-control">
            <option value="1">TS</option>
            <option value="2">PD</option>
        </select>
    </div>
</div>
<div class="row mb-2">
    <div class="col-6 text-start">
      <label for="text">ประเภทสัญญา</label>
    <select name="group" id="group" class="form-control">
     <option value="group1">KCAMS</option>
    <option value="group2">11 M</option>
     <option value="group3">SUB</option>
    </select>
    </div>
</div>
            `,
            confirmButtonColor: '#ffc107',
            confirmButtonText: 'แก้ไข',
            showCancelButton: true,
            cancelButtonText: 'ยกเลิก',
            allowOutsideClick: false
        })
    }

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
<div class="container-fluid mt-4">
    <h3>จัดการผู้เข้าสอบ</h3>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-start">#</th>
                            <th class="text-start">รหัสพนักงาน</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>ตำแหน่ง</th>
                            <th>แผนก</th>
                            <th>ส่วนงาน</th>
                            <th>โรงงาน</th>
                            <th>สัญญา</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">1</td>
                            <td class="text-start">0518</td>
                            <td>นาย ปฏิวัฒน์ นาดี</td>
                            <td>CNC Controller</td>
                            <td>Manufacturing Pluakdaeng Factory</td>
                            <td>CNC</td>
                            <td>PD</td>
                            <td>KCMSA</td>
                            <td class="text-center">
                                <div><button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start">2</td>
                            <td class="text-start">0549</td>
                            <td>นาย สนิท เงาใส</td>
                            <td>Painter</td>
                            <td>Manufacturing Tasith Factory</td>
                            <td>Final Paint 35 Ton</td>
                            <td>TS</td>
                            <td>KCMSA</td>
                            <td class="text-center">
                                <div><button class="btn btn-sm btn-outline-warning" onclick="editUser()"><i class="bi bi-pencil-square"></i></button></div>
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
                    url: "https://cdn.datatables.net/plug-ins/2.2.1/i18n/th.json",
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
    <h1>แก้ไขข้อมูล</h1>
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
            <input class="form-control" type="text" id="factory" name="factory" placeholder="โรงงาน">
    </div>
</div>
<div class="row mb-2">
    <div class="col-6 text-start">
      <label for="text">สัญญา</label>
            <input class="form-control" type="text" id="group" name="group" placeholder="สัญญา">
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
</script>
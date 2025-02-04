<div class="container-fluid mt-4">
  <div class="card shadow-sm rounded-1 mb-3" style="border: none;border-top: 4px solid #00adb0;">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h3>รวมผลคะแนนรายบุคคล</h3>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr style="font-size:20px">
                  <th><b>บทเรียน</b></th>
                  <th><b>คะแนนก่อนสอบ</b></th>
                  <th><b>คะแนนหลังสอบ</b></th>
                  <th><b>เวลาที่ทำ</b></th>
                  <th><b>สถานะ</b></th>
                </tr>
                <tr>
                  <th>บทเรียนที่ 1 ความปลอดภัยของการพ่นสี</th>
                  <th>5 คะแนน </th>
                  <th>5 คะแนน</th>
                  <th><i class="fa-regular fa-clock"></i> 8 นาที</th>
                  <th><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- datatable -->
<link href="https://cdn.datatables.net/2.2.1/css/dataTables.bootstrap5.css" rel="stylesheet">
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.js"></script>
<script>
  let table = new DataTable('#example', {
    paging:false,
    searching: false,
    language: {
      url: "https://cdn.datatables.net/plug-ins/2.2.1/i18n/th.json"
    }
  });
</script>
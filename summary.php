<div class="container-fluid mt-4">
  <div class="card shadow-sm rounded-1 mb-3" style="border: none;">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h3>รวมผลคะแนนรายบุคคล</h3>
        </div>
      </div>
      <div class="row ">
        <div class="col">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th><b>บทเรียน</b></th>
                  <th><b>คะแนนหลังสอบ</b></th>
                  <th><b>เวลาที่ทำ</b></th>
                  <th><b>สถานะ</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>บทเรียนที่ 1 ความปลอดภัยของการพ่นสี</td>
                  <td data-post="5">5 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 8 นาที</td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 2</td>
                  <td data-post="3">3 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 7 นาที</td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 3</td>
                  <td data-post="4">5 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 6 นาที</td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 4</td>
                  <td data-post="3">4 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 5 นาที</td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 5</td>
                  <td data-post="5">5 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 9 นาที</td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr id="summary-row" style="background-color:rgb(255, 255, 255); font-weight: bold;">
                  <td><b>รวมคะแนน</b></td>
                  <td id="total-post"><b></b></td>
                  <td><b>เปอร์เซ็นต์รวม</b></td>
                  <td id="percentage" class="text-center"><b></b></td>
                </tr>
              </tbody>
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
    paging: false,
    searching: false,
    language: {
      url: "https://cdn.datatables.net/plug-ins/2.2.1/i18n/th.json",
      info: ""
    }
  });

  // คำนวณคะแนนรวมและเปอร์เซ็นต์
  function calculateTotal() {
    let postTotal = 0, maxTotal = 0;

    document.querySelectorAll('#example tbody tr').forEach(row => {
      const post = parseInt(row.querySelector('[data-post]')?.getAttribute('data-post')) || 0;

      if (post) {
        postTotal += post;
        maxTotal += 5; // สมมติว่าคะแนนเต็มแต่ละบทคือ 10 คะแนน
      }
    });

    const totalPercentage = (postTotal / maxTotal) * 100;

    document.getElementById('total-post').innerText = postTotal + ' คะแนน';
    document.getElementById('percentage').innerText = totalPercentage.toFixed(2) + '%';
  }

  calculateTotal();
</script>

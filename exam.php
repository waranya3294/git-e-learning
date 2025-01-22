<div class="container mt-4">
  <div class="card shadow p-3 mb-5 bg-body rounded" style="border: none;border-top: 4px solid #00adb0;">
    <div class="card-body">
      <div class="col mb-3">
        <h3 style="color:blue;"><i class="bi bi-trophy"></i> สร้างชุดข้อสอบใหม่</h3>
      </div>

      <div class="row">
        <div class="col mt-3 mb-4">
          <button type="button" class="btn btn-success" style="font-size:18px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i> เพิ่มชุดข้อสอบ
          </button>
        </div>
        <hr>

        <!-- popup Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างชุดข้อสอบใหม่</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body mb-3">
                <label for="text">ตั้งชื่อชุดข้อสอบ: <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control mb-3" required>
             
                <label for="text">เวลาทำข้อสอบ: <span class="text-danger">*</span></label>
                <div class="input-group ">
                  <input type="number" id="exam_minute" value="" name="exam_minute" class="form-control" data-fv-field="exam_minute"><span class="input-group-text">นาที</span>
                 
                </div>
              </div>

              <div class="modal-footer mt-5">
                <button type="button" class="btn btn-success" title="save" onclick=""><i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-4 mb-3">
        <div class="card shadow-sm">
          <div class="card-body" style="cursor: pointer;">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h4 class="m-0" onclick="showData()">Topic 1</h4>
              </div>
              <div class="row mt-2">
                <label for="text">วัน/เวลาสอบ:</label>
              </div>
              <div class="col-6">
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-end">
                <button class="btn btn-outline-success" onclick="show_select_data_form()" title="เพิ่มข้อมูล"><i class="bi bi-plus-circle-fill"></i> </button>
                <button class="btn btn-outline-warning" onclick="show_select_data_form()" title="จัดการข้อมูล">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="container mb-3">
        <div class="card shadow-sm">
          <div class="card-body" style="cursor: pointer;">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h4 class="m-0" onclick="showData()">Topic 2</h4>
              </div>
              <div class="row mt-2">
                <label for="text">วัน/เวลาสอบ:</label>
              </div>
              <div class="col-6">
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-end">
                <button class="btn btn-outline-success" onclick="show_select_data_form()" title="เพิ่มข้อมูล">
                  <i class="bi bi-plus-circle-fill"></i> </button>
                <button class="btn btn-outline-warning" onclick="show_select_data_form()" title="จัดการข้อมูล">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<script>
  function showData() {
    Swal.fire({
      allowOutsideClick: false,
      title: "แสดงบทเรียนและข้อสอบที่เลือกไว้",
      html: `
    <!-- Add your content here -->
  `,
    });
  }
  // ลบข้อมูล
  function showDelete() {
    Swal.fire({
      title: "คุณต้องการลบข้อมูลนี้หรือไม่",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "ใช่",
      cancelButtonText: "ไม่ใช่"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          text: "เรียบร้อย",
          icon: "success"
        });
      }
    });
  }

  function show_select_data_form() {
    Swal.fire({
      allowOutsideClick: false,
      width: 700,
      html: `
      <div>
        <div class="row">
          <div class="col">
          <div class="text-start">
          <label for="exam_id">เลือกชุดข้อสอบ</label>
          </div>
            <select class="form-control " id="exam_id">
              <option value=""></option>
              <option value="">ประเภทของการพ่นสี</option>
              <option value="">การสวมใส่ชุด PPE</option>
              <option value="">Test</option>
            </select>
          </div>
        </div>

        <div class="text-start mt-2">
          <label for="exam_id">เลือกเนื้อหา</label>
          </div>
          <div class="d-flex">
            <select class="form-control" id="exam_id">
              <option value=""></option>
              <option value="">Test</option>
              <option value="">Test</option>
              <option value="">Test</option>
            </select>
            <button type="button" name="content" class="btn btn-outline-secondary ms-2" onclick="addContent()" title="เพิ่มเนื้อหา">
            <i class="fas fa-plus"></i>
            </button>
          </div>
          <div id="content-container" class="mt-2"></div>
        </div>
      </div>
      `,
    });
  }

  let pageCounter = 2;
  
  function addContent() {
    const contentContainer = document.getElementById('content-container');
    const newContent = document.createElement('div');
    newContent.className = 'content-box mt-2';
    newContent.innerHTML = `
      <div class="d-flex align-items-center">
        <span class="me-2" >${pageCounter}</span>
        <select class="form-control" id="exam_id">
          <option value=""></option>
          <option value="">Test</option>
          <option value="">Test</option>
          <option value="">Test</option>
        </select>
        <button type="button" class="btn btn-outline-danger ms-2" onclick="removeContent(this)" title="ลบเนื้อหา" style="flex: 1;">
          <i class="bi bi-trash"></i>
        </button>
      </div>
    `;
    contentContainer.appendChild(newContent);
    pageCounter++;
  }
  // ลบ
  function removeContent(button) {
    button.parentElement.parentElement.remove();
  }

  function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('collapsed');

    var toggleBtn = document.querySelector('.toggle-btn');
    if (sidebar.classList.contains('collapsed')) {
      toggleBtn.innerHTML = '&#x2192;';
    } else {
      toggleBtn.innerHTML = '&#x2190;';
    }
  }
</script>

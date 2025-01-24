<div class="container mt-4 mb-4">
  <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;">
    <div class="card-body">
      <div class="col mb-3">
        <h3 style="color:blue;"><i class="bi bi-trophy"></i> สร้างบทเรียนใหม่</h3>
      </div>

      <div class="row">
        <div class="col mt-3 mb-4">
          <button type="button" class="btn btn-success" style="font-size:18px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i> เพิ่มบทเรียน
          </button>
        </div>
        <hr>

        <!-- popup Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างบทเรียน</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body mb-3">
                <label for="text">ตั้งชื่อบทเรียน: <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control mb-3" required>

                <label for="exam_id">เลือกชุดข้อสอบก่อนเรียน - หลังเรียน: <span class="text-danger">*</span></label>
                <select class="form-control mb-3" id="exam_id">
                  <option value=""></option>
                  <option value="">ประเภทของการพ่นสี</option>
                  <option value="">การสวมใส่ชุด PPE</option>
                  <option value="">Test</option>
                </select>

                <label for="exam_id">เลือกเนื้อหาบทเรียน: <span class="text-danger">*</span></label>
                <div class="d-flex align-items-center">
                  <span class="me-2">1</span>
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

                <label for="text" class="mt-3">เวลาทำข้อสอบ: <span class="text-danger">*</span></label>
                <div class="input-group">
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
      confirmButtonColor: 'green',
      width: 700,
      html: `
     <div class="col">
                    <div class="text-start">
                        <label for="exam_id">ชื่อบทเรียน</label>
                    </div>
                    <input type="text" name="title" id="title" class="form-control mb-3" placeholder="ชื่อบทเรียน" required-1>
                </div>
                <div class="col">
                    <div class="text-start">
                        <label for="exam_id">ชุดข้อสอบก่อนเรียน - หลังเรียน</label>
                    </div>
                    <input type="text" name="title" id="title" class="form-control mb-3" placeholder="ชื่อชุดข้อสอบ" required-1>
                </div>
            </div>
              <div class="col text-start mt-2">
                <label for="exam_id">ชื่อเนื้อหา</label>
              </div>
          <div>
                <input type="text" name="title" id="title" class="form-control mb-2" placeholder="ชื่อบทเรียนของเนื้อหา" required-1>
            </div>
            <input type="text" name="title" id="title" class="form-control mb-2" placeholder="ชื่อบทเรียนของเนื้อหา" required-1>
           
            <div class="row">
            <div class="col-md-9">
              <input type="text" name="title" id="title" class="form-control mb-2" placeholder="ชื่อบทเรียนของเนื้อหา" required-1>
            </div>
               <div class="col text-end">
                <button type="button" name="content" class="btn btn-outline-primary" onclick="addContent()" title="เพิ่มเนื้อหา">
                  <i class="fas fa-plus">เพิ่มเนื้อหา</i>
                </button>
            </div>    
              </div>
                <div id="content-container" class="mt-2"></div>
            <div class="text-start">
              <label for="exam_id">เวลาในการทำข้อสอบ</label>
            </div>
              <input type="text" name="title" id="title" class="form-control mb-3" placeholder="เวลาในการทำข้อสอบ" required-1>
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

</script>
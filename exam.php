<div class="container-fluid mt-4 mb-4 px-4">
  <div class="card shadow-sm rounded-1 p-4" style="border: none;">
    <div class="card-body">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-sm-6">
          <h1 style="color: #18B0BD;margin: 0;">สร้างบทเรียนใหม่</h1>
        </div>
        <div class="col-lg-6 col-sm-6 text-end ">
          <div class="btn btn-success" style="font-size:18px; border: none;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i> เพิ่มบทเรียน
          </div>
        </div>
      </div>
      <hr>

      <!-- เพิ่มเนื้อหา-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างบทเรียน</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- เพิ่ม modal-body -->
            <div class="modal-body">
              <label for="lesson-title">ตั้งชื่อบทเรียน: <span class="text-danger">*</span></label>
              <input type="text" name="title" id="lesson-title" class="form-control mb-3" required>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="preTestNew" onchange="toggleContent('preTestNew', 'postTestNew', 'content-section-new')">
                <label class="form-check-label" for="preTestNew">สอบก่อนเรียน</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="postTestNew" onchange="toggleContent('preTestNew', 'postTestNew', 'content-section-new')">
                <label class="form-check-label" for="postTestNew">สอบหลังเรียน</label>
              </div>

              <div id="content-section-new" style="display: none;">
                <label for="exam_id_new">เลือกชุดข้อสอบ: <span class="text-danger">*</span></label>
                <select class="form-control mb-3" id="exam_id_new">
                  <option value="">-- เลือกชุดข้อสอบ --</option>
                  <option value="exam1">ความปลอดภัยของการพ่นสี</option>
                  <option value="exam2">การสวมใส่ชุด PPE</option>
                  <option value="exam3">Test</option>
                </select>
              </div>

              <label for="lesson-content">เลือกเนื้อหาบทเรียน: <span class="text-danger">*</span></label>
              <div class="d-flex align-items-center">
                <span class="me-2">1</span>
                <select class="form-control" id="lesson-content">
                  <option value="">-- เลือกเนื้อหา --</option>
                  <option value="content1">ประเภทของการพ่นสี</option>
                  <option value="content2">การสวมใส่ชุด PPE</option>
                  <option value="content3">Test</option>
                </select>
                <button type="button" name="content" class="btn btn-outline-secondary ms-2" onclick="addContent('content-container')" title="เพิ่มเนื้อหา">
                  <i class="fas fa-plus"></i>
                </button>
              </div>

              <div id="content-container" class="mt-2"></div>
            </div> <!-- ปิด modal-body -->

            <div class="modal-footer mt-2">
              <button type="button" class="btn btn-success" title="save" onclick="window.location.href='exam_maincontent.php'">
                <i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="px-3">
        <div class="card shadow-sm mt-4 mb-3">
          <div class="card-body" style="cursor: pointer;">
            <div class="row">
              <div class="col-6 d-flexalign-items-center">
                <h4 class="m-0" onclick="showData()">บทเรียนที่ 1 ความปลอดภัยของการพ่นสี</h4>
              </div>
              <div class="row mt-2">
                <label for="text">วัน/เวลาสอบ:</label>
              </div>
              <div class="col-6">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 text-end">
                <button class="btn btn-outline-warning" title="จัดการข้อมูล" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
              </div>
            </div>
          </div>
        </div>

        <!-- แก้ไขข้อมูล -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างบทเรียน</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body mb-3">
                <label for="lesson-title-edit">ชื่อบทเรียน: <span class="text-danger">*</span></label>
                <input type="text" name="title" id="lesson-title-edit" class="form-control mb-3" required>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="preTestEdit" onchange="toggleContent('preTestEdit', 'postTestEdit', 'content-section-edit')">
                  <label class="form-check-label" for="preTestEdit">สอบก่อนเรียน</label>
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" id="postTestEdit" onchange="toggleContent('preTestEdit', 'postTestEdit', 'content-section-edit')">
                  <label class="form-check-label" for="postTestEdit">สอบหลังเรียน</label>
                </div>

                <div id="content-section-edit" style="display: none;">
                  <label for="exam_id_edit">เลือกชุดข้อสอบ: <span class="text-danger">*</span></label>
                  <select class="form-control mb-3" id="exam_id_edit">
                    <option value="">-- เลือกชุดข้อสอบ --</option>
                    <option value="exam1">ความปลอดภัยของการพ่นสี</option>
                    <option value="exam2">การสวมใส่ชุด PPE</option>
                    <option value="exam3">Test</option>
                  </select>
                </div>
                <label for="lesson-content">เนื้อหาบทเรียน: <span class="text-danger">*</span></label>
                <div class="d-flex align-items-center">
                  <span class="me-2">1</span>
                  <select class="form-control" id="lesson-content">
                    <option value="">-- เลือกเนื้อหา --</option>
                    <option value="content1">ประเภทของการพ่นสี</option>
                    <option value="content2">การสวนใส่ชุด PPE</option>
                    <option value="content3">Test</option>
                  </select>
                  <button type="button" name="content" class="btn btn-outline-secondary ms-2" onclick="addContent('content-container-new')" title="เพิ่มเนื้อหา">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="content-container-new" class="mt-2"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="window.location.href='exam_maincontent.php'">บันทึกข้อมูล</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card shadow-sm mb-2">
          <div class="card-body" style="cursor: pointer;">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h4 class="m-0" onclick="showData()">บทเรียนที่ 2</h4>
              </div>
              <div class="row mt-2">
                <label for="text">วัน/เวลาสอบ:</label>
              </div>
              <div class="col-6">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 text-end">
                <button class="btn btn-outline-warning" title="จัดการข้อมูล" data-bs-toggle="modal" data-bs-target="#exampleModal1">
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


  <script>
    function toggleContent(preTestId, postTestId, contentSectionId) {
      const preTest = document.getElementById(preTestId);
      const postTest = document.getElementById(postTestId);
      const contentSection = document.getElementById(contentSectionId);

      if (preTest.checked || postTest.checked) {
        contentSection.style.display = 'block';
      } else {
        contentSection.style.display = 'none';
      }
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
            showConfirmButton: false,
          });
        }
      });
    }

    let pageCounterNew = 2;
    let pageCounterEdit = 2;

    function addContent(containerId) {
      const contentContainer = document.getElementById(containerId);
      if (!contentContainer) {
        console.error(`ไม่พบคอนเทนเนอร์ ID: ${containerId}`);
        return;
      }

      let currentCounter = containerId === 'content-container-new' ? pageCounterNew : pageCounterEdit;

      const newContent = document.createElement('div');
      newContent.className = 'content-box mt-2';

      newContent.innerHTML = `
    <div class="d-flex align-items-center">
      <span class="me-2 number-label">${currentCounter}</span> 
      <select class="form-control" name="content_${currentCounter}" style="flex: 1;">
        <option value="">-- เลือกเนื้อหา --</option>
        <option value="content1">ประเภทของการพ่นสี</option>
        <option value="content2">การสวมใส่ชุด PPE</option>
        <option value="content3">เนื้อหาที่ 3</option>
      </select>
      <button type="button" class="btn btn-outline-danger ms-2" onclick="removeContent(this, '${containerId}')" title="ลบเนื้อหา">
        <i class="bi bi-trash"></i>
      </button>
    </div>
  `;

      contentContainer.appendChild(newContent);
      console.log(`เพิ่มเนื้อหาใน: ${containerId}`);

      // เพิ่มตัวนับสำหรับลำดับถัดไป
      if (containerId === 'content-container-new') {
        pageCounterNew++;
      } else {
        pageCounterEdit++;
      }
    }

    // ฟังก์ชันสำหรับลบเนื้อหา
    function removeContent(button, containerId) {
      button.parentElement.parentElement.remove();
      updateNumbering(containerId); // เรียกใช้ฟังก์ชันอัปเดตลำดับใหม่
    }

  </script>
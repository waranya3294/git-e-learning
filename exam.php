<div class="container mt-4 mb-4">
  <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;">
    <div class="card-body">
      <div class="col mb-3">
        <h3>สร้างบทเรียนใหม่</h3>
      </div>

      <div class="row">
        <div class="col text-end mt-3 mb-4">
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
                <label for="lesson-title">ตั้งชื่อบทเรียน: <span class="text-danger">*</span></label>
                <input type="text" name="title" id="lesson-title" class="form-control mb-3" required>

                <label for="exam_id">เลือกชุดข้อสอบก่อนเรียน - หลังเรียน: <span class="text-danger">*</span></label>
                <select class="form-control mb-3" id="exam_id">
                  <option value="">-- เลือกชุดข้อสอบ --</option>
                  <option value="exam1">ความปลอดภัยของการพ่นสี</option>
                  <option value="exam1">ประเภทของการพ่นสี</option>
                  <option value="exam2">การสวมใส่ชุด PPE</option>
                  <option value="exam3">Test</option>
                </select>

                <label for="lesson-content">เลือกเนื้อหาบทเรียน: <span class="text-danger">*</span></label>
                <div class="d-flex align-items-center">
                  <span class="me-2">1</span>
                  <select class="form-control" id="lesson-content">
                    <option value="">-- เลือกเนื้อหา --</option>
                    <option value="content1">ประเภทของการพ่นสี</option>
                    <option value="content2">การสวนใส่ชุด PPE</option>
                    <option value="content3">Test</option>
                  </select>
                  <button type="button" name="content" class="btn btn-outline-secondary ms-2" onclick="addContent('content-container')" title="เพิ่มเนื้อหา">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div id="content-container" class="mt-2"></div>

                <label for="exam-minute" class="mt-3">เวลาทำข้อสอบ: <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="number" id="exam-minute" value="" name="exam_minute" class="form-control" data-fv-field="exam_minute"><span class="input-group-text">นาที</span>

                </div>
              </div>

              <div class="modal-footer mt-5">
                <button type="button" class="btn btn-success" title="save" onclick="window.location.href='exam_maincontent.php'"><i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-4 mb-3">
        <div class="card shadow-sm">
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

            <!-- แก้ไขข้อมูล -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างบทเรียน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body mb-3">
                    <label for="lesson-title">ชื่อบทเรียน: <span class="text-danger">*</span></label>
                    <input type="text" name="title" id="lesson-title" class="form-control mb-3" required>

                    <label for="exam_id">ชุดข้อสอบก่อนเรียน - หลังเรียน: <span class="text-danger">*</span></label>
                    <select class="form-control mb-3" id="exam_id">
                      <option value="">-- เลือกชุดข้อสอบ --</option>
                      <option value="exam1">ความปลอดภัยของการพ่นสี</option>
                      <option value="exam1">ประเภทของการพ่นสี</option>
                      <option value="exam2">การสวมใส่ชุด PPE</option>
                      <option value="exam3">Test</option>
                    </select>

                    <label for="lesson-content">เนื้อหาบทเรียน: <span class="text-danger">*</span></label>
                    <div class="d-flex align-items-center">
                      <span class="me-2">1</span>
                      <select class="form-control" id="lesson-content">
                        <option value="">-- เลือกเนื้อหา --</option>
                        <option value="content1">ประเภทของการพ่นสี</option>
                        <option value="content2">การสวนใส่ชุด PPE</option>
                        <option value="content3">Test</option>
                      </select>
                      <button type="button" name="content" class="btn btn-outline-secondary ms-2" onclick="addContent('content-container')" title="เพิ่มเนื้อหา">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <div id="content-container" class="mt-2"></div>

                    <label for="exam-minute" class="mt-3">เวลาทำข้อสอบ: <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="number" id="exam-minute" value="" name="exam_minute" class="form-control" data-fv-field="exam_minute"><span class="input-group-text">นาที</span>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='exam_maincontent.php'">บันทึกข้อมูล</button>
                  </div>
                </div>
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
          confirmButtonColor: "#3085d6",
          icon: "success"
        });
      }
    });
  }

  // function show_select_data_form() {
  //   Swal.fire({
  //     allowOutsideClick: false,
  //     confirmButtonColor: 'green',
  //     width: 700,
  //     html: `
  //    <div class="col">
  //                   <div class="text-start">
  //                       <label for="lesson-title">ชื่อบทเรียน</label>
  //                   </div>
  //                   <input type="text" name="title" id="lesson-title-modal" class="form-control mb-3" placeholder="ชื่อบทเรียน" required>
  //               </div>
  //               <div class="col">
  //                   <div class="text-start">
  //                       <label for="exam_id">ชุดข้อสอบก่อนเรียน - หลังเรียน</label>
  //                   </div>
  //                   <input type="text" name="exam" id="exam-title-modal" class="form-control mb-3" placeholder="ชื่อชุดข้อสอบ" required>
  //               </div>
  //           </div>
  //             <div class="col text-start mt-2">
  //               <label for="content-title">ชื่อเนื้อหา</label>
  //             </div>
  //         <div>
  //               <input type="text" name="content_title" id="content-title-modal" class="form-control mb-2" placeholder="ชื่อบทเรียนของเนื้อหา" required>
  //           </div>
  //           <input type="text" name="content_title" id="content-title-modal" class="form-control mb-2" placeholder="ชื่อบทเรียนของเนื้อหา" required>

  //           <div class="row">
  //           <div class="col-md-9">
  //             <input type="text" name="content_title" id="content-title-modal" class="form-control mb-2" placeholder="ชื่อบทเรียนของเนื้อหา" required>
  //           </div>
  //              <div class="col text-end">
  //               <button type="button" id="addContentBtn"  class="btn btn-outline-primary" onclick="addContent()" title="เพิ่มเนื้อหา">
  //                 <i class="fas fa-plus">เพิ่มเนื้อหา</i>
  //               </button>
  //           </div>    
  //             </div>
  //               <div id="content-container-modal" class="mt-2"></div>
  //           <div class="text-start">
  //             <label for="exam-minute-modal">เวลาในการทำข้อสอบ</label>
  //           </div>
  //             <input type="text" name="exam_time" id="exam-minute-modal" class="form-control mb-3" placeholder="เวลาในการทำข้อสอบ" required>
  //           `,
  //   });
  // }
  let pageCounter = 2;

  function addContent(containerId) {
    const contentContainer = document.getElementById(containerId);
    const newContent = document.createElement('div');
    newContent.className = 'content-box mt-2';

    newContent.innerHTML = `
    <div class="d-flex align-items-center">
      <span class="me-2">${pageCounter}</span>
      <select class="form-control" name="content_${pageCounter}" style="flex: 1;">
        <option value="">-- เลือกเนื้อหา --</option>
       <option value="content1">ประเภทของการพ่นสี</option>
       <option value="content2">การสวนใส่ชุด PPE</option>
        <option value="content3">เนื้อหาที่ 3</option>
      </select>
      <button type="button" class="btn btn-outline-danger ms-2" onclick="removeContent(this)" title="ลบเนื้อหา">
        <i class="bi bi-trash"></i>
      </button>
    </div>
  `;
    contentContainer.appendChild(newContent);
    pageCounter++;
  }

  function removeContent(button) {
    button.parentElement.parentElement.remove();
  }
</script>
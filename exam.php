<div class="container-fluid mt-4 mb-4 px-4">
  <div class="card shadow-sm rounded-1 p-4" style="border: none;">
    <div class="card-body">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-sm-6">
          <h1 style="color: #18B0BD;margin: 0;">สร้างบทเรียนใหม่</h1>
        </div>
        <div class="col-lg-6 col-sm-6 text-end">
          <button class="btn btn-success" style="font-size:18px; border: none;" data-bs-toggle="modal" data-bs-target="#addLessonModal">
            <i class="fas fa-plus"></i> เพิ่มบทเรียน
          </button>
        </div>
      </div>
      <hr>

      <!-- Modal: เพิ่มบทเรียน -->
      <div class="modal fade" id="addLessonModal" tabindex="-1" aria-labelledby="addLessonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addLessonModalLabel">สร้างบทเรียน</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <label for="lesson-title">ชื่อบทเรียน:<span class="text-danger">*</span></label>
              <input type="text" name="title" id="lesson-title" class="form-control" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" onclick="window.location.href='exam_maincontent.php'">
                <i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- รายการบทเรียน -->
      <div class="px-3">
        <div class="card shadow-sm mt-4 mb-3">
          <div class="card-body" style="cursor: pointer;">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h4 class="m-0" onclick="showData()">บทเรียนที่ 1: ความปลอดภัยของการพ่นสี</h4>
              </div>
              <div class="col-6 text-end">
                <button class="btn btn-sm btn-outline-warning me-2" title="แก้ไข" data-bs-toggle="modal" data-bs-target="#addSubLessonModal">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-sm btn-outline-danger" title="ลบ" onclick="showDelete()">
                  <i class="bi bi-trash3"></i>
                </button>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-lg-6 col-sm-6">
                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addSubLessonModal">
                  <i class="fas fa-plus"></i> เพิ่มบทเรียนย่อย
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal: เพิ่มบทเรียนย่อย -->
        <div class="modal fade" id="addSubLessonModal" tabindex="-1" aria-labelledby="addSubLessonModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addSubLessonModalLabel">เพิ่มบทเรียนย่อย</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label for="sub-lesson-title">ชื่อบทเรียนย่อย: <span class="text-danger">*</span></label>
                <input type="text" id="sub-lesson-title" class="form-control mb-3" required>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="preTest" onchange="toggleContent()">
                  <label class="form-check-label" for="preTest">กรุณาเลือก หากต้องการให้มีการ ทดสอบก่อนเรียน</label>
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" id="postTest" onchange="toggleContent()">
                  <label class="form-check-label" for="postTest">กรุณาเลือก หากต้องการให้มีการ ทดสอบหลังเรียน</label>
                </div>

                <label for="lesson-content">เนื้อหาบทเรียนย่อย: <span class="text-danger">*</span></label>
                <textarea id="tiny"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="window.location.href='exam_maincontent.php'">
                  <i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล
                </button>
              </div>
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
tinymce.init({
        branding: false,
        selector: '#tiny',
        plugins: 'image link media table  preview  fullscreen lists fontsizeinput color textcolor',
        toolbar: 'undo redo | fontsizeinput fontsizeselect | image link media  bold italic backcolor forecolor |\
             bullist numlist checklist table | alignleft aligncenter alignright alignjustify preview fullscreen',
        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image media file',
        media_live_embeds: true,
        media_url_resolver: (data, resolve) => {
            if (data.url.includes('youtube.com') || data.url.includes('vimeo.com')) {
                const embedHtml = `<iframe src="${data.url}" width="400" height="400" ></iframe>`;
                resolve({
                    html: embedHtml
                });
            } else {
                resolve({
                    html: ''
                });
            }
        },
        file_picker_callback: (cb, value, meta) => {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            if (meta.filetype === 'image') {
                input.setAttribute('accept', 'image/*');
            } else if (meta.filetype === 'media') {
                input.setAttribute('accept', 'video/*');
            } else if (meta.filetype === 'file') {
                input.setAttribute('accept', '.pdf,.doc,.docx');
            }

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];
                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });

                    if (meta.filetype === 'file') {
                        if (file.name.endsWith('.doc') || file.name.endsWith('.docx')) {
                            tinymce.activeEditor.setContent(reader.result);
                        } else if (file.name.endsWith('.pdf')) {
                            const embedHtml = `<embed src="${reader.result}" type="application/pdf" width="100%" height="600px" />`;
                            tinymce.activeEditor.setContent(embedHtml);
                        } else if (file.type.startsWith('image/')) {
                            const embedHtml = `<img src="${reader.result}" alt="${file.name}" />`;
                            tinymce.activeEditor.setContent(embedHtml);
                        } else if (file.type.startsWith('video/')) {
                            const embedHtml = `<video controls><source src="${reader.result}" type="${file.type}"></video>`;
                            tinymce.activeEditor.setContent(embedHtml);
                        }
                    }
                });
                reader.readAsDataURL(file);
            });

            input.click();
        },
        importword: {
            images: true,
            videos: true,
            pdfs: true
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
      // updateNumbering(containerId); // เรียกใช้ฟังก์ชันอัปเดตลำดับใหม่
      if (containerId === 'content-container-new') {
        pageCounterNew--;
      } else {
        pageCounterEdit--;
      }
    }
  </script>
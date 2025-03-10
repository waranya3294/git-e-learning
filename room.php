<?php
$type = $_GET['user_type'];
session_start();

$_SESSION['user_type'] = $type;

?>

<div class="container-fluid mt-4 " style="color: #333;">
  <div class="card shadow-sm rounded-1 mb-4 p-4" style="border: none;">
    <div class="card-body">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-sm-6">
          <h1 class="display-4" style="color: #18B0BD;margin: 0;">สร้างห้องเรียน</h1>
        </div>
        <div class="col-lg-6 col-sm-6 text-end ">
          <div class="btn btn-success" onclick="window.location.href='exam_room_maincontent.php'" style="font-size:18px; border: none;">
            <i class="fas fa-plus"></i> สร้างห้องเรียน
          </div>
        </div>
      </div>
      <hr>
    </div>

    <!-- แก้ไขข้อมูล -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไขข้อมูล</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body mb-3">
            <div class="mb-3">
              <label for="name">ชื่อห้องสอบ: <span class="text-danger">*</span></label>
              <input type="text" name="exam_name" id="name" class="form-control" required placeholder="กรอกชื่อห้องสอบ">
            </div>

            <div class="mb-3">
              <label for="description">คำอธิบายรายวิชา: <span class="text-danger">*</span></label>
              <textarea id="tiny"></textarea>
            </div>

            <label for="datetimes">ระยะเวลาเปิดห้องสอบ: <span class="text-danger">*</span></label>
            <div class="row justify-content-center" id="dateFieldsContainer">
              <div class="col-lg-11 d-flex align-items-center">
                <div class="input-group mb-2">
                  <input type="text" id="datetimes" name="datetimes" class="form-control" required placeholder="เลือกช่วงเวลา" aria-describedby="exam_starttime_endtime">
                  <span class="input-group-text" id="exam_starttime_endtime" style="cursor: pointer;">
                    <i class="fa-solid fa-calendar-days"></i>
                  </span>
                </div>
              </div>
              <div class="col">
                <button type="button" name="content" class="btn btn-outline-secondary ms-2" onclick="addDatatimes()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" onclick="window.location.href='exam_maincontent.php'">บันทึกข้อมูล</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="px-4">
      <!-- Card สี -->
      <div class="card shadow-sm rounded-1 mb-3" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">สี</h2>
              <div class="col text-end p-0">
                <button class="btn btn-sm btn-primary" onclick="window.location.href='exam_maincontent.php'" style="background-color: #23b2b5; border: none;">สร้างบทเรียน</button>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="text">วัน/เวลาที่สร้าง:</label><br>
            </div>
            <div class="col text-end">
              <button class="btn btn-sm btn-outline-warning" title="จัดการข้อมูล" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card เชื่อม -->
      <div class="card shadow-sm rounded-1 mb-3" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">เชื่อม</h2>
              <div class="col text-end p-0">
                <button class="btn btn-sm btn-primary" onclick="window.location.href='exam_maincontent.php'" style="background-color: #23b2b5; border: none;">สร้างบทเรียน</button>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="text">วัน/เวลาที่สร้าง:</label><br>
            </div>
            <div class="col text-end">
              <button class="btn btn-sm btn-outline-warning" title="จัดการข้อมูล" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card ประกอบ -->
      <div class="card shadow-sm rounded-1 mb-3" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">ประกอบ</h2>
              <div class="col text-end p-0">
                <button class="btn btn-sm btn-primary" onclick="window.location.href='exam_maincontent.php'" style="background-color: #23b2b5; border: none;">สร้างบทเรียน</button>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="text">วัน/เวลาที่สร้าง:</label><br>
            </div>
            <div class="col text-end">
              <button class="btn btn-sm btn-outline-warning" title="จัดการข้อมูล" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card CNC -->
      <div class="card shadow-sm rounded-1 mb-3" style="cursor: pointer">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h2 onclick="window.location.href='exam_maincontent.php'">CNC</h2>
              <div class="col text-end p-0">
                <button class="btn btn-sm btn-primary" onclick="window.location.href='exam_maincontent.php'" style="background-color: #23b2b5; border: none;">สร้างบทเรียน</button>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <label for="text">วัน/เวลาที่สร้าง:</label><br>
            </div>
            <div class="col text-end">
              <button class="btn btn-sm btn-outline-warning" title="จัดการข้อมูล" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger" onclick="showDelete()" title="ลบข้อมูล"><i class="bi bi-trash3"></i></button>
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

      function addDatatimes() {
        const dateFieldsContainer = document.getElementById('dateFieldsContainer');
        const uniqueId = 'datetimes_' + Date.now();

        const dateField = document.createElement('div');
        dateField.classList.add('mb-2');
        dateField.setAttribute('data-id', uniqueId);
        dateField.innerHTML = `
        <div class="row">
            <div class="col-lg-11">
                <div class="input-group">
                    <input type="text" id="${uniqueId}" name="datetimes[]" class="form-control datetime-picker" required placeholder="เลือกช่วงเวลา">
                    <span class="input-group-text" style="cursor: pointer;">
                        <i class="fa-solid fa-calendar-days"></i>
                    </span>
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-outline-danger ms-2 remove-datetime" data-id="${uniqueId}">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
    `;
        dateFieldsContainer.appendChild(dateField);

        // ใช้ setTimeout เพื่อให้ input ถูกเพิ่มลง DOM ก่อน
        setTimeout(() => {
            initializeDateRangePicker(`#${uniqueId}`);
        }, 100);
    }

    // ฟังก์ชันแนบ DateRangePicker กับ input ที่เพิ่มเข้ามาใหม่
    function initializeDateRangePicker(selector) {
        $(selector).daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
            autoUpdateInput: false,
            locale: {
                format: 'DD MMM YYYY HH:mm',
                cancelLabel: 'Clear'
            }
        }).on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD MMM YYYY HH:mm') + ' - ' + picker.endDate.format('DD MMM YYYY HH:mm'));
        }).on('cancel.daterangepicker', function() {
            $(this).val('');
        });
    }

    // ฟังก์ชันลบฟิลด์ช่วงเวลา
    $(document).on('click', '.remove-datetime', function() {
        const idToRemove = $(this).data('id');
        $(`[data-id="${idToRemove}"]`).remove();
    });

    // เรียกใช้ DateRangePicker สำหรับ input ที่มีอยู่ในหน้าแรก
    $(document).ready(function() {
        initializeDateRangePicker('input[name="datetimes"]');
    });

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

    // Prevent Bootstrap dialog from blocking focusin
    document.addEventListener('focusin', (e) => {
        if (e.target.closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
            e.stopImmediatePropagation();
        }
    });

    document.getElementById('save-btn').addEventListener('click', () => {
        const content = tinymce.get('tiny').getContent();
        const jsonContent = JSON.stringify({
            content: content
        });

        fetch('save_content.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset=UTF-8'
                },
                body: jsonContent
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });

    </script>
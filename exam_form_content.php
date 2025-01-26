<div class="container mt-4">
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2><i class="bi bi-folder"></i> ลงข้อสอบ</h2>
                </div>
            </div>
            <!-- button นำข้อมูลเข้า -->
            <div class="row">
                <div class="col-12 text-end mb-4">
                    <button type="button" class="btn btn-primary" id="uploadBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-file-earmark-arrow-down-fill"></i> นำเข้าข้อมูลจาก Excel
                    </button>
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#previewModal" title="แสดงตัวอย่าง" onclick="previewExam()">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- นำไฟล์ excel เข้า -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    <i class=" fas fa-file-import" style="color: green;"></i> นำเข้าไฟล์ Excel
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-custom alert-outline-warning" role="alert">
                                            <div class="alert-text">
                                                <p class="text-warning">วิธีการนำเข้าไฟล์คำถาม</p>
                                                1. จำนวนข้อคำถามไม่เกิน 50 แถว/ไฟล์ หากเกินโดยระบบจะตัดแค่ 100 แถวเท่านั้น
                                                <br>2. จำกัดขนาดไฟล์ไม่เกิน 500kb/ไฟล์
                                                <br>3. รองรับไฟล์ Excel ที่มีนามสกุล .xls เท่านั้น
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>เลือกไฟล์ Excel เพื่อนำเข้าข้อสอบ (นามสกุล .xls เท่านั้น)</label>
                                            <input type="file" class="form-control" id="file_excel" name="file_excel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="excel_data">
                                    <i class=" fas fa-file-import"></i> นำข้อมูลเข้า
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-3">
                    <input type="text" name="title" class="form-control" onclick="showToolbar(this)" placeholder="ตั้งชื่อหัวข้อสอบ" required>
                </div>

                <div class="mt-3 mb-2">
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="รายละเอียดแบบทดสอบ"></textarea>
                </div>
                <!-- แสดงข้อมูล excel -->
                <div id="excel_display_area" class="mt-4"></div>

                <div class="question-box mb-4">
                    <div class="row mt-3 mb-3">
                        <div class="col-10">
                            <label for="title">ตั้งคำถาม:<span class="text-danger">*</span></label>
                            <input type="text" name="question" class="form-control" placeholder="เพิ่มคำถาม ?" onclick="showToolbar(this)">
                            <span class="text-danger required-asterisk" style="display: none;">*</span>
                        </div>
                        <div class="col-2 d-flex align-items-end justify-content-start">
                            <label for="question_image" id="question_image_label" class="btn btn-outline-primary">
                                <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                            </label>
                            <input type="file" id="question_image" class="d-none" onchange="previewImage(this, 'question')">
                        </div>
                    </div>
                    <!-- Show image -->
                    <div class="mb-4" id="showimage"></div>
                    <!-- ตัวเลือก -->
                    <div id="options-container" class="mb-4 options-container">
                        <!-- ตัวเลือกตัวอย่าง -->
                        <div class="row align-items-center mb-2 g-2">
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            </div>
                            <div class="col-auto">
                                <label for="option_image_1" class="btn btn-outline-primary d-flex align-items-center">
                                    <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                                </label>
                                <input type="file" id="option_image_1" class="d-none" onchange="previewImage(this, 'option')">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="ตัวเลือกที่ 1">
                            </div>
                            <div class="col-auto">
                                <button class="btn" onclick="removeOption(this)" title="ลบตัวเลือก">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- ปุ่มเพิ่มตัวเลือก -->
                    <div class="mb-4">
                        <button class="btn default" onclick="addOption(this)"><i class="fas fa-plus"></i> <u>เพิ่มตัวเลือก</u></button>
                    </div>
                    <hr>

                    <!-- funtion -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 d-flex align-items-center">
                                <button class="btn btn-secondary me-2" onclick="addNewQuestion()" title="เพิ่มคำถาม">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                                <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- บันทึก -->
        <div class="row text-end p-3">
            <div class="col-12 mb-2">
                <button class="btn btn-success" onclick="window.location.href='examgroup_maincontent.php'">
                    <i class="fas fa-save"></i> บันทึก
                </button>
                <button class="btn btn-secondary" onclick="window.location.href='examgroup_maincontent.php'">
                    <i class="fas fa-times"></i> ยกเลิก
                </button>

            </div>
        </div>

        <!-- Preview Modal -->
        <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="previewModalLabel">แสดงตัวอย่าง</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="previewContent">
                        <!-- แสดงเนื้อหา -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

<script>
    // นำเข้าไฟล์ excel
    const file_excel = document.getElementById('file_excel');
    const previewContent = document.getElementById('previewContent');

    file_excel.addEventListener('change', (event) => {
        if (!['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'].includes(event.target.files[0].type)) {
            alert('อนุญาตเฉพาะไฟล์ .xlsx หรือ .xls เท่านั้น');
            file_excel.value = '';
            return;
        }

        var reader = new FileReader();
        reader.readAsArrayBuffer(event.target.files[0]);

        reader.onload = function() {
            var data = new Uint8Array(reader.result);
            var work_book = XLSX.read(data, {
                type: 'array'
            });
            var sheet_name = work_book.SheetNames[0];
            var sheet_data = XLSX.utils.sheet_to_json(work_book.Sheets[sheet_name], {
                header: 1
            });

            if (sheet_data.length > 0) {
                var table_output = '<table class="table table-striped table-bordered">';
                for (var row = 0; row < sheet_data.length; row++) {
                    table_output += '<tr>';
                    for (var cell = 0; cell < sheet_data[row].length; cell++) {
                        if (row === 0) {
                            table_output += '<th>' + sheet_data[row][cell] + '</th>';
                        } else {
                            table_output += '<td>' + sheet_data[row][cell] + '</td>';
                        }
                    }
                    table_output += '</tr>';
                }
                table_output += '</table>';

                // แสดงผลในพื้นที่ข้างนอก modal
                document.getElementById('excel_display_area').innerHTML = table_output;

                // ปิด modal หลังนำเข้าข้อมูล
                const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
                modal.hide();
            }

            // รีเซ็ตค่าของ input file
            file_excel.value = '';
        };
    });


    // เพิ่มตัวเลือก
    function addOption(button) {
        const questionBox = button.closest('.question-box');
        const optionsContainer = questionBox.querySelector('.options-container');

        if (optionsContainer.children.length >= 4) {
            Swal.fire({
                allowOutsideClick: false,
                icon: 'warning',
                title: 'เพิ่มตัวเลือกได้สูงสุด 4 ตัวเลือก',
                confirmButtonText: 'ตกลง',
                confirmButtonColor: 'green'
            });
            return;
        }
        const optionDiv = document.createElement('div');
        optionDiv.classList.add('row', 'align-items-center', 'mb-2', 'g-2');
        optionDiv.innerHTML = `
            <div class="col-auto">
                <input class="form-check-input" type="radio" name="exampleRadios" value="option${optionsContainer.children.length + 1}">
            </div>
            <div class="col-auto">
                <label for="option_image_${optionsContainer.children.length + 1}" class="btn btn-outline-primary d-flex align-items-center">
                    <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                </label>
                <input type="file" id="option_image_${optionsContainer.children.length + 1}" class="d-none" onchange="previewImage(this, 'option')">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="ตัวเลือกที่ ${optionsContainer.children.length + 1}">
            </div>
            <div class="col-auto">
                <button class="btn" onclick="removeOption(this)" title="ลบตัวเลือก">
                    <i class="fas fa-times"></i>
                </button>
            </div>`;
        optionsContainer.appendChild(optionDiv);
    }
    // ลบตัวเลือก
    function removeOption(button) {
        const optionDiv = button.closest('.row');
        optionDiv.remove();
    }


    // ฟังก์ชันเพิ่มคำถาม
    function addNewQuestion() {
        const questionBoxes = document.querySelectorAll('.question-box');
        if (questionBoxes.length >= 5) {
            Swal.fire({
                allowOutsideClick: false,
                icon: 'warning',
                title: 'เพิ่มคำถามได้สูงสุด 5 ข้อ',
                confirmButtonText: 'ตกลง',
                confirmButtonColor: 'green'
            });
            return;
        }

        const questionBox = document.querySelector('.question-box');
        const clone = questionBox.cloneNode(true);

        // รีเซ็ตค่าของ input และ textarea
        clone.querySelectorAll('input[type="text"], textarea').forEach(input => input.value = '');
        clone.querySelectorAll('input[type="radio"]').forEach(radio => radio.checked = false);
        clone.querySelectorAll('.option-image-preview').forEach(preview => preview.remove());
        clone.querySelectorAll('#showimage').forEach(showimage => showimage.innerHTML = '');

        // สร้าง unique ID สำหรับคำถามใหม่
        const uniqueId = `question-${Date.now()}`;
        const questionInput = clone.querySelector('input[name="question"]');
        const questionImageInput = clone.querySelector('#question_image');
        const questionImageLabel = clone.querySelector('#question_image_label');
        const showImageDiv = clone.querySelector('#showimage');

        // อัปเดต ID และการเชื่อมโยงของ label กับ input
        questionInput.setAttribute('id', `${uniqueId}-input`);
        questionImageInput.setAttribute('id', `${uniqueId}-image`);
        questionImageLabel.setAttribute('for', `${uniqueId}-image`);
        showImageDiv.setAttribute('id', `${uniqueId}-showimage`);

        // อัปเดต ID ของตัวเลือกทั้งหมดภายในคำถามใหม่
        const options = clone.querySelectorAll('.options-container .row');
        options.forEach((option, index) => {
            const optionImageInput = option.querySelector('input[type="file"]');
            const optionImageLabel = option.querySelector('label');
            const optionImagePreview = option.querySelector('.option-image-preview');

            // อัปเดต ID และ for ให้ไม่ซ้ำ
            const optionUniqueId = `${uniqueId}-option-${index + 1}`;
            optionImageInput.setAttribute('id', optionUniqueId);
            optionImageLabel.setAttribute('for', optionUniqueId);

            // ลบ preview ของรูปภาพ 
            if (optionImagePreview) optionImagePreview.remove();
        });

        // เพิ่มคำถามใหม่หลังคำถามล่าสุด
        const lastQuestionBox = document.querySelector('.question-box:last-child');
        lastQuestionBox.parentNode.insertBefore(clone, lastQuestionBox.nextSibling);
    }

    // ฟังก์ชันสำหรับการลบคำถาม
    function removeQuestion(button) {
        const questionBox = button.closest('.question-box');
        questionBox.remove();
    }

    // แสดงตัวอย่าง
    function previewExam() {
        const title = document.querySelector('input[name="title"]').value;
        const description = document.querySelector('textarea[name="description"]').value;

        const questionBoxes = document.querySelectorAll('.question-box');

        let previewContent = `<h3>${title}</h3><p>${description}</p>`;

        questionBoxes.forEach((box, index) => {
            const question = box.querySelector('input[name="question"]').value;
            const questionImagePreview = box.querySelector('#showimage img');
            const questionImageHtml = questionImagePreview ? `<div><img src="${questionImagePreview.src}" class="img-thumbnail" style="max-width: 200px; margin: 5px;"></div>` : '';
            const options = box.querySelectorAll('.options-container .row');
            previewContent += `${questionImageHtml}<p>ข้อที่ ${index + 1} : ${question}</p><ul>`;
            options.forEach((option, optIndex) => {
                const optionText = option.querySelector('input[type="text"]').value;
                const optionImagePreview = option.querySelector('.option-image-preview img');
                const optionImageHtml = optionImagePreview ? `<div><img src="${optionImagePreview.src}" class="img-thumbnail" style="max-width: 50px; margin-top: 5px;"></div>` : '';
                previewContent += `<input type="radio" name="previewQuestion${index}" value="option${optIndex}"> ${optionText} ${optionImageHtml}`;
            });
            previewContent += `</ul>`;
        });

        document.getElementById('previewContent').innerHTML = previewContent;
    }

    function previewImage(input, type) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                let imageContainer;
                if (type === 'question') {
                    imageContainer = input.closest('.question-box').querySelector('#showimage');
                    imageContainer.innerHTML = ''; // Clear existing content
                } else if (type === 'option') {
                    const optionRow = input.closest('.row');
                    imageContainer = optionRow.querySelector('.option-image-preview');
                    if (!imageContainer) {
                        imageContainer = document.createElement('div');
                        imageContainer.classList.add('option-image-preview', 'mt-2');
                        optionRow.appendChild(imageContainer);
                    }
                    imageContainer.innerHTML = ''; // Clear existing content
                }

                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.classList.add('img-thumbnail');
                imgElement.style.maxWidth = type === 'question' ? '200px' : '100px';

                const removeButton = document.createElement('button');
                removeButton.classList.add('btn', 'btn-danger', 'btn-sm', 'ms-2');
                removeButton.innerText = 'ลบ';
                removeButton.onclick = function() {
                    if (confirm('ต้องการลบรูปภาพนี้หรือไม่?')) {
                        imgElement.remove();
                        removeButton.remove();
                        input.value = ''; // Clear the input value
                    }
                };

                imageContainer.appendChild(imgElement);
                imageContainer.appendChild(removeButton);
            };
            reader.readAsDataURL(file);
        }
    }

    function toggleRequired(checkbox) {
        const questionBox = checkbox.closest('.question-box');
        const requiredAsterisk = questionBox.querySelector('.required-asterisk');
        if (checkbox.checked) {
            requiredAsterisk.style.display = 'inline';
        } else {
            requiredAsterisk.style.display = 'none';
        }
    }
</script>
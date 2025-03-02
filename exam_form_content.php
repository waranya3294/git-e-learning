<div class="container-fluid mt-4 mb-4 px-4">
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row ">
                <div class="col-12 mb-4" style="color: #18B0BD;">
                    <h1 class="display-4"> บันทึกข้อสอบ</h1>
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
                                <div class="card border border-warning mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-custom alert-outline-warning" role="alert">
                                                    <div class="alert-text">
                                                        <h4 class="text-warning">วิธีการนำเข้าไฟล์คำถาม</h4>
                                                        1. ใช้แบบฟอร์ม (Template) ที่กำหนดให้เท่านั้น
                                                        <span id="downloadBtn" class="badge text-bg-primary" style="cursor: pointer;">คลิกเพื่อดาวน์โหลด Template</span>
                                                        <br>2. ไม่รองรับรูปภาพและวิดีโอในไฟล์ Excel
                                                        <br>3. คำถามที่ไม่มีตัวเลือกจะกลายเป็นคำถามถูก/ผิด หากคุณเพิ่มคำถามแต่ไม่ได้ระบุตัวเลือกคำตอบ ระบบจะถือว่าคำถามนั้นเป็นคำถามแบบถูกหรือผิดโดยอัตโนมัติ
                                                        <br>4. รองรับไฟล์ Excel (.xlsx) เท่านั้น
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>เลือกไฟล์ Excel เพื่อนำเข้าข้อสอบ (นามสกุล .xlsx เท่านั้น)</label>
                                    <input type="file" class="form-control" id="file_excel" name="file_excel" accept=".xls">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success " id="file_data">
                                    <i class=" fas fa-file-import"></i> นำข้อมูลเข้า
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-3">
                    <select class="form-select" id="Position" name="Position">
                        <option selected>--เลือกชื่อหัวข้อสอบ--</option>
                        <option value="Position1">ประเภทงานสี</option>
                        <option value="Position2">ประเภทงานเชื่อม</option>
                        <option value="Position3">ประเภทงานประกอบ</option>
                        <option value="Position4">ประเภทงาน CNC</option>
                    </select>
                </div>

                <div class="mt-3 mb-2">
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="คำชี้แจงแบบทดสอบ"></textarea>
                </div>
                <!-- แสดงข้อมูล excel -->
                <div id="excel_display_area" class="mt-4"></div>

                <div class="question-box mb-4">
                    <div class="row mt-3 mb-3">
                        <label for="title">ตั้งคำถาม:<span class="text-danger">*</span></label>
                        <div class="col-10">
                            <input type="text" id="question-box" name="question" class="form-control" placeholder="เพิ่มคำถาม ?" onclick="showToolbar(this)">
                            <span class="text-danger required-asterisk" style="display: none;">*</span>
                        </div>
                        <div class="col-2 d-flex align-items-end justify-content-start">
                            <label for="question_image" id="question_image_label" class="btn btn-outline-primary" accept=".jpg, .jpeg, .png">
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
                        <div class="row d-flex align-items-center justify-content-center mb-2 g-2">
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="exampleModal" id="exampleModal1" value="option1" checked>
                            </div>
                            <div class="col-auto">
                                <label for="option_image_1" class="btn btn-outline-primary d-flex align-items-center">
                                    <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                                </label>
                                <input type="file" id="option_image_1" class="d-none" onchange="previewImage(this, 'option')">
                            </div>
                            <div class="col-auto flex-grow-1">
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
            <div class="modal-dialog modal-xl">
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

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
    // ดาวน์โหลด template
    document.getElementById('downloadBtn').addEventListener('click', () => {
        // สร้างข้อมูลสำหรับเทมเพลต
        const templateData = [
            ['ประเภท', 'ข้อ', 'คำถาม', 'คำตอบที่ผิด', 'คำตอบที่ผิด', 'คำตอบที่ผิด', 'คำตอบที่ถูกต้อง'],
            ['ปรนัย', '1', 'การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร', 'ป้องกันพื้นผิวจากความร้อน', 'เพิ่มการยึดเกาะของสี', 'ลดระยะเวลาในการพ่นสี', 'ทำให้สีแห้งเร็วขึ้น'],
            ['ถูก/ผิด', '2', 'น้ำเป็นของเหลวที่ไม่มีสี', 'ถูก', 'ผิด', '', '']
        ];

        const worksheet = XLSX.utils.aoa_to_sheet(templateData);
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, 'Template');
        XLSX.writeFile(workbook, 'template.xlsx');
    });
    document.getElementById('file_excel').addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (!file) return;

        if (file.type !== 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
            alert('อนุญาตเฉพาะไฟล์ .xlsx เท่านั้น');
            event.target.value = '';
            return;
        }

        const reader = new FileReader();
        reader.readAsArrayBuffer(file);

        reader.onload = function() {
            const data = new Uint8Array(reader.result);
            const workbook = XLSX.read(data, {
                type: 'array'
            });
            const sheetName = workbook.SheetNames[0];
            const sheet = workbook.Sheets[sheetName];

            // ตรวจสอบว่ามีรูปภาพหรือออบเจ็กต์อยู่ในไฟล์หรือไม่
            if (sheet['!objects'] && sheet['!objects'].length > 0) {
                alert('ไม่สามารถนำเข้าไฟล์นี้ได้ เนื่องจากมีรูปภาพหรือวีดีโออยู่ในข้อสอบ');
                event.target.value = ''; // รีเซ็ตค่าอัปโหลด
                return;
            }

            // แปลงข้อมูลเป็น JSON
            const sheetData = XLSX.utils.sheet_to_json(sheet, {
                header: 1
            });

            if (sheetData.length > 1) {
                let listOutput = '<div class="list-group">';
                for (let row = 1; row < sheetData.length; row++) {
                    const type = sheetData[row][0] || '';
                    const question = sheetData[row][2] || '';
                    let hasOptions = false;
                    let hasImageOrVideo = false;

                    // ตรวจสอบว่ามีรูปภาพในคำถามหรือไม่
                    if (question && (question.includes('http') || question.includes('.jpg') || question.includes('.png') || question.includes('.mp4'))) {
                        hasImageOrVideo = true;
                    }

                    // ตรวจสอบว่ามีรูปภาพในตัวเลือกหรือไม่
                    for (let cell = 3; cell <= 6; cell++) {
                        const option = sheetData[row][cell];
                        if (option && (option.includes('http') || option.includes('.jpg') || option.includes('.png') || option.includes('.mp4'))) {
                            hasImageOrVideo = true;
                        }
                        if (option) hasOptions = true;
                    }

                    // ถ้ามีรูปภาพหรือวีดีโอในคำถามหรือในตัวเลือก ให้ข้ามข้อนี้
                    if (hasImageOrVideo) {
                        continue; // ข้ามการเพิ่มข้อมูลข้อสอบนี้
                    }

                    listOutput += '<div class="list-group-item">';
                    listOutput += `<h5>ข้อที่ ${row}: ${question}</h5>`;
                    listOutput += '<ul>';

                    if (type === 'ปรนัย' || type === '') {
                        for (let cell = 3; cell <= 6; cell++) {
                            if (sheetData[row][cell]) {
                                listOutput += `<ul><label><input type="radio" name="question${row}" class="me-2"> ${sheetData[row][cell]}</label></ul>`;
                            }
                        }
                    }

                    if (type === 'ถูก/ผิด' || (!hasOptions && type === '')) {
                        listOutput += `<ul><label><input type="radio" name="question${row}" class="me-2"> ถูก</label></ul>`;
                        listOutput += `<ul><label><input type="radio" name="question${row}" class="me-2"> ผิด</label></ul>`;
                    }

                    listOutput += '</ul></div>';
                }
                listOutput += '</div>';

                document.getElementById('excel_display_area').innerHTML = listOutput;
            }

            event.target.value = ''; // รีเซ็ตค่าอัปโหลดไฟล์
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
                confirmButtonColor: 'green',
            });
            return;
        }

        const optionId = `${Date.now()}-${Math.random()}`; // สร้าง ID แบบไม่ซ้ำ
        const optionDiv = document.createElement('div');
        optionDiv.classList.add('row', 'align-items-center', 'mb-2', 'g-2');
        optionDiv.innerHTML = `
    <div class="col-auto">
        <input class="form-check-input" type="radio" name="exampleModal" value="${optionId}">
    </div>
    <div class="col-auto">
        <label for="option_image_${optionId}" class="btn btn-outline-primary d-flex align-items-center">
            <i class="bi bi-image" title="แทรกรูปภาพ"></i>
        </label>
        <input type="file" id="option_image_${optionId}" class="d-none" onchange="previewImage(this, 'option')">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="ตัวเลือกที่ ${optionsContainer.children.length +1}">
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

    // เพิ่มคำถามใหม่
    function addNewQuestion() {
        const questionContainer = document.querySelector('.question-box').parentNode;
        const questionBoxes = questionContainer.querySelectorAll('.question-box');

        const newQuestionBox = document.createElement('div');
        newQuestionBox.classList.add('question-box', 'mb-4');
        newQuestionBox.innerHTML = `
    <div class="row mt-3 mb-3">
        <label for="title">ตั้งคำถาม:<span class="text-danger">*</span></label>
        <div class="col-10">
            <input type="text" name="question" class="form-control" placeholder="เพิ่มคำถาม ?" onclick="showToolbar(this)">
        </div>
        <div class="col-2 d-flex align-items-end justify-content-start">
            <label for="question_image_${questionBoxes.length + 1}" class="btn btn-outline-primary">
                <i class="bi bi-image" title="แทรกรูปภาพ"></i>
            </label>
            <input type="file" id="question_image_${questionBoxes.length + 1}" class="d-none" onchange="previewImage(this, 'question')">
        </div>
    </div>
    <div class="mb-4" id="showimage"></div>
    <div id="options-container" class="mb-4 options-container">
        <div class="row d-flex align-items-center mb-2 g-2">
            <div class="col-auto">
                <input class="form-check-input" type="radio" name="exampleModal_${questionBoxes.length + 1}" value="option1" checked>
            </div>
            <div class="col-auto">
                <label for="option_image_${questionBoxes.length + 1}_1" class="btn btn-outline-primary d-flex align-items-center">
                    <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                </label>
                <input type="file" id="option_image_${questionBoxes.length + 1}_1" class="d-none" onchange="previewImage(this, 'option')">
            </div>
            <div class="col flex-grow-1">
                <input type="text" class="form-control" placeholder="ตัวเลือกที่ 1">
            </div>
            <div class="col-auto">
                <button class="btn" onclick="removeOption(this)" title="ลบตัวเลือก">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <button class="btn btn-default" onclick="addOption(this)"><i class="fas fa-plus"></i> เพิ่มตัวเลือก</button>
    <hr>
    
    <button class="btn btn-danger" onclick="removeQuestion(this)" title="นำออก"><i class="bi bi-trash"></i></button>
    `;
        questionContainer.appendChild(newQuestionBox);


    }

    function removeQuestion(button) {
        Swal.fire({
            title: "คุณต้องการลบข้อมูลนี้หรือไม่?",
            icon: "warning",
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonColor: "#d33",
            confirmButtonText: "ใช่",
            cancelButtonText: "ไม่ใช่",
        }).then((result) => {
            if (result.isConfirmed) {
                // ลบเฉพาะเมื่อผู้ใช้กดยืนยัน
                const questionBoxDiv = button.closest('.question-box');
                questionBoxDiv.remove();
                Swal.fire({
                    title: "ลบข้อมูลเรียบร้อยแล้ว",
                    icon: "success",
                    timer: 1500,
                    showConfirmButton: false,
                });
            }
        });
    }


    // แสดงตัวอย่าง
    function previewExam() {
        const selectedTopic = document.querySelector('#Position').value;
        const description = document.querySelector('textarea[name="description"]').value.trim();
        const questionBoxes = document.querySelectorAll('.question-box');


        const excelDisplayArea = document.getElementById('excel_display_area');
        let previewHtml = '';

        // แสดงหัวข้อที่เลือกก่อน
        if (selectedTopic && selectedTopic !== '--เลือกชื่อหัวข้อสอบ--') {
            previewHtml += `<h3>หัวข้อ: ${document.querySelector(`#Position option[value="${selectedTopic}"]`).text}</h3>`;
        }

        // เพิ่มคำอธิบาย
        previewHtml += `<p>${description}</p>`;


        // ตรวจสอบการแสดงผลข้อมูลจาก Excel
        if (excelDisplayArea && excelDisplayArea.innerHTML.trim()) {
            console.log("Excel Data Loaded:", excelDisplayArea.innerHTML);
            previewHtml += `` + excelDisplayArea.innerHTML;
        } else {
            console.log("Excel Data Missing or Empty");
        }

        // แสดงคำถามที่กรอกในฟอร์ม
        questionBoxes.forEach((box, index) => {
            const question = box.querySelector('input[name="question"]').value.trim();
            const questionImage = box.querySelector('#showimage img');
            const options = box.querySelectorAll('.options-container .row');

            previewHtml += `
             ${questionImage ? `<img src="${questionImage.src}" class="img-thumbnail" style="width: 500px; height:400px;">` : ''}
        <h5 class="mt-3"><b>ข้อที่ ${index + 1}:</b> ${question}</h5>
        <ul>`;

            options.forEach((option, optIndex) => {
                const optionText = option.querySelector('input[type="text"]').value.trim();
                const optionImage = option.querySelector('.option-image-preview img');

                previewHtml += `
                <ul>
                <input type="radio" name="question${index}" id="question${index}-option${optIndex}">
                <label style="font-size:18px;" for="question${index}-option${optIndex}">
                    ${optionText}
                 </label>
                 <ul>
                  ${optionImage ? `<img src="${optionImage.src}" class="img-thumbnail" style="width: 500px; height:400px;">` : ''}
                 </ul>
                
           </ul> `;
            });

            previewHtml += `</ul>`;
        });
        // แสดงผลลัพธ์
        document.getElementById('previewContent').innerHTML = previewHtml;
    }


    function previewImage(input, type) {
        const file = input.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function(e) {
            let imageContainer;

            if (type === 'question') {
                imageContainer = input.closest('.question-box').querySelector('#showimage');
            } else if (type === 'option') {
                const optionRow = input.closest('.row');
                imageContainer = optionRow.querySelector('.option-image-preview');
                if (!imageContainer) {
                    imageContainer = document.createElement('div');
                    imageContainer.classList.add('option-image-preview', 'mt-2');
                    optionRow.appendChild(imageContainer);
                }
            }

            imageContainer.innerHTML = `
            <div class="d-flex align-items-center">
                <img src="${e.target.result}" class="img-thumbnail" style="max-width: 400px; margin-right: 10px;">
                <button class="btn btn-danger btn-sm" onclick="removeImage(this, '${type}')">ลบ</button>
            </div>`;
        };
        reader.readAsDataURL(file);
    }

    function removeImage(button, type) {
        const container = button.closest('.d-flex');
        const inputFile = type === 'question' ?
            container.closest('.question-box').querySelector(`#question_image`) :
            container.closest('.row').querySelector(`input[type="file"]`);

        container.remove();
        inputFile.value = ''; // ล้างค่าของ input file
    }
</script>
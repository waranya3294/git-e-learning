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
                                                        <br>3. คำถามที่ไม่มีตัวเลือกจะถูกกำหนดเป็นคำถามแบบถูก/ผิดโดยอัตโนมัติ
                                                        <br>4. รองรับไฟล์ Excel (.xlsx) เท่านั้น
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>เลือกไฟล์ Excel เพื่อนำเข้าข้อสอบ (นามสกุล .xlsx เท่านั้น)</label>
                                    <input type="file" class="form-control" id="file_excel" name="file_excel" accept=".xlsx">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="file_data">
                                    <i class=" fas fa-file-import"></i> นำข้อมูลเข้า
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-3">
                    <select class="form-select" id="Position">
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

                <div class="question-box mb-4 p-4">
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
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                            </div>
                            <div class="col-auto">
                                <label for="option_image_1" class="btn btn-outline-primary d-flex align-items-center" accept=".jpg, .jpeg, .png">
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
                            <div class="mb-3 d-flex align-items-center ">
                                <button class="btn btn-secondary me-2" id="addNewQuestion" onclick="addNewQuestion()" title="เพิ่มคำถาม">
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
    // ดาวน์โหลด template excel สำหรับลงข้อสอบ
    document.getElementById('downloadBtn').addEventListener('click', () => {
        const templateData = [
            ['ข้อ', 'คำถาม', 'คำตอบที่ถูก', 'คำตอบที่ผิด', 'คำตอบที่ผิด', 'คำตอบที่ผิด'],
            ['1', 'น้ำเป็นของเหลวที่ไม่มีสี', 'ถูก', 'ผิด', '', ''],
            ['2', 'การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร', '1. ป้องกันพื้นผิวจากความร้อน', '2. เพิ่มการยึดเกาะของสี', '3. ลดระยะเวลาในการพ่นสี', '4. ทำให้สีแห้งเร็วขึ้น'],
        ];

        const worksheet = XLSX.utils.aoa_to_sheet(templateData);
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, 'Template');

        // ดาวน์โหลดไฟล์
        XLSX.writeFile(workbook, 'template.xlsx');
    });

    const file_excel = document.getElementById('file_excel');
    const file_data = document.getElementById('file_data');

    // เลือกไฟล์
    file_data.addEventListener('click', () => {
        if (file_excel.files.length === 0) {
            Swal.fire({
                icon: 'warning',
                text: 'กรุณาเลือกไฟล์ Excel ก่อน!',
                confirmButtonText: 'ตกลง',
                confirmButtonColor: 'green'
            });
            return;
        }

        let file = file_excel.files[0];
        let reader = new FileReader();
        reader.readAsArrayBuffer(file);

        reader.onload = function() {
            let data = new Uint8Array(reader.result);
            let workbook = XLSX.read(data, {
                type: 'array'
            });
            let sheetName = workbook.SheetNames[0];
            let sheetData = XLSX.utils.sheet_to_json(workbook.Sheets[sheetName], {
                header: 1,
                raw: false
            });

            if (sheetData.length === 0) {
                Swal.fire({
                    icon: 'warning',
                    text: 'ไฟล์ที่อัปโหลดไม่มีข้อมูล',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: 'green'
                });
                return;
            }

            // ตรวจสอบโครงสร้างของ Template
            const requiredHeaders = ['ข้อ', 'คำถาม', 'คำตอบที่ถูก', 'คำตอบที่ผิด', 'คำตอบที่ผิด', 'คำตอบที่ผิด'];
            const fileHeaders = sheetData[0].map(header => header.trim());
            const isTemplateValid = requiredHeaders.every((header, index) => fileHeaders[index] === header);

            if (!isTemplateValid) {
                Swal.fire({
                    icon: 'error',
                    text: 'โครงสร้างไฟล์ไม่ตรงกับรูปแบบที่กำหนด!',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: 'red',
                });
                return;
            }

            let list_output = '<div class="list-group">';
            let newRowIndex = 1;

            for (let row = 1; row < sheetData.length; row++) {
                let question = sheetData[row][1];
                // ข้ามแถวที่มีรูปภาพหรือไม่มีคำถาม
                if (typeof question !== 'string' || !question.trim()) {
                    Swal.fire({
                        icon: 'info',
                        text: `ข้อที่ ${row} ไม่สามารถเพิ่มรูปภาพได้ กรุณาเพิ่มคำถามในระบบ`,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: 'green',
                    });
                    continue;
                }

                list_output += `
                <div class="list-group-item border-0">
                <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-10 col-sm-12 border-0">
                <h5 class="mb-0">
                    <span class="question-text" >ข้อที่ ${newRowIndex}  ${question}</span>
                    <input type="text" class="edit-question d-none form-control border-0" style="font-size:20px;"value="ข้อที่ ${newRowIndex} ${question}">
                </h5>
               </div>
                <div class="col text-end" id="editQuestion">
    <button class="btn btn-warning btn-sm edit-btn" onclick="editQuestion(this)">
        <i class="bi bi-pencil-square" style="color:white"></i>
    </button>
    <button class="btn btn-success btn-sm save-btn d-none" onclick="saveQuestion(this)">บันทึก</button>
</div>

            </div>
            <ul class="options-list">
    `;

                let hasOptions = false;
                let optionCount = 1; // นับจำนวนตัวเลือก

                for (let cell = 2; cell <= 5; cell++) { // เริ่มจากคอลัมน์ที่ 2 ถึง 5
                    if (sheetData[row][cell]) { // ถ้ามีข้อมูลในเซลล์
                        let isCorrect = (cell === 2); // คิดว่าเซลล์ที่ 2 เป็นคำตอบที่ถูกต้อง
                        let highlightClass = isCorrect ? 'style="color: green; font-weight: bold;"' : ''; // ทำให้คำตอบถูกต้องโดดเด่น
                        let checkedAttr = isCorrect ? 'checked' : ''; // ถ้าเป็นคำตอบที่ถูกต้อง ให้ตั้งค่า checked
                        let optionId = `option_${newRowIndex}_${optionCount}`; // สร้าง ID สำหรับตัวเลือก
                        let imageId = `option_image_${newRowIndex}_${optionCount}`; // สร้าง ID สำหรับรูปภาพ

                        list_output += `
        <div class="option-container">
            <ul class="d-flex align-items-center p-0 m-0 mt-2">
                <label ${highlightClass}  class="d-flex align-items-center w-100 option-label">
                    <div class="d-flex align-items-center flex-grow-1">
                        <input type="radio" name="q${newRowIndex}" class="me-2 option-radio" ${checkedAttr} onchange="updateCorrectAnswer(this)">
                        <span class="option-text ms-2"></span>
                        <input type="text" class="edit-option form-control w-100 ms-2 border-0" value="${sheetData[row][cell]}">
                    </div>
                    
                    <div class="delete ms-2 ">
                        <button class="btn delete-btn d-none" onclick="removeOption(this)" title="ลบตัวเลือก">
                            <i class="fas fa-times text-danger"></i>
                        </button>
                    </div>
                </label>
            </ul>
        </div>
        `;
                        hasOptions = true; // บอกว่าเลือกตัวเลือกแล้ว
                        optionCount++; // เพิ่มตัวนับตัวเลือก
                    }
                }
                //ถ้าลงข้อสอบมาแค่คำถาม ข้อนั้นจะเป็นข้อถูก/ผิด ทันที
                if (!hasOptions) {
                    list_output += `
             <ul class="d-flex align-items-center p-0">
                <input type="radio" name="q${newRowIndex}">
                <span class="option-text flex-grow-1 ms-2" style="font-size:18px;">ถูก</span>
                <input type="text" class="edit-option d-none form-control w-100" value="ถูก">
                <button class="btn ms-2 d-none" onclick="removeOption(this)"  title="ลบตัวเลือก">
                <i class="fas fa-times text-danger"></i>
            </button>
            </ul>
            <ul class="d-flex align-items-center mt-2 p-0">
                <input type="radio" name="q${newRowIndex}">
                <span class="option-text flex-grow-1 ms-2" style="font-size:18px;">ผิด</span>
                <input type="text" class="edit-option d-none form-control w-100" value="ผิด">
            <button class="btn ms-2 d-none" onclick="removeOption(this)"  title="ลบตัวเลือก">
                <i class="fas fa-times text-danger"></i>
            </button>
            </ul>
        `;
                }

                list_output += `
            </ul>
        </div>
    `;
                newRowIndex++;
            }
            list_output += '</div>';
            document.getElementById('excel_display_area').innerHTML = list_output;
            // $(".edit-btn, .delete-btn").addClass("d-none");
            // $("#editQuestion").addClass("d-none");


            // ปิด modal หลังจากนำเข้าข้อมูลเสร็จ
            const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
            modal.hide();
            // ซ่อนปุ่ม "ลบ"


            // รีเซ็ต input file
            file_excel.value = '';
        };
    });

    function editQuestion(button) {
        const questionContainer = button.closest('.list-group-item');

        // ซ่อนข้อความเดิม แล้วแสดงช่องแก้ไข
        questionContainer.querySelector('.question-text').classList.add('d-none');
        questionContainer.querySelector('.edit-question').classList.remove('d-none');

        // ซ่อนข้อความตัวเลือก แล้วแสดงช่องแก้ไข
        questionContainer.querySelectorAll('.option-text').forEach(el => el.classList.add('d-none'));
        questionContainer.querySelectorAll('.edit-option').forEach(el => el.classList.remove('d-none'));

        // เปลี่ยนปุ่ม "แก้ไข" เป็น "บันทึก"
        button.classList.add('d-none');
        questionContainer.querySelector('.save-btn').classList.remove('d-none');

        // แสดงปุ่ม "ลบ"
        questionContainer.querySelectorAll('.delete-btn').forEach(btn => btn.classList.remove('d-none'));
    }

    function saveQuestion(button) {
        const questionContainer = button.closest('.list-group-item');

        // อัปเดตค่าที่แก้ไข
        const newQuestionText = questionContainer.querySelector('.edit-question').value;
        questionContainer.querySelector('.question-text').textContent = newQuestionText;

        questionContainer.querySelectorAll('.edit-option').forEach((input, index) => {
            const optionText = questionContainer.querySelectorAll('.option-text')[index];
            optionText.textContent = input.value;

            // อัปเดตการไฮไลท์ตัวเลือกที่ถูกต้อง
            if (questionContainer.querySelectorAll('.option-radio')[index].checked) {
                optionText.style.color = 'green';
                optionText.style.fontWeight = 'bold';
            } else {
                optionText.style.color = 'black';
                optionText.style.fontWeight = '';
            }
        });

        // ซ่อนช่องแก้ไข แล้วแสดงข้อความเดิมที่อัปเดตใหม่
        questionContainer.querySelector('.question-text').classList.remove('d-none');
        questionContainer.querySelector('.edit-question').classList.add('d-none');

        questionContainer.querySelectorAll('.option-text').forEach(el => el.classList.remove('d-none'));
        questionContainer.querySelectorAll('.edit-option').forEach(el => el.classList.add('d-none'));

        // ซ่อนปุ่ม "ลบ"
        questionContainer.querySelectorAll('.delete-btn').forEach(btn => btn.classList.add('d-none'));

        // เปลี่ยนปุ่ม "บันทึก" กลับเป็น "แก้ไข"
        button.classList.add('d-none');
        questionContainer.querySelector('.edit-btn').classList.remove('d-none');
    }

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
            <input class="form-check-input" type="radio" name="inlineRadioOptions" value="${optionId}" >
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
        Swal.fire({
            title: "คุณต้องการลบตัวเลือกนี้หรือไม่?",
            icon: "warning",
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonColor: "#d33",
            confirmButtonText: "ใช่",
            cancelButtonText: "ไม่ใช่",
        }).then((result) => {
            if (result.isConfirmed) {
                const optionContainer = button.closest('.option-container');
                if (optionContainer) {
                    optionContainer.remove();
                }
            }
            const optionDiv = button.closest('.row');
            optionDiv.remove();
        });
    }


    // เพิ่มคำถามใหม่
    function addNewQuestion() {
        const questionContainer = document.querySelector('.question-box').parentNode;
        const questionBoxes = questionContainer.querySelectorAll('.question-box');
        // $('#addNewQuestion').addClass('d-none');

        // ซ่อนปุ่ม "เพิ่มคำถาม" ของข้อก่อนหน้า
        if (questionBoxes.length > 0) {
            const lastQuestionBox = questionBoxes[questionBoxes.length - 1];
            const addButton = lastQuestionBox.querySelector('#addNewQuestion');
            if (addButton) {
                addButton.classList.add('d-none'); // ซ่อนปุ่ม
            }
        }
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
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" checked>
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
                <button class="btn d-none" onclick="removeOption(this)" title="ลบตัวเลือก">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <button class="btn btn-default" onclick="addOption(this)"><i class="fas fa-plus"></i> เพิ่มตัวเลือก</button>
    
    <hr>
    <div class="mb-3 d-flex align-items-center">
        <button class="btn btn-secondary me-2" id="addNewQuestion" onclick="addNewQuestion()" title="เพิ่มคำถาม">
            <i class="bi bi-plus-circle"></i>
        </button>
        <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
            <i class="bi bi-trash"></i></button>
    </div>
    `;
        questionContainer.appendChild(newQuestionBox);
    }

    //ลบคำถาม
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
        // $('#addNewQuestion').removeClass('d-none');

    }
    // แสดงปุ่มแก้ไขและลบหลังจากโหลดข้อมูลจาก Excel
    function loadExcelData() {
        const excelDisplayArea = document.getElementById('excel_display_area');

        if (excelDisplayArea && excelDisplayArea.innerHTML.trim()) {
            console.log("Excel Data Loaded:", excelDisplayArea.innerHTML);

            // ทำให้ปุ่มแก้ไขและลบกลับมาแสดงผล
            document.querySelectorAll('.edit-btn, .delete-btn').forEach(btn => {
                btn.classList.remove("d-none"); // แสดงปุ่ม
            });
        } else {
            console.log("Excel Data Missing or Empty");
        }
    }

    // ฟังก์ชันดูตัวอย่างข้อสอบ
    function previewExam() {
        const selectedTopic = document.querySelector('#Position').value;
        const description = document.querySelector('textarea[name="description"]').value.trim();
        const questionBoxes = document.querySelectorAll('.question-box');
        const excelDisplayArea = document.getElementById('excel_display_area');

        let previewHtml = '';

        // แสดงหัวข้อที่เลือกก่อน
        if (selectedTopic && selectedTopic !== '--เลือกชื่อหัวข้อสอบ--') {
            previewHtml += `<h4> ${document.querySelector(`#Position option[value="${selectedTopic}"]`).text}</h4>`;
        }

        // เพิ่มคำอธิบาย
        previewHtml += `<p>${description}</p>`;

        // ตรวจสอบการแสดงผลข้อมูลจาก Excel
        if (excelDisplayArea && excelDisplayArea.innerHTML.trim()) {
            console.log("Excel Data Loaded:", excelDisplayArea.innerHTML);
            previewHtml += excelDisplayArea.innerHTML;
        } else {
            console.log("Excel Data Missing or Empty");
        }

        // แสดงคำถามที่กรอกในฟอร์ม
        questionBoxes.forEach((box, index) => {
            const question = box.querySelector('input[name="question"]').value.trim();
            const questionImage = box.querySelector('#showimage img');
            const options = box.querySelectorAll('.options-container .row');

            previewHtml += `
            ${questionImage ? `<img src="${questionImage.src}" class="img-thumbnail" style="width: 300px; height:200px;">` : ''}
            <h5 class="mt-3">ข้อที่ ${question}</h5>
            <ul>`;

            options.forEach((option, optIndex) => {
                const optionText = option.querySelector('input[type="text"]').value.trim();
                const optionImage = option.querySelector('.option-image-preview img');
                const isChecked = option.querySelector('input[type="radio"]').checked;

                previewHtml += `
                <ul class="p-0">
                    <input type="radio" name="question${index}" id="question${index}-option${optIndex}" ${isChecked ? 'checked' : ''}>
                    <label style="font-size:20px;" for="question${index}-option${optIndex}">
                        ${optionText}
                    </label>
                    <ul>
                        ${optionImage ? `<img src="${optionImage.src}" class="img-thumbnail" style="width: 300px; height:200px;">` : ''}
                    </ul>
                </ul>`;
            });

            previewHtml += `</ul>`;
        });

        // แสดงผลลัพธ์
        document.getElementById('previewContent').innerHTML = previewHtml;
    }

    //แสดงรูปภาพ
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
                    imageContainer.classList.add('option-image-preview', 'm-0', );
                    optionRow.appendChild(imageContainer);
                }
            }

            imageContainer.innerHTML = `
            <div class="d-flex align-items-center mt-2">
                <img src="${e.target.result}" class="img-thumbnail" style="max-width: 400px; margin-right: 10px;">
                <button class="btn btn-danger btn-sm" onclick="removeImage(this, '${type}')">ลบ</button>
            </div>`;
        };
        reader.readAsDataURL(file);

    }

    function removeImage(button, type) {
        Swal.fire({
            title: "คุณต้องการลบรูปภาพนี้หรือไม่?",
            icon: "warning",
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonColor: "#d33",
            confirmButtonText: "ใช่",
            cancelButtonText: "ไม่ใช่",
        }).then((result) => {
            if (result.isConfirmed) {
                const container = button.closest('.d-flex');
                const imageContainer = button.closest('.option-image-preview');

                if (imageContainer) {
                    imageContainer.remove();
                }

                if (container) {
                    container.remove();
                }

                const inputFile = type === 'question' ?
                    container?.closest('.question-box')?.querySelector(`#question_image`) :
                    container?.closest('.row')?.querySelector(`input[type="file"]`);

                if (inputFile) {
                    inputFile.value = ''; // ล้างค่าของ input file
                }

                Swal.fire({
                    title: "ลบรูปภาพเรียบร้อยแล้ว",
                    icon: "success",
                    timer: 1500,
                    showConfirmButton: false,
                });
            }
        });
    }
</script>
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
                                    <input type="file" class="form-control" id="file_excel" name="file_excel" accept=".xls">
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
    // ดาวน์โหลด template
    document.getElementById('downloadBtn').addEventListener('click', () => {
        // สร้างข้อมูลสำหรับเทมเพลต (สร้างไฟล์ตัวอย่าง Excel)
        const templateData = [
            ['ข้อ', 'คำถาม', 'คำตอบที่ถูก', 'คำตอบที่ผิด', 'คำตอบที่ผิด', 'คำตอบที่ผิด'], // หัวตาราง
            ['1', 'การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร', '1. ป้องกันพื้นผิวจากความร้อน', '2. เพิ่มการยึดเกาะของสี',
                '3. ลดระยะเวลาในการพ่นสี', '4. ทำให้สีแห้งเร็วขึ้น'
            ],
            ['2', 'น้ำเป็นของเหลวที่ไม่มีสี', 'ถูก', 'ผิด', '', ''] // ถ้าไม่มีตัวเลือกผิด จะถือว่าเป็นคำถามแบบถูก/ผิด
        ];

        // สร้างเวิร์กบุ๊กและชีต
        const worksheet = XLS.utils.aoa_to_sheet(templateData);
        const workbook = XLS.utils.book_new();
        XLS.utils.book_append_sheet(workbook, worksheet, 'Template');

        // บันทึกไฟล์ Excel ให้ผู้ใช้ดาวน์โหลด
        XLS.writeFile(workbook, 'template.xls');
    });

    // นำเข้าไฟล์ excel
    const file_excel = document.getElementById('file_excel');
    const previewContent = document.getElementById('previewContent');

    file_data.addEventListener('click', () => {
        // ตรวจสอบว่าไฟล์ที่อัปโหลดเป็นไฟล์ Excel เท่านั้น
        if (!['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'].includes(file_excel.files[0].type)) {
            alert('อนุญาตเฉพาะไฟล์ .xlsx หรือ .xls เท่านั้น');
            file_excel.value = ''; // ล้างค่าถ้าชนิดไฟล์ไม่ถูกต้อง
            return;
        }

        var reader = new FileReader();
        reader.readAsArrayBuffer(file_excel.files[0]); // อ่านไฟล์เป็น array buffer

        reader.onload = function() {
            var data = new Uint8Array(reader.result);
            var work_book = XLSX.read(data, {
                type: 'array'
            });

            var sheet_name = work_book.SheetNames[0]; // ใช้ชีตแรกของไฟล์
            var sheet_data = XLSX.utils.sheet_to_json(work_book.Sheets[sheet_name], {
                header: 1,
                raw: false // นำเข้าข้อมูลเป็นข้อความเท่านั้น
            });

            if (sheet_data.length > 0) {
                var list_output = '<div class="list-group">';

                for (var row = 1; row < sheet_data.length; row++) { // เริ่มจากแถวที่ 1 เพราะแถวที่ 0 คือหัวตาราง

                    // ตรวจสอบว่ามีรูปภาพอยู่ในเซลล์หรือไม่
                    let isInvalid = sheet_data[row].some(cell => typeof cell !== 'string' && cell !== undefined);
                    if (isInvalid) {
                        alert(`คำถามข้อที่ ${row} มีข้อมูลที่ไม่ใช่ข้อความ (อาจเป็นรูปภาพ) ไม่สามารถนำเข้าได้`);
                        continue; // ข้ามแถวนั้นไป
                    }

                    list_output += '<div class="list-group-item">';
                    list_output += '<h5>' + 'ข้อที่ ' + row + '.' + ' ' + sheet_data[row][1] + '</h5>'; // แสดงชื่อคำถาม

                    // ตรวจสอบว่ามีตัวเลือกหรือไม่ ถ้าไม่มีให้แสดงเป็นคำถามถูก/ผิด
                    if (!sheet_data[row][3] && !sheet_data[row][4] && !sheet_data[row][5]) {
                        list_output += '<ul>';
                        list_output += '<ul><label><input type="radio" name="q' + row + '" class="me-2"> ถูก</label></ul>';
                        list_output += '<ul><label><input type="radio" name="q' + row + '" class="me-2"> ผิด</label></ul>';
                        list_output += '</ul>';
                    } else {
                        list_output += '<ul>';
                        for (var cell = 2; cell < sheet_data[row].length; cell++) { // วนลูปแสดงตัวเลือกคำตอบ
                            if (sheet_data[row][cell]) { // ตรวจสอบว่าตัวเลือกมีค่า ไม่ใช่ช่องว่าง
                                list_output += '<ul><label><input type="radio" name="q' + row + '" class="me-2">' + sheet_data[row][cell] + '</label></ul>';
                            }
                        }
                        list_output += '</ul>';
                    }

                    list_output += '</div>';
                }
                list_output += '</div>';

                // แสดงผลในพื้นที่ข้างนอก modal
                document.getElementById('excel_display_area').innerHTML = list_output;

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
        // $('#addNewQuestion').addClass('d-none');


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
            previewHtml += `<h4> ${document.querySelector(`#Position option[value="${selectedTopic}"]`).text}</h4>`;
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

                // แสดงตัวเลือก
                previewHtml += `
                <ul>
                <input type="radio" name="question${index}" id="question${index}-option${optIndex}">
                <label style="font-size:20px;" for="question${index}-option${optIndex}">
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

    //ลบ
    function removeImage(button, type) {
        const container = button.closest('.d-flex');
        const inputFile = type === 'question' ?
            container.closest('.question-box').querySelector(`#question_image`) :
            container.closest('.row').querySelector(`input[type="file"]`);

        container.remove();
        inputFile.value = ''; // ล้างค่าของ input file
    }
</script>
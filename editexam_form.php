<div class="container-fluid mt-4 mb-4 p-0">
    <div class="card shadow-sm rounded-1" style="border: none">
        <div class="row ">
            <div class="col d-flex align-items-center mb-2 p-3 m-0" style="color: #18B0BD;">
                <h1 class="display-4 ms-3"> แก้ไขข้อสอบ</h1>
                <button class="btn btn-success ms-3" onclick="addQuestion()"><i class="fas fa-plus" style="color:white"></i> เพิ่มคำถาม</button>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="md-3">
                    <select class="form-select" id="Position">
                        <!-- <option selected>--เลือกชื่อหัวข้อสอบ--</option> -->
                        <option value="Position1">ประเภทงานสี</option>
                        <option value="Position2">ประเภทงานเชื่อม</option>
                        <option value="Position3">ประเภทงานประกอบ</option>
                        <option value="Position4">ประเภทงาน CNC</option>
                    </select>
                </div>

                <div class="mt-3 mb-4">
                    <textarea type="text" name="description" id="description" class="form-control">จำนวนข้อสอบทั้งหมด: 50 ข้อ  โดยแบ่งเป็นคำถามถูก/ผิด (True/False): จำนวน 20 ข้อ คำถามปรนัย (Multiple Choice): จำนวน 30 ข้อ  และผู้เข้าสอบจะต้องเลือกคำตอบที่ถูกต้องที่สุดเพียงข้อเดียว</textarea>
                </div>
            </div>
            <!-- คำถามประเภทถูก/ผิด -->
            <div id="trueFalseQuestions">
                <div id="trueFalseTableBody">
                </div>
            </div>
            <hr>

            <!-- คำถามประเภทปรนัย -->
            <div id="multipleChoiceQuestions">
                <div id="multipleChoiceList"></div>
            </div>


            <div class="text-end mb-3">
                <button class="btn btn-warning" type="submit" id="saveButton" onclick="validateForm()" style="color:white">
                    บันทึกการแก้ไข
                </button>
                <button class="btn btn-secondary me-3" onclick="window.location.href='examgroup_maincontent.php'">
                    ยกเลิก
                </button>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const trueFalseTableBody = document.getElementById("trueFalseTableBody");

            // ตัวอย่างข้อมูลคำถามประเภทถูก/ผิด
            const trueFalseQuestions = [{
                    question: "การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่อเพิ่มการยึดเกาะของสี",
                    answer: "true"
                },
                {
                    question: "การระบายอากาศที่ดีในพื้นที่ทำงานสีช่วยลดความเสี่ยงจากไอระเหยของสารเคมี",
                    answer: "true"
                },
                {
                    question: "การสวมถุงมือและแว่นตาเป็นวิธีที่ช่วยป้องกันสารเคมีจากการสัมผัสกับผิวหนังและดวงตา",
                    answer: "false"
                },
                {
                    question: "การเปิดหน้าต่างเพื่อระบายอากาศสามารถช่วยลดความเสี่ยงจากการสูดดมสารเคมีในขณะพ่นสีได้",
                    answer: "true"
                },
                {
                    question: "การใช้งานเครื่องมือพ่นสีโดยไม่สวมอุปกรณ์ป้องกันส่วนบุคคล(PPE) อาจเป็นอันตรายได้",
                    answer: "false"
                },
                {
                    question: "กากเครื่องพ่นสีเกิดการรั่วซึม ควรปล่อยให้ทำงานต่อไปจนกว่าจะเสร็จงาน",
                    answer: "true"
                },
                {
                    question: "ที่ใช้พ่นควรเก็บไว้ในที่ที่มีอุณหภูมิสูงเพื่อให้สามารถใช้งานได้ดี",
                    answer: "true"
                },
                {
                    question: "การใช้สารเคมีในการทำงานสีควรอ่านและปฏิบัติตามคำแนะนำบนฉลากอย่างเคร่งครัด",
                    answer: "false"
                },
                {
                    question: "การทำงานในพื้นที่ปิดที่ไม่มีการระบายอากาศอาจเพิ่มความเสี่ยงจากการเกิดไฟไหม้จากสารเคมีที่ใช้ในงานสี",
                    answer: "true"
                },
                {
                    question: "หากสีเกิดการติดไฟ ควรใช้น้ำดับไฟทันทีเพื่อป้องกันการแพร่กระจายของไฟ",
                    answer: "false"
                },
                {
                    question: "สามารถทิ้งกระป๋องสีที่ใช้หมดแล้วลงในถังขยะปกติได้ โดยไม่ต้องคำนึงถึงการกำจัดของเสียอันตราย",
                    answer: "true"
                },
                {
                    question: "ควรตรวจสอบอุปกรณ์ป้องกันความปลอดภัย (PPE) ก่อนเริ่มงานทุกครั้ง เพื่อให้แน่ใจว่าอุปกรณ์อยู่ในสภาพพร้อมใช้งาน",
                    answer: "true"
                },
                {
                    question: "ไม่จำเป็นต้องใช้แว่นตานิรภัยเมื่อพ่นสี เพราะสีไม่กระเด็นเข้าตา",
                    answer: "false"
                },
                {
                    question: "หากเกิดการระคายเคืองที่ผิวหนังจากสี ควรล้างออกด้วยน้ำสะอาดและสบู่ทันที",
                    answer: "true"
                },
                {
                    question: "การพ่นสีในพื้นที่ปิดโดยไม่มีระบบระบายอากาศที่ดี อาจทำให้เกิดการสะสมของไอระเหยที่ก่อให้เกิดอันตรายต่อระบบทางเดินหายใจ",
                    answer: "false"
                },
                {
                    question: " สามารถเก็บกระป๋องสีที่เปิดใช้แล้วไว้ในที่ที่มีอุณหภูมิสูงหรือใกล้เปลวไฟได้",
                    answer: "true"
                },
                {
                    question: "การใช้ถุงมือป้องกันสารเคมีเป็นสิ่งจำเป็นเมื่อทำงานกับสีประเภทน้ำมันและตัวทำละลาย",
                    answer: "true"
                },
                {
                    question: "หากพบว่ามีสีหกเลอะพื้น ควรทำความสะอาดทันทีเพื่อลดความเสี่ยงในการลื่นล้ม",
                    answer: "false"
                },
                {
                    question: "การใช้หน้ากากผ้าธรรมดาสามารถป้องกันไอระเหยของสารเคมีจากสีได้อย่างมีประสิทธิภาพ",
                    answer: "true"
                },
                {
                    question: "การใช้เครื่องพ่นสีต้องมีการปรับแรงดันอากาศให้เหมาะสมกับประเภทของสี",
                    answer: "false"
                },

            ];

            trueFalseQuestions.forEach((question, index) => {
                let row = document.createElement("div");
                row.classList.add("row", "mb-2");

                row.innerHTML = `
        <div class="row d-flex align-items-center ">
            <div class="col-lg-1 text-end p-0">
               ข้อที่ ${index + 1}.
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control border-0 text-wrap" value="${question.question}">
            </div>
            <div class="col-lg-1">
                <select class="form-control">
                    <option value="true" ${question.answer === "true" ? "selected" : ""}>ถูก</option>
                    <option value="false" ${question.answer === "false" ? "selected" : ""}>ผิด</option>
                </select>
            </div>
            <div class="col-lg-1">
                <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
    `;

                trueFalseTableBody.appendChild(row);
            });

        });

        const multipleChoiceList = document.getElementById("multipleChoiceList");

        // คำถามประเภทปรนัย (รวมคำถามเดิม + คำถามที่เพิ่มใหม่)
        const questions = [
            [
                "การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร?",
                "เพิ่มการยึดเกาะของสี",
                "ลดความเงาของสี",
                "ทำให้สีแห้งเร็วขึ้น",
                "ลดการใช้สี",
                "ก",
            ],
            [
                "ในการพ่นสี ควรเลือกใช้อุปกรณ์ป้องกันส่วนบุคคล (PPE) ใด?",
                "ถุงมือยาง",
                "แว่นตานิรภัย",
                "หน้ากากกรองอากาศแบบไส้กรองมาตรฐาน",
                "รองเท้านิรภัย",
                "ค",
            ],
            [
                "สีรองพื้น(primer)มีหน้าที่อะไรในกระบวนการพ่นสี?",
                "ให้สีเงางาม",
                "ปกป้องพื้นผิวจากสนิมและเพิ่มการยึดเกาะของสีทับหน้า",
                "ให้ตกแต่งเพื่อความสวยงาม",
                "ทำให้สีไม่หลุดลอก",
                "ข",
            ],
            [
                "หน้ากากชนิดใดที่เหมาะสมที่สุดสำหรับการพ่นสีเพื่อป้องกันไอระเหยของสารเคมี?",
                "หน้ากากผ้า",
                "หน้ากากอนามัยทางการเเพทย์",
                "หน้ากากกรองอากาศชนิดครึ่งหน้า(Half-face Respirator)พร้อมไส้กรองสารเคมี",
                "หน้ากากกันฝุ่นทั่วไป",
                "ค",
            ],
            [
                " เครื่องมือใดที่ใช้ในการขัดผิวงานสีเพื่อให้พื้นผิวเรียบ?",
                "กระดาษทราย",
                "เครื่องขัดแบบสั่น",
                "แปรงทาสี",
                "สเปรย์เคลือบ",
                "ข",
            ],
            {
                "questionText": " อุปกรณ์ในรูปภาพคืออุปกรณ์ใด?",
                "questionImage": "images/test1.jpg",
                "choices": [{
                        "label": "ก",
                        "text": "กาพ่นสี (Spray Gun)"
                    },
                    {
                        "label": "ข",
                        "text": "ลูกกลิ้งทาสี (Paint Roller)"
                    },
                    {
                        "label": "ค",
                        "text": "แปรงทาสี (Paint Brush)"
                    },
                    {
                        "label": "ง",
                        "text": "เครื่องขัดไฟฟ้า (Electric Sander)"
                    }
                ],
                "answer": "ก"
            },
            // คำถามที่มีตัวเลือกเป็นรูปภาพ
            {
                questionText: " อุปกรณ์ใดที่ใช้สำหรับป้องกันสารเคมีระหว่างพ่นสี?",
                choices: [
                    ["ก", "images/3m.jpg", "หน้ากากกรองสารเคมี"],
                    ["ข", "images/mask.jpg", "หน้ากากกันฝุ่น"],
                    ["ค", "images/glasses.jpg", "แว่นตานิรภัย"],
                    ["ง", "images/Earplugs.jpg", "ที่อุดหู"]
                ],
                answer: "ก"
            }
        ];

        multipleChoiceList.innerHTML = ""; // ล้างข้อมูลเก่าก่อนเพิ่มใหม่

        questions.forEach((q, index) => {
            if (q.questionImage) {
                multipleChoiceList.innerHTML += `
  <div class="mb-4 question-box">
            <div class="d-flex align-items-center">
                <div class=" me-2">ข้อที่ ${index + 21}.</div>
                <input type="text" class="form-control border-0 me-2" value="${q.questionText}">
                <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
                
        <!-- แสดงรูปภาพคำถาม (ถ้ามี) -->
        ${q.questionImage ? `<div class="mb-2 text-start"><img src="${q.questionImage}" class="img-thumbnail " style="max-width: 400px;"></div>` : ''}

        <!-- ตัวเลือก -->
        <ul class="list-unstyled options-container">
            ${q.choices.map(choice => `
                <div class="d-flex align-items-center ms-3 mb-2">
                    <input type="radio" name="inlineRadioOptions${index}" class="form-check-input me-2" value="${choice.label}">
                    <label class="me-2">${choice.label}</label>
                    <input type="text" class="form-control border-0" value="${choice.text}">
                    <button class="btn btn-lg ms-2" style="color:red" onclick="removeOption(this)">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `).join("")}
        </ul>
<div class="mb-4">
            <button class="btn default" onclick="addOption(this)"><i class="fas fa-plus"></i> <u>เพิ่มตัวเลือก</u></button>
        </div>
        <hr>
    </div>
`;
            } else if (q.questionText) {

                // คำถามที่มีตัวเลือกเป็นรูปภาพ
                multipleChoiceList.innerHTML += `
            <div class="mb-4 question-box">
                <div class="d-flex align-items-center">
                <div class=" me-2">ข้อที่ ${index + 21}.</div>
                    <input type="text" class="form-control border-0 me-2" value="${q.questionText}">
                     <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
                <ul class="list-unstyled options-container">
                    ${q.choices.map(choice => `
                        <div class="d-flex align-items-center ms-3 mb-2">
                            <input type="radio" name="inlineRadioOptions${index}" class="form-check-input me-2" value="${choice[0]}">
                            <label class="me-2">${choice[0]}</label>
                            <img src="${choice[1]}" class="img-thumbnail" style="max-width: 100px;">
                            <input type="text" class="form-control border-0" value="${choice[2]}">
                            <button class="btn btn-lg ms-2" onclick="removeOption(this)">
                    <i class="fas fa-times" style="color:red"></i>
                </button>
                        </div>`).join("")}
                </ul>
                <div class="mb-4">
            <button class="btn default" onclick="addOption(this)"><i class="fas fa-plus"></i> <u>เพิ่มตัวเลือก</u></button>
        </div>
                <hr>
            </div>
        `;
            } else {
                // คำถามแบบเดิม (ข้อความล้วน)
                multipleChoiceList.innerHTML += `
            <div class="mb-4 question-box">
                <div class="d-flex align-items-center">
                <div class="me-2">ข้อที่ ${index + 21}.</div>
                    <input type="text" class="form-control border-0 me-2" value="${q[0]}">
                     <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                        <i class="bi bi-trash"></i>
                    </button>
            </label>
                </div>
                <ul class="list-unstyled options-container">
                    ${["ก", "ข", "ค", "ง"]
                        .map((choice, i) => `
                        <div class="d-flex align-items-center ms-3 mb-2">
                            <input type="radio" name="inlineRadioOptions${index}" class="form-check-input me-2" value="${choice}">
                            <label class="me-2">${choice}</label>
                            <input type="text" class="form-control border-0" value="${q[i + 1]}">
                            <button class="btn btn-lg ms-2" style="color:red" onclick="removeOption(this)">
                        <i class="fas fa-times"></i>
                    </button>
                        </div>`).join("")}
                </ul>
                <div class="mb-4">
            <button class="btn default" onclick="addOption(this)"><i class="fas fa-plus"></i> <u> เพิ่มตัวเลือก</u></button>
        </div>
                <hr>
            </div>
        `;
            }

        });
        // ฟังก์ชันลบคำถาม
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
                    const questionBoxDiv = button.closest('.question-box');
                    questionBoxDiv.remove();
                    Swal.fire({
                        title: "ลบข้อมูลเรียบร้อยแล้ว",
                        icon: "success",
                        timer: 1500,
                        showConfirmButton: false,
                    });
                    renumberQuestions();
                }
            });
        }

        // เพิ่มตัวเลือก
        function addOption(button) {
            const questionBox = button.closest('.question-box');
            const optionsContainer = questionBox.querySelector('.options-container');

            if (optionsContainer.children.length >= 4) { // เพิ่มตัวเลือกได้สูงสุด 4 ตัวเลือก
                Swal.fire({
                    allowOutsideClick: false,
                    icon: 'warning',
                    title: 'เพิ่มตัวเลือกได้สูงสุด 4 ตัวเลือก',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: 'green',
                });
                return;
            }

            const uniqueId = Date.now() + optionsContainer.children.length;
            const optionDivRow = document.createElement('div');
            const optionDiv = document.createElement('div');
            optionDivRow.classList.add('row');
            optionDiv.innerHTML = `
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <input type="radio" name="inlineRadioOptions${questionBox.querySelectorAll('input[type="radio"]').length}" class="form-check-input me-2" value="new">
                    <label for="option_image_${uniqueId}" class="btn btn-outline-primary d-flex align-items-center">
                        <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                    </label>
                    <input type="file" id="option_image_${uniqueId}" class="d-none" onchange="previewImage(this, 'option')">
                    <input type="text" class="form-control border-0" required placeholder="ตัวเลือกที่ ${optionsContainer.children.length + 1}">
                    <button class="btn btn-lg ms-2" style="color:red" onclick="removeOption(this)">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="option-image-preview mt-2 text-center"></div>
            `;
            optionDivRow.appendChild(optionDiv);
            optionsContainer.appendChild(optionDivRow);
        }


        function removeOption(button) {
            const optionDiv = button.closest(".d-flex"); // ค้นหาส่วนที่อยู่ของปุ่มที่คลิก
            optionDiv.remove(); // ลบตัวเลือกนั้น
        }

        function previewImage(input, type) {
            const files = input.files;
            if (!files.length) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                let imageContainer;

                if (type === 'question') {
                    const row = input.closest('.d-flex');
                    if (row) {
                        imageContainer = row.nextElementSibling;
                        if (!imageContainer) {
                            imageContainer = document.createElement('div');
                            imageContainer.classList.add('showimage', 'mt-2');
                            row.parentNode.insertBefore(imageContainer, row.nextSibling);
                        }
                    }
                } else if (type === 'option') {
                    const optionRow = input.closest('.d-flex');
                    if (optionRow) {
                        imageContainer = optionRow.querySelector('.option-image-preview');
                        if (!imageContainer) {
                            imageContainer = document.createElement('div');
                            imageContainer.classList.add('option-image-preview', 'mt-2', 'text-center');
                            optionRow.parentNode.insertBefore(imageContainer, optionRow.nextSibling);
                        }
                    }
                }

                if (imageContainer) {
                    const imgWrapper = document.createElement('div');
                    imgWrapper.classList.add('d-flex', 'align-items-center', 'me-2');

                    imgWrapper.innerHTML = `
                <img src="${e.target.result}" class="img-thumbnail" style="max-width: 200px;">
                <button class="btn btn-danger btn-sm ms-2" onclick="removeImage(this)">ลบ</button>
            `;

                    imageContainer.appendChild(imgWrapper);
                }
            };

            reader.readAsDataURL(files[0]);
        }

        // ฟังก์ชันลบรูปภาพที่แสดง
        function removeImage(button) {
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
                    const imageContainer = button.parentElement;
                    button.parentElement.remove(); // ลบ div ที่แสดงรูปภาพ
                }
            });
        }

        function addQuestion() {
            Swal.fire({
                title: "เพิ่มคำถาม",
                html: `
        <div class="md-3 text-start">
        <label for="Exam">เลือกประเภทข้อสอบ</label>
            <select class="form-select" id="Exam">
                <option selected>--เลือกประเภทข้อสอบ--</option>
                <option value="Exam1">ข้อสอบประเภทถูก/ผิด</option>
                <option value="Exam2">ข้อสอบประเภทปรนัย</option>
            </select>
        </div>
        <div class="text-start mt-3">
            <label for="text">จำนวนข้อที่ต้องการเพิ่ม</label>
            <input type="number" class="form-control" id="text" placeholder="จำนวนข้อที่ต้องการเพิ่ม">
        </div>
        `,
                confirmButtonText: "เพิ่ม",
                confirmButtonColor: "green",
                showCancelButton: true,
                cancelButtonText: "ยกเลิก",
                preConfirm: () => {
                    const examType = document.getElementById('Exam').value;
                    const questionCount = parseInt(document.getElementById('text').value, 10);

                    if (examType === '--เลือกประเภทข้อสอบ--' || isNaN(questionCount) || questionCount <= 0) {
                        Swal.showValidationMessage("กรุณากรอกข้อมูลให้ครบถ้วน");
                        return false; // หยุดการยืนยัน
                    }
                    return {
                        examType,
                        questionCount
                    }; // ส่งข้อมูลไปยังฟังก์ชันหลังจากการยืนยัน
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        examType,
                        questionCount
                    } = result.value;

                    if (examType === 'Exam1') {
                        addTrueFalseQuestions(questionCount);
                    } else if (examType === 'Exam2') {
                        addMultipleChoiceQuestions(questionCount);
                    }
                }
            });
        }

        function addTrueFalseQuestions(count) {
            const trueFalseTableBody = document.getElementById("trueFalseTableBody");
            const currentCount = trueFalseTableBody.children.length;

            for (let i = 0; i < count; i++) {
                let uniqueId = Date.now() + i; // สร้าง ID เฉพาะสำหรับ input file
                let row = document.createElement("div");
                row.classList.add("row", "mb-2");
                row.innerHTML = `
            <div class="row d-flex align-items-center g-2">
                <div class="col-lg-1 text-end p-0">
                    ข้อที่ ${currentCount + i + 1}.
                </div>
                <div class="col-lg-1 text-center p-0">
                    <label for="question_image_${uniqueId}" class="btn btn-outline-primary ">
                    <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                    </label>
                    <input type="file" id="question_image_${uniqueId}" class="d-none" accept=".jpg, .jpeg, .png" onchange="previewImage(this, 'question')">
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                    <input type="text" class="form-control border-0 text-wrap" required placeholder="เพิ่มคำถาม ?">
                </div>
                <div class="col-lg-1">
                <select class="form-control">
                    <option value="true">ถูก</option>
                    <option value="false">ผิด</option>
                </select>
                </div>
                <div class="col-lg-1 text-center">
                <button class="btn btn-danger" onclick="removeQuestion(this)" title="นำออก">
                 <i class="bi bi-trash"></i>
                </button>
                </div>
            </div>
            <div class="row">
            <div class="showimage"></div> <!-- ส่วนแสดงรูป -->
            </div>
`;
                trueFalseTableBody.appendChild(row);
            }
            renumberQuestions();
        }

        function addMultipleChoiceQuestions(count) {
            const multipleChoiceList = document.getElementById("multipleChoiceList");
            const currentCount = multipleChoiceList.children.length;

            for (let i = 0; i < count; i++) {
                const uniqueId = Date.now() + i;
                let questionBox = document.createElement('div');
                questionBox.classList.add('question-box', 'mb-4');
                questionBox.innerHTML = `
                    <div class="d-flex align-items-center">
                        <div class="me-2">ข้อที่ ${currentCount + i + 21}.</div>
                        <input type="text" class="form-control border-0 me-2" required placeholder="เพิ่มคำถาม ?">
                        <label for="question_image_${uniqueId}" class="btn btn-outline-primary" accept=".jpg, .jpeg, .png">
                            <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                        </label>
                        <input type="file" id="question_image_${uniqueId}" class="d-none" onchange="previewImage(this, 'question')">
                    </div>
                    <div class="mb-4 showimage ms-3"></div>
                    <ul class="list-unstyled options-container">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <input type="radio" name="inlineRadioOptions${uniqueId}" class="form-check-input me-2" value="option1" checked>
                                    <label for="option_image_${uniqueId}_1" class="btn btn-outline-primary d-flex align-items-center" accept=".jpg, .jpeg, .png">
                                        <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                                    </label>
                                    <input type="file" id="option_image_${uniqueId}_1" class="d-none" onchange="previewImage(this, 'option')">
                                    <input type="text" class="form-control border-0" required placeholder="ตัวเลือกที่ 1">
                        
                                    <button class="btn btn-lg ms-2" onclick="removeOption(this)">
                                        <i class="fas fa-times" style="color:red"></i>
                                    </button>
                                </div>
                            </div>
                    </ul>
                    <div class="mb-4">
                        <button class="btn default" onclick="addOption(this)">
                            <i class="fas fa-plus"></i> <u>เพิ่มตัวเลือก</u>
                        </button>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                    `;
                multipleChoiceList.appendChild(questionBox);
            }
            renumberQuestions();
        }

        function previewImage(input, type) {
            const files = input.files;
            if (!files.length) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                let imageContainer;

                if (type === 'question') {
                    const row = input.closest('.d-flex');
                    if (row) {
                        imageContainer = row.nextElementSibling;
                        if (!imageContainer) {
                            imageContainer = document.createElement('div');
                            imageContainer.classList.add('showimage', 'mt-2');
                            row.parentNode.insertBefore(imageContainer, row.nextSibling);
                        }
                    }
                } else if (type === 'option') {
                    const optionRow = input.closest('.d-flex');
                    if (optionRow) {
                        imageContainer = optionRow.querySelector('.option-image-preview');
                        if (!imageContainer) {
                            imageContainer = document.createElement('div');
                            imageContainer.classList.add('option-image-preview', 'mt-2', 'text-center');
                            optionRow.parentNode.insertBefore(imageContainer, optionRow.nextSibling);
                        }
                    }
                }

                if (imageContainer) {
                    const imgWrapper = document.createElement('div');
                    imgWrapper.classList.add('d-flex', 'align-items-center', 'me-2');

                    imgWrapper.innerHTML = `
                <img src="${e.target.result}" class="img-thumbnail" style="max-width: 200px;">
                <button class="btn btn-danger btn-sm ms-2" onclick="removeImage(this)">ลบ</button>
            `;

                    imageContainer.appendChild(imgWrapper);
                }
            };

            reader.readAsDataURL(files[0]);
        }

        function renumberQuestions() {
            const trueFalseQuestions = document.querySelectorAll("#trueFalseQuestions .row.mb-2");
            const multipleChoiceQuestions = document.querySelectorAll("#multipleChoiceQuestions .question-box");

            let questionNumber = 1;

            trueFalseQuestions.forEach((question) => {
                const questionLabel = question.querySelector(".col-lg-1.text-end.p-0");
                if (questionLabel) {
                    questionLabel.textContent = `ข้อที่ ${questionNumber}.`;
                    questionNumber++;
                }
            });

            multipleChoiceQuestions.forEach((question) => {
                const questionLabel = question.querySelector(".d-flex.align-items-center .me-2");
                if (questionLabel) {
                    questionLabel.textContent = `ข้อที่ ${questionNumber}.`;
                    questionNumber++;
                }
            });
        }

        function validateForm() {
            // ตรวจสอบฟิลด์คำถามแบบถูก/ผิด
            const trueFalseQuestions = document.querySelectorAll("#trueFalseTableBody .row input[type='text']");
            for (let input of trueFalseQuestions) {
                if (!input.value.trim()) {
                    alert("กรุณากรอกข้อมูลคำถามให้ครบทุกข้อ");
                    input.focus();
                    return false;
                }
            }

            // ตรวจสอบฟิลด์คำถามแบบเลือกตอบ
            const multipleChoiceQuestions = document.querySelectorAll("#multipleChoiceList .question-box input[type='text']");
            for (let input of multipleChoiceQuestions) {
                if (!input.value.trim()) {
                    alert("กรุณากรอกข้อมูลคำถามให้ครบทุกข้อ");
                    input.focus();
                    return false;
                }
            }

            // ตรวจสอบฟิลด์ตัวเลือกในคำถามแบบเลือกตอบ
            const options = document.querySelectorAll("#multipleChoiceList .options-container input[type='text']");
            for (let input of options) {
                if (!input.value.trim()) {
                    alert("กรุณากรอกข้อมูลตัวเลือกให้ครบทุกข้อ");
                    input.focus();
                    return false;
                }
            }

            return true; // ถ้าข้อมูลถูกกรอกครบทุกฟิลด์
        }
        // เพิ่ม Event Listener สำหรับปุ่มบันทึก
        document.getElementById("saveButton").addEventListener("click", function(event) {
            if (!validateForm()) {
                event.preventDefault(); // หยุดการส่งฟอร์มถ้าข้อมูลไม่ครบ
            } else {
                // ถ้าข้อมูลครบถ้วน ให้เปลี่ยนเส้นทางไปยัง exam_from_content_maincontent.php
                setTimeout(function() {
                    window.location.href = "examgroup_maincontent.php";
                }, 500); // หน่วงเวลาเล็กน้อยเพื่อให้เห็นผลลัพธ์ของการบันทึก
            }
        });
    </script>
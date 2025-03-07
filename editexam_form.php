<div class="container-fluid mt-4 mb-4 p-0">
    <div class="card shadow-sm rounded-1" style="border: none">
        <div class="col-12 mb-2 p-3 m-0" style="color: #18B0BD;">
            <h1 class="display-4"> แก้ไขข้อสอบ</h1>
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

            <!-- คำถามประเภทปรนัย -->
            <div id="multipleChoiceQuestions">
                <div id="multipleChoiceList"></div>
            </div>

            <!-- เพิ่มคำถามใหม่ -->
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


        <div class="text-end mb-3">
            <button class="btn btn-success" onclick="window.location.href='examgroup_maincontent.php'">
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
                question: "ข้อที่ 1. การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่อเพิ่มการยึดเกาะของสี",
                answer: "true"
            },
            {
                question: "ข้อที่ 2.  การระบายอากาศที่ดีในพื้นที่ทำงานสีช่วยลดความเสี่ยงจากไอระเหยของสารเคมี",
                answer: "true"
            },
            {
                question: "ข้อที่ 3. การสวมถุงมือและแว่นตาเป็นวิธีที่ช่วยป้องกันสารเคมีจากการสัมผัสกับผิวหนังและดวงตา",
                answer: "false"
            },
            {
                question: "ข้อที่ 4. การเปิดหน้าต่างเพื่อระบายอากาศสามารถช่วยลดความเสี่ยงจากการสูดดมสารเคมีในขณะพ่นสีได้",
                answer: "true"
            },
            {
                question: "ข้อที่ 5. การใช้งานเครื่องมือพ่นสีโดยไม่สวมอุปกรณ์ป้องกันส่วนบุคคล(PPE) อาจเป็นอันตรายได้",
                answer: "false"
            },
            {
                question: "ข้อที่ 6. หากเครื่องพ่นสีเกิดการรั่วซึม ควรปล่อยให้ทำงานต่อไปจนกว่าจะเสร็จงาน",
                answer: "true"
            },
            {
                question: "ข้อที่ 7. สีที่ใช้พ่นควรเก็บไว้ในที่ที่มีอุณหภูมิสูงเพื่อให้สามารถใช้งานได้ดี",
                answer: "true"
            },
            {
                question: "ข้อที่ 8. การใช้สารเคมีในการทำงานสีควรอ่านและปฏิบัติตามคำแนะนำบนฉลากอย่างเคร่งครัด",
                answer: "false"
            },
            {
                question: "ข้อที่ 9. การทำงานในพื้นที่ปิดที่ไม่มีการระบายอากาศอาจเพิ่มความเสี่ยงจากการเกิดไฟไหม้จากสารเคมีที่ใช้ในงานสี",
                answer: "true"
            },
            {
                question: "ข้อที่ 10. หากสีเกิดการติดไฟ ควรใช้น้ำดับไฟทันทีเพื่อป้องกันการแพร่กระจายของไฟ",
                answer: "false"
            },
            {
                question: "ข้อที่ 11. สามารถทิ้งกระป๋องสีที่ใช้หมดแล้วลงในถังขยะปกติได้ โดยไม่ต้องคำนึงถึงการกำจัดของเสียอันตราย",
                answer: "true"
            },
            {
                question: "ข้อที่ 12. ควรตรวจสอบอุปกรณ์ป้องกันความปลอดภัย (PPE) ก่อนเริ่มงานทุกครั้ง เพื่อให้แน่ใจว่าอุปกรณ์อยู่ในสภาพพร้อมใช้งาน",
                answer: "true"
            },
            {
                question: "ข้อที่ 13. ไม่จำเป็นต้องใช้แว่นตานิรภัยเมื่อพ่นสี เพราะสีไม่กระเด็นเข้าตา",
                answer: "false"
            },
            {
                question: "ข้อที่ 14. หากเกิดการระคายเคืองที่ผิวหนังจากสี ควรล้างออกด้วยน้ำสะอาดและสบู่ทันที",
                answer: "true"
            },
            {
                question: "ข้อที่ 15. การพ่นสีในพื้นที่ปิดโดยไม่มีระบบระบายอากาศที่ดี อาจทำให้เกิดการสะสมของไอระเหยที่ก่อให้เกิดอันตรายต่อระบบทางเดินหายใจ",
                answer: "false"
            },
            {
                question: "ข้อที่ 16.  สามารถเก็บกระป๋องสีที่เปิดใช้แล้วไว้ในที่ที่มีอุณหภูมิสูงหรือใกล้เปลวไฟได้",
                answer: "true"
            },
            {
                question: "ข้อที่ 17. การใช้ถุงมือป้องกันสารเคมีเป็นสิ่งจำเป็นเมื่อทำงานกับสีประเภทน้ำมันและตัวทำละลาย",
                answer: "true"
            },
            {
                question: "ข้อที่ 18. หากพบว่ามีสีหกเลอะพื้น ควรทำความสะอาดทันทีเพื่อลดความเสี่ยงในการลื่นล้ม",
                answer: "false"
            },
            {
                question: "ข้อที่ 19. การใช้หน้ากากผ้าธรรมดาสามารถป้องกันไอระเหยของสารเคมีจากสีได้อย่างมีประสิทธิภาพ",
                answer: "true"
            },
            {
                question: "ข้อที่ 20. การใช้เครื่องพ่นสีต้องมีการปรับแรงดันอากาศให้เหมาะสมกับประเภทของสี",
                answer: "false"
            },

        ];

        trueFalseQuestions.forEach((question, index) => {
            let row = document.createElement("div");
            row.classList.add("row", "mb-2"); // ใช้ Bootstrap สำหรับการจัดระยะห่าง
            row.innerHTML = `
            <div class="row d-flex align-items-center ">
    <div class="col-lg-10">
        <input type="text" class="form-control border-0 text-wrap" value="${question.question}">
    </div>
    <div class="col-lg-1">
        <select class="form-control">
            <option value="true" ${question.answer === "true" ? "selected" : ""}>ถูก</option>
            <option value="false" ${question.answer === "false" ? "selected" : ""}>ผิด</option>
        </select>
    </div>
    <div class="col-lg-1">
        <button class="btn btn-lg ms-2" onclick="removeOption(this)">
            <i class="bi bi-x"></i>
        </button>
    </div>
</div>
        `;
            trueFalseTableBody.appendChild(row);
        });
    });

    const multipleChoiceList = document.getElementById("multipleChoiceList");
    // คำถามประเภทปรนัย
    const questions = [
        [
            "ข้อที่ 21. การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร?",
            "เพิ่มการยึดเกาะของสี",
            "ลดความเงาของสี",
            "ทำให้สีแห้งเร็วขึ้น",
            "ลดการใช้สี",
            "ก",
        ],
        [
            "ข้อที่ 22. ในการพ่นสี ควรเลือกใช้อุปกรณ์ป้องกันส่วนบุคคล (PPE) ใด?",
            "ถุงมือยาง",
            "แว่นตานิรภัย",
            "หน้ากากกรองอากาศแบบไส้กรองมาตรฐาน",
            "รองเท้านิรภัย",
            "ค",
        ],
        [
            "ข้อที่ 23. สีรองพื้น(primer)มีหน้าที่อะไรในกระบวนการพ่นสี?",
            "ให้สีเงางาม",
            "ปกป้องพื้นผิวจากสนิมและเพิ่มการยึดเกาะของสีทับหน้า",
            "ให้ตกแต่งเพื่อความสวยงาม",
            "ทำให้สีไม่หลุดลอก",
            "ข",
        ],
        [
            "ข้อที่ 24. หน้ากากชนิดใดที่เหมาะสมที่สุดสำหรับการพ่นสีเพื่อป้องกันไอระเหยของสารเคมี?",
            "หน้ากากผ้า",
            "หน้ากากอนามัยทางการเเพทย์",
            "หน้ากากกรองอากาศชนิดครึ่งหน้า(Half-face Respirator)พร้อมไส้กรอกสารเคมี",
            "หน้ากากกันฝุ่นทั่วไป",
            "ค",
        ],
        [
            "ข้อที่ 25. เครื่องมือใดที่ใช้ในการขัดผิวงานสีเพื่อให้พื้นผิวเรียบ?",
            "กระดาษทราย",
            "เครื่องขัดแบบสั่น",
            "แปรงทาสี",
            "สเปรย์เคลือบ",
            "ข",
        ],
        [
            "ข้อที่ 26. การทาสีด้วยแปรงมีข้อดีอย่างไร?",
            "ใช้ได้ดีในพื้นที่แคบ",
            "ทาสีได้เร็วกว่าเครื่องมืออื่น",
            "ขัดผิวรอบรอยร้าวแล้วพ่นสี",
            "ไม่ต้องใช้การเตรียมพื้นผิว",
            "ก",
        ],
        [
            "ข้อที่ 27. หากทาสีผนังเกิดรอยร้าว ควรทำอย่างไร?",
            "พ่นสีทับทันที",
            "ใช้วัสดุปิดรอยร้าวแล้วทาสีใหม่",
            "ขัดผิวรอบรอยร้าวแล้วพ่นสี",
            "ทาสีทับรอยร้าวโดยตรง",
            "ข",
        ],
        [
            "ข้อที่ 28. อุปกรณ์ใดที่ใช้ในการพ่นสีที่มีคุณภาพสูง?",
            "ปืนพ่นสีอัตโนมัคิ",
            "สเปรย์สีมืออาชีพ",
            "เครื่องพ่นสีแบบใช้มือ",
            "เครื่องพ่นสีไฟฟ้า",
            "ก",
        ],
        [
            "ข้อที่ 29. หากสีหลุดลอก ควรแก้ไขด้วยวิธีใด?",
            "ทาสีทับทันที",
            "ขัดและทำความสะอาดพื้นที่หลุดลอกก่อนทาสีใหม่",
            "เใช้สีรองพื้นเพิ่ม",
            "ใช้แปรงขัดสี",
            "ข",
        ],
        [
            "ข้อที่ 30. การใช้สารเคมีในการพ่นสีต้องมีการป้องกันอย่างไร?",
            "ใช้หน้ากากป้องกันสารเคมี",
            "ใช้แว่นตากันแดด",
            "ใส่ถุงมือป้องกันการสัมผัส",
            "ถูกทุกข้อ",
            "ก",
        ],
        // เพิ่มคำถามอื่น ๆ ...
    ];
    multipleChoiceList.innerHTML = ""; // ล้างข้อมูลเก่าก่อนเพิ่มใหม่

    questions.forEach((q, index) => {
        // สร้างคำถามแต่ละข้อสำหรับประเภทปรนัย
        multipleChoiceList.innerHTML += `
    <div class="mb-4 question-box">
        <div class="d-flex align-items-center ">
            <input type="text" class="form-control border-0 me-2" value="${q[0]}">
            <label class="btn btn-outline-primary">
                <i class="bi bi-image"></i>
                <input type="file" class="d-none" onchange="previewImage(this,question)">
            </label>
        </div>
       <div class="mb-2" id="showimage"></div>

        <ul class="list-unstyled options-container">
            ${["ก", "ข", "ค", "ง"]
                .map((choice, i) => `
                <div class="d-flex align-items-center ms-3">
                    <input type="radio" name="inlineRadioOptions${index}" class="form-check-input me-2" value="${choice}">
                    <label class="me-2">${choice}</label>
                    <input type="text" class="form-control border-0" value="${q[i + 1]}">
                    <button class="btn btn-lg ms-2" onclick="removeOption(this)">
                        <i class="fas fa-times"></i>
                    </button>
                </div>`).join("")}
        </ul>
<div class="col-2">
<strong>คำตอบ:</strong>
            <select class="form-control">
                ${["ก", "ข", "ค", "ง"]
                    .map((choice) => `
                    <option value="${choice}" ${q[5] === choice ? "selected" : ""}>${choice}</option>`).join("")}
            </select>
</div>
        <div class="mb-4">
            <button class="btn default" onclick="addOption(this)"><i class="fas fa-plus"></i> <u>เพิ่มตัวเลือก</u></button>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="mb-3 d-flex align-items-center">
                    <button class="btn btn-danger me-2" onclick="removeQuestion(this)" title="นำออก">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
`;
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
            }
        });
    }

    // เพิ่มตัวเลือก
    function addOption(button) {
        const questionBox = button.closest('.question-box');
        const optionsContainer = questionBox.querySelector('.options-container');

        if (optionsContainer.children.length >= 4) { // เพิ่มตัวเลือกได้สูงสุด 6 ตัวเลือก
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
        optionDiv.classList.add('d-flex', 'align-items-center', 'ms-3');
        optionDiv.innerHTML = `
         <div class="col-auto">
            <input type="radio" name="inlineRadioOptions${questionBox.querySelectorAll('input[type="radio"]').length}" class="form-check-input me-2" value="new">
        </div>
        <div class="col-auto">
            <label for="option_image_${optionId}" class="btn btn-outline-primary d-flex align-items-center">
                <i class="bi bi-image" title="แทรกรูปภาพ"></i>
            </label>
            <input type="file" id="option_image_${optionId}" class="d-none" onchange="previewImage(this, 'option')">
        </div>
        <div class="col">
            <input type="text" class="form-control border-0" placeholder="ตัวเลือกที่ ${optionsContainer.children.length +1}">
        </div>
        <div class="col-auto">
           <button class="btn btn-lg ms-2" onclick="removeOption(this)">
            <i class="bi bi-x"></i>
        </button>
 
        </div>
    `;
        optionsContainer.appendChild(optionDiv);
    }


    function removeOption(button) {
        const optionDiv = button.closest(".d-flex"); // ค้นหาส่วนที่อยู่ของปุ่มที่คลิก
        optionDiv.remove(); // ลบตัวเลือกนั้น
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
                const optionRow = input.closest('.d-flex');
                imageContainer = optionRow.querySelector('.option-image-preview');
                if (!imageContainer) {
                    imageContainer = document.createElement('div');
                    imageContainer.classList.add('option-image-preview', 'm-2');
                    optionRow.insertBefore(imageContainer, input.closest('.col-auto').nextSibling);
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

    function addNewQuestion() {
        const questionContainer = document.getElementById('multipleChoiceQuestions');
        const questionBoxes = questionContainer.querySelectorAll('.question-box');

        // ซ่อนปุ่ม "เพิ่มคำถาม" ของข้อก่อนหน้า
        if (questionBoxes.length > 0) {
            const lastQuestionBox = questionBoxes[questionBoxes.length - 1];
            const lastAddButton = lastQuestionBox.querySelector('.add-question-btn');
            if (lastAddButton) {
                lastAddButton.classList.add('d-none'); // ซ่อนปุ่ม
            }
        }

        const questionBox = document.createElement('div');
        questionBox.classList.add('question-box', 'mb-4');
        questionBox.innerHTML = `
        <div class="row mt-3 mb-3">
            <label for="title" class="col-12">ตั้งคำถาม:<span class="text-danger">*</span></label>
            <div class="col-10">
                <input type="text" class="form-control" placeholder="เพิ่มคำถาม ?">
                <span class="text-danger required-asterisk" style="display: none;">*</span>
            </div>
            <div class="col-2 d-flex align-items-end justify-content-start">
                <label for="question_image" class="btn btn-outline-primary">
                    <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                </label>
                <input type="file" class="d-none" onchange="previewImage(this, 'question')">
            </div>
        </div>
        <div class="mb-2" id="showimage"></div>
        <div id="options-container" class="mb-4 options-container">
            <div class="row d-flex align-items-center justify-content-center mb-2 g-2 ms-3">
                <div class="col-auto">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" checked>
                </div>
                <div class="col-auto">
                    <label for="option_image_1" class="btn btn-outline-primary d-flex align-items-center">
                        <i class="bi bi-image" title="แทรกรูปภาพ"></i>
                    </label>
                    <input type="file" id="option_image_1" class="d-none" onchange="previewImage(this, 'option')">
                </div>
                <div class="col">
                    <input type="text" class="form-control border-0" placeholder="ตัวเลือกที่ 1">
                </div>
                <div class="col-auto">
                    <button class="btn" onclick="removeOption(this)" title="ลบตัวเลือก">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
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

        questionContainer.appendChild(questionBox);
    }
</script>
<div class="container-fluid mt-4 mb-4 ">
    <div class="card shadow-sm rounded-1" style="border: none">
        <div class="col-12 mb-2 p-3 m-0" style="color: #18B0BD;">
            <h1 class="display-4"> แก้ไขข้อสอบ</h1>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-12 text-end mb-4">
                    <button type="button" class="btn btn-primary" id="uploadBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-file-earmark-arrow-down-fill"></i> นำเข้าข้อมูลจาก Excel
                    </button>
                    <!-- <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#previewModal" title="แสดงตัวอย่าง" onclick="previewExam()">
                        <i class="fas fa-eye"></i>
                    </button> -->
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
                        <!-- <option selected>--เลือกชื่อหัวข้อสอบ--</option> -->
                        <option value="Position1">ประเภทงานสี</option>
                        <option value="Position2">ประเภทงานเชื่อม</option>
                        <option value="Position3">ประเภทงานประกอบ</option>
                        <option value="Position4">ประเภทงาน CNC</option>
                    </select>
                </div>

                <div class="mt-3 mb-2">
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="แบบทดสอบมีทั้ง 50 ข้อ"></textarea>
                </div>
            </div>
            <!-- คำถามประเภทถูก/ผิด -->
            <div id="trueFalseQuestions">
                <div class="table-responsive mt-3 mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">โจทย์คำถาม</th>
                                <th class="text-center">คำตอบ</th>
                            </tr>
                        </thead>
                        <tbody id="trueFalseTableBody">
                            <!-- คำถามประเภทถูก/ผิดจะถูกแสดงที่นี่ -->
                        </tbody>

                    </table>
                </div>
            </div>

            <!-- คำถามประเภทปรนัย -->
            <div id="multipleChoiceQuestions">
                <div class="table-responsive mt-3 mb-3">
                    <div id="multipleChoiceList"></div>
                </div>
            </div>

            <div class="text-end">
                <button class="btn btn-success" onclick="window.location.href='examgroup_maincontent.php'">
                    บันทึกการแก้ไข
                </button>
            </div>
        </div>
    </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    const trueFalseTableBody = document.getElementById("trueFalseTableBody");

    // ตัวอย่างข้อมูลคำถามประเภทถูก/ผิด
    const trueFalseQuestions = [
        {
            question: "ข้อที่ 1. การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่อเพิ่มการยึดเกาะของสี",
            answer: "true"
        },
        {
            question: "ข้อที่ 2. สีรองพื้น(primer)มีหน้าที่ปกป้องพื้นผิวจากสนิมและเพิ่มการยึดเกาะของสีทับหน้า",
            answer: "true"
        },
        {
            question: "ข้อที่ 3. ในการพ่นสี ควรเลือกใช้แว่นตานิรภัยเป็นอุปกรณ์ป้องกันส่วนบุคคล (PPE)",
            answer: "false"
        },
        {
            question: "ข้อที่ 4. การเปิดหน้าต่างเพื่อระบายอากาศสามารถช่วยลดความเสี่ยงจากการสูดดมสารเคมีในขณะพ่นสีได้",
            answer: "true"
        },
        {
            question: "ข้อที่ 5. หากเครื่องพ่นสีเกิดการรั่วซึม ควรปล่อยให้ทำงานต่อไปจนกว่าจะเสร็จงาน",
            answer: "false"
        },
        {
            question: "ข้อที่ 6. ควรสวมใส่หน้ากากกันสารเคมีทุกครั้งเมื่อทำงานเกี่ยวกับสี",
            answer: "true"
        },
        {
            question: "ข้อที่ 7. การระบายอากาศที่ดีในพื้นที่ทำงานสีช่วยลดความเสี่ยงจากไอระเหยของสารเคมี",
            answer: "true"
        },
        {
            question: "ข้อที่ 8. การทำงานในพื้นที่ปิดที่ไม่มีการระบายอากาศอาจเพิ่มความเสี่ยงจากการเกิดไฟไหม้จากสารเคมีที่ใช้ในงานสี",
            answer: "false"
        },
        {
            question: "ข้อที่ 9. ควรตรวจสอบอุปกรณ์ป้องกันความปลอดภัย (PPE) ก่อนเริ่มงานทุกครั้ง เพื่อให้แน่ใจว่าอุปกรณ์อยู่ในสภาพพร้อมใช้งาน",
            answer: "true"
        },
        {
            question: "ข้อที่ 10. การพ่นสีในพื้นที่ปิดโดยไม่มีระบบระบายอากาศที่ดี อาจทำให้เกิดการสะสมของไอระเหยที่ก่อให้เกิดอันตรายต่อระบบทางเดินหายใจ",
            answer: "false"
        },

    ];

    // สร้างตารางคำถามประเภทถูก/ผิด
    trueFalseQuestions.forEach((question, index) => {
        let row = document.createElement("tr");
        row.innerHTML = `
            <td>
                <input type="text" class="form-control" style="border:none;" value="${question.question}">
            </td>
            <td>
                <select class="form-control">
                    <option value="true" ${question.answer === "true" ? "selected" : ""}>ถูก</option>
                    <option value="false" ${question.answer === "false" ? "selected" : ""}>ผิด</option>
                </select>
            </td>
        `;
        trueFalseTableBody.appendChild(row);
    });
});
    // คำถามประเภทปรนัย
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
            "หน้ากากกรองอากาศชนิดครึ่งหน้า(Half-face Respirator)พร้อมไส้กรอกสารเคมี",
            "หน้ากากกันฝุ่นทั่วไป",
            "ค",
        ],
        [
            "เครื่องมือใดที่ใช้ในการขัดผิวงานสีเพื่อให้พื้นผิวเรียบ?",
            "กระดาษทราย",
            "เครื่องขัดแบบสั่น",
            "แปรงทาสี",
            "สเปรย์เคลือบ",
            "ข",
        ],
        // เพิ่มคำถามอื่น ๆ ...
    ];

    questions.forEach((q, index) => {
        // สร้างคำถามแต่ละข้อสำหรับประเภทปรนัย
        multipleChoiceList.innerHTML += `
        <div class="mb-4">
            <div class="d-flex align-items-center">
                <strong>ข้อที่ ${index + 1}:</strong>
                <input type="text" class="form-control mx-2" value="${q[0]}">
                <label class="btn btn-outline-primary">
                    <i class="bi bi-image"></i>
                    <input type="file" class="d-none" onchange="previewImage(this)">
                </label>
            </div>

            <ul class="list-unstyled">
                ${["ก", "ข", "ค", "ง"]
                    .map((choice, i) => `
                    <div class="d-flex align-items-center mt-2">
                        <input type="radio" name="choices${index}" class="form-check-input me-2" value="${choice}">
                        <label class="me-2">${choice}</label>
                        <input type="text" class="form-control" value="${q[i + 1]}">
                        <button class="btn btn-lg ms-2" onclick="removeOption(this)">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>`).join("")}
            </ul>

            <strong>คำตอบ:</strong>
            <select class="form-control">
                ${["ก", "ข", "ค", "ง"]
                    .map((choice) => `
                    <option value="${choice}" ${q[5] === choice ? "selected" : ""}>${choice}</option>`).join("")}
            </select>
            <hr>
        </div>
    `;
    });

    // ฟังก์ชันลบตัวเลือกในข้อคำถาม
    function removeOption(button) {
        const optionDiv = button.closest(".d-flex"); // ค้นหาส่วนที่อยู่ของปุ่มที่คลิก
        optionDiv.remove(); // ลบตัวเลือกนั้น
    }

    // ฟังก์ชันแสดงภาพที่ผู้ใช้เลือก
    function previewImage(input) {
        const file = input.files[0]; // ตรวจสอบไฟล์ที่เลือก
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function(e) {
            const questionDiv = input.closest(".mb-4"); // หา div ของคำถามที่มี input
            let imageContainer = questionDiv.querySelector(".image-container");

            // ถ้าไม่มี imageContainer ให้สร้างใหม่
            if (!imageContainer) {
                imageContainer = document.createElement("div");
                imageContainer.classList.add("image-container", "mt-3");
                questionDiv.appendChild(imageContainer);
            }

            // เพิ่มภาพที่เลือกลงใน container
            const imgWrapper = document.createElement("div");
            imgWrapper.classList.add("text-center", "mb-2");
            imgWrapper.innerHTML = `
            <div class="d-flex align-items-center">
                <img src="${e.target.result}" class="img-thumbnail me-2" style="max-width: 400px;">
                <button class="btn btn-danger btn-sm mt-2" onclick="removeImage(this)">ลบ</button>
            </div>`;
            imageContainer.appendChild(imgWrapper); // เพิ่มภาพใน container
        };
        reader.readAsDataURL(file); // อ่านไฟล์ภาพ
    }

    // ฟังก์ชันลบรูปภาพที่แสดง
    function removeImage(button) {
        button.parentElement.remove(); // ลบ div ที่แสดงรูปภาพ
    }
</script>
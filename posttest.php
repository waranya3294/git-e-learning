<style>
  .option {
    padding: 10px;
    /* border: 2px solid #69696930; */
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 10px;
  }

  .option:hover {
    background-color: rgb(214, 214, 214);
  }

  .option.selected {
    background-color: #bee5e5;
  }

  .pagination {
    display: flex;
    /* ใช้ flexbox ในการจัดการการวางปุ่ม */
    flex-wrap: wrap;
    /* ให้ปุ่มอยู่ในแถวเดียวกันและหากเกินจะย้ายไปแถวถัดไป */
    justify-content: left;
    /* จัดตำแหน่งปุ่มให้อยู่กลาง */
  }

  .page-item {
    display: inline-block;
    /* ให้แสดงปุ่มในแนวนอน */
  }
</style>

<div class="container-fluid mt-4">
  <h3 style="color:#585858;"><i class="bi bi-book-half" style="color:#00adb0"></i> แบบทดสอบหลังเรียน</h3>

  <div class="card shadow-sm rounded-1" style="border: none;">
    <div class="card-body p-3">

      <div class="mb-3">
        <!-- ช่องแสดงความคืบหน้า -->
        <p class="m-0">ความคืบหน้า: <span id="progress-text">0/50 ข้อ</span></p>
        <!-- แสดงจำนวนข้อที่ทำเสร็จแล้ว -->
        <div class="progress mb-4">
          <div id="progress-bar" class="progress-bar bg-success" style="width: 0%">
            0%
          </div>
          <!-- แถบแสดงความคืบหน้า -->
        </div>
      </div>

      <div class="p-4">
        <!-- Question Display -->
        <div id="question-container" class="mb-3"></div>
        <!-- ช่องแสดงข้อสอบ -->
      </div>

      <!-- Pagination -->
      <nav aria-label="ข้อสอบ">
        <div class="row d-flex align-items-center">
          <!-- กล่องแถวสำหรับการจัดเรียงปุ่ม -->
          <div class="col-lg-2 col-sm-12 d-flex align-items-center justify-content-center;">
            <span id="timestamp" style="color:#e5e5e5;  text-align: left;">00.00</span>
          </div>
          <div class="col-lg-8 col-sm-12  d-flex align-items-center justify-content-center">
            <div class="pagination" id="page-numbers">
              <!-- ย้ายปุ่ม Next มาอยู่ใน div pagination -->
              <div class="page-item next-btn-container">
                <button class="page-link" onclick="nextQuestion()">ข้อถัดไป</button>
                <!-- ปุ่ม "Next" ที่จะไปยังข้อถัดไป -->
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-12">

          </div>
        </div>
        <!-- ช่องแสดงหมายเลขหน้าที่จะถูกสร้างจาก JavaScript -->
    </div>
    </nav>
  </div>
</div>



<script>
  const trueFalseQuestions = [{
      title: "ข้อที่ 1. ควรสวมหน้ากากกันสารเคมีทุกครั้งเมื่อทำงานเกี่ยวกับสี",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 2. การระบายอากาศที่ดีในพื้นที่ทำงานสีช่วยลดความเสี่ยงจากไอระเหยของสารเคมี",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 3. การสวมถุงมือและแว่นตาเป็นวิธีที่ช่วยป้องกันสารเคมีจากการสัมผัสกับผิวหนังและดวงตา",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 4. การเปิดหน้าต่างเพื่อระบายอากาศสามารถช่วยลดความเสี่ยงจากการสูดดมสารเคมีในขณะพ่นสีได้",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 5. การใช้งานเครื่องมือพ่นสีโดยไม่สวมอุปกรณ์ป้องกันส่วนบุคคล(PPE) อาจเป็นอันตรายได้",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 6. หากเครื่องพ่นสีเกิดการรั่วซึม ควรปล่อยให้ทำงานต่อไปจนกว่าจะเสร็จงาน",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 7. สีที่ใช้พ่นควรเก็บไว้ในที่ที่มีอุณหภูมิสูงเพื่อให้สามารถใช้งานได้ดี",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 8. การใช้สารเคมีในการทำงานสีควรอ่านและปฏิบัติตามคำแนะนำบนฉลากอย่างเคร่งครัด",
      answer: "ถูก",
    },
    {
      title: "ข้อที่ 9. การทำงานในพื้นที่ปิดที่ไม่มีการระบายอากาศอาจเพิ่มความเสี่ยงจากการเกิดไฟไหม้จากสารเคมีที่ใช้ในงานสี",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 10. หากสีเกิดการติดไฟ ควรใช้น้ำดับไฟทันทีเพื่อป้องกันการแพร่กระจายของไฟ",
      options: ["ถูก", "ผิด"],
    },
    {
      "title": "ข้อที่ 11. สามารถทิ้งกระป๋องสีที่ใช้หมดแล้วลงในถังขยะปกติได้ โดยไม่ต้องคำนึงถึงการกำจัดของเสียอันตราย",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 12. ควรตรวจสอบอุปกรณ์ป้องกันความปลอดภัย (PPE) ก่อนเริ่มงานทุกครั้ง เพื่อให้แน่ใจว่าอุปกรณ์อยู่ในสภาพพร้อมใช้งาน",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 13. ไม่จำเป็นต้องใช้แว่นตานิรภัยเมื่อพ่นสี เพราะสีไม่กระเด็นเข้าตา",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 14. หากเกิดการระคายเคืองที่ผิวหนังจากสี ควรล้างออกด้วยน้ำสะอาดและสบู่ทันที",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 15. การพ่นสีในพื้นที่ปิดโดยไม่มีระบบระบายอากาศที่ดี อาจทำให้เกิดการสะสมของไอระเหยที่ก่อให้เกิดอันตรายต่อระบบทางเดินหายใจ",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 16. สามารถเก็บกระป๋องสีที่เปิดใช้แล้วไว้ในที่ที่มีอุณหภูมิสูงหรือใกล้เปลวไฟได้",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 17. การใช้ถุงมือป้องกันสารเคมีเป็นสิ่งจำเป็นเมื่อทำงานกับสีประเภทน้ำมันและตัวทำละลาย",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 18. หากพบว่ามีสีหกเลอะพื้น ควรทำความสะอาดทันทีเพื่อลดความเสี่ยงในการลื่นล้ม",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 19. การใช้หน้ากากผ้าธรรมดาสามารถป้องกันไอระเหยของสารเคมีจากสีได้อย่างมีประสิทธิภาพ",
      options: ["ถูก", "ผิด"],
    },
    {
      title: "ข้อที่ 20. การใช้เครื่องพ่นสีต้องมีการปรับแรงดันอากาศให้เหมาะสมกับประเภทของสี ",
      options: ["ถูก", "ผิด"],
    },
  ];

  const multipleChoiceQuestions = [{
      title: "ข้อที่ 21. การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร?",
      options: [
        "ก. ทำให้สีแห้งเร็วขึ้น",
        "ข. ลดระยะเวลาในการพ่นสี",
        "ค. เพิ่มการยึดเกาะของสี",
        "ง. ป้องกันพื้นผิวจากความร้อน",
      ],
    },
    {
      title: "ข้อที่ 22. ในการพ่นสี ควรเลือกใช้อุปกรณ์ป้องกันส่วนบุคคล(PPE)ใด เพื่อป้องกันการสูดดมสารเคมีที่อาจเป็นอันตราย?",
      options: [
        "ก. หน้ากากผ้า",
        "ข. แว่นกันแดด",
        "ค. หมวกนิรภัย",
        "ง. หน้ากากกรองอากาศแบบไส้กรองมาตรฐาน",
      ],
    },
    {
      title: "ข้อที่ 23. สีรองพื้น(primer)มีหน้าที่อะไรในกระบวนการพ่นสี?",
      options: [
        "ก. ให้สีเงางาม",
        "ข. ปกป้องพื้นผิวจากสนิมและเพิ่มการยึดเกาะของสีทับหน้า",
        "ค. ให้ตกแต่งเพื่อความสวยงาม",
        "ง. ทำให้สีไม่หลุดลอก",
      ],
    },
    {
      title: "ข้อที่ 24. หากพ่นสีแล้วพบรอยคลื่นหรือฟองอากาศ ควรแก้ไขอย่างไร?",
      options: [
        "ก. พ่นสีเพิ่มทันที",
        "ข. ใช้ความร้อนเร่งให้ฟองอากาศแตก",
        "ค. พ่นสีใสเคลือบทับทันที",
        "ง. ปล่อยให้แห้งแล้วขัดพื้นผิวก่อนพ่นซ้ำ",
      ],
    },
    {
      title: "ข้อที่ 25. หน้ากากชนิดใดที่เหมาะสมที่สุดสำหรับการพ่นสีเพื่อป้องกันไอระเหยของสารเคมี?",
      options: [
        "ก. หน้ากากผ้า",
        "ข. หน้ากากอนามัยทางการแพทย์",
        "ค. หน้ากากกรองอากาศชนิดครึ่งหน้า(Half-face Respirator)พร้อมไส้กรอกสารเคมี",
        "ง. หน้ากากกันฝุ่นทั่วไป",
      ],
    },
    {
      title: "ข้อที่ 26. เครื่องมือใดที่ใช้ในการขัดผิวงานสีเพื่อให้พื้นผิวเรียบ?",
      options: [
        "ก. กระดาษทราย",
        "ข. เครื่องขัดแบบสั่น",
        "ค. แปรงทาสี",
        "ง. สเปรย์เคลือบ",
      ],
    },
    {
      title: "ข้อที่ 27. เครื่องมือใดที่ใช้ในการทาสีให้พื้นผิวที่มีขนาดกว้าง เช่น ผนัง?",
      options: [
        "ก. แปรงทาสี",
        "ข. ลูกกลิ้งทาสี",
        "ค. ปืนพ่นสี",
        "ง. ไม้พาย",
      ],
    },
    {
      title: "ข้อที่ 28. หากสีทาผนังไม่ติดพื้นผิว ควรทำอย่างไร?",
      options: [
        "ก. พ่นสีซ้ำ",
        "ข. ขัดและทำความสะอาดพื้นผิวก่อนทาสีใหม่",
        "ค. ใช้สีรองพื้นเพิ่มเติม",
        "ง. เพิ่มน้ำมันผสมสีเพื่อเพิ่มความยึดเกาะ",
      ],
    },
    {
      title: "ข้อที่ 29. การเลือกสีทาผนังภายในควรพิจารณาจากอะไรเป็นหลัก?",
      options: [
        "ก. ความทนทานต่อสภาพอากาศ",
        "ข. ความเงางามของสี",
        "ค. ความปลอดภัยและมิตรต่อสิ่งแวดล้อม",
        "ง. สีที่มีราคาถูก",
      ],
    },
    {
      title: "ข้อที่ 30. การใช้ปืนพ่นสีมีข้อดีอย่างไร?",
      options: [
        "ก. สามารถทาสีได้เร็ว",
        "ข. ใช้ในพื้นที่แคบได้ดี",
        "ค. ได้สีที่ละเอียดและสม่ำเสมอ",
        "ง. ใช้งานได้ในทุกสภาพอากาศ",
      ],
    },
    {
      title: "ข้อที่ 31. การทาสีด้วยแปรงมีข้อดีอย่างไร?",
      options: [
        "ก. ใช้ได้ดีในพื้นที่แคบ",
        "ข. ทาสีได้เร็วกว่าเครื่องมืออื่น",
        "ค. ทำให้ได้สีที่ละเอียดและเรียบ",
        "ง. ไม่ต้องใช้การเตรียมพื้นผิว",
      ],
    },
    {
      title: "ข้อที่ 32. หากสีทาผนังเกิดรอยร้าว ควรทำอย่างไร?",
      options: [
        "ก. พ่นสีทับทันที",
        "ข. ใช้วัสดุปิดรอยร้าวแล้วทาสีใหม่",
        "ค. ขัดผิวรอบรอยร้าวแล้วพ่นสี",
        "ง. ทาสีทับรอยร้าวโดยตรง",
      ],
    },
    {
      title: "ข้อที่ 33. อุปกรณ์ใดที่ใช้ในการพ่นสีที่มีคุณภาพสูง?",
      options: [
        "ก. ปืนพ่นสีอัตโนมัติ",
        "ข. เครื่องพ่นสีแบบใช้มือ",
        "ค. สเปรย์สีมืออาชีพ",
        "ง. เครื่องพ่นสีไฟฟ้า",
      ],
    },
    {
      title: "ข้อที่ 34. หากสีหลุดลอก ควรแก้ไขด้วยวิธีใด?",
      options: [
        "ก. ทาสีทับทันที",
        "ข. ขัดและทำความสะอาดพื้นที่หลุดลอกก่อนทาสีใหม่",
        "ค. ใช้สีรองพื้นเพิ่ม",
        "ง. ใช้แปรงขัดสี",
      ],
    },
    {
      title: "ข้อที่ 35. การใช้สารเคมีในการพ่นสีต้องมีการป้องกันอย่างไร?",
      options: [
        "ก. ใช้หน้ากากป้องกันสารเคมี",
        "ข. ใช้แว่นตากันแดด",
        "ค. ใส่ถุงมือป้องกันการสัมผัส",
        "ง. ทุกข้อข้างต้น",
      ],
    },
    {
      title: "ข้อที่ 36. เครื่องมือใดที่ใช้ในการทาสีในพื้นที่สูง?",
      options: [
        "ก. แปรงทาสี",
        "ข. ลูกกลิ้งทาสี",
        "ค. ปืนพ่นสี",
        "ง. ไม้พาย",
      ],
    },
    {
      title: "ข้อที่ 37. ในการพ่นสีเครื่องมือใดที่ใช้ในการควบคุมปริมาณสี?",
      options: [
        "ก. ปืนพ่นสี",
        "ข. เครื่องขัด",
        "ค. ลูกกลิ้ง",
        "ง. แปรงทาสี",
      ],
    },
    {
      title: "ข้อที่ 38. เมื่อทาสีเสร็จแล้ว ต้องทำอย่างไรเพื่อรักษาคุณภาพของสี?",
      options: [
        "ก. ทาสีทับซ้ำทันที",
        "ข. ปล่อยให้สีแห้งสนิทก่อนใช้งาน",
        "ค. ขัดพื้นผิวแล้วทาสีใหม่",
        "ง. ใช้น้ำมันเคลือบสี",
      ],
    },
    {
      title: "ข้อที่ 39. สีประเภทใดที่เหมาะสำหรับการทาพื้นภายใน?",
      options: [
        "ก. สีอะครีลิก",
        "ข. สีรองพื้น",
        "ค. สีโพลียูรีเทน",
        "ง. สีทาผิวไม้",
      ],
    },
    {
      title: "ข้อที่ 40. การพ่นสีในที่ที่มีความชื้นสูงต้องระวังเรื่องใดเป็นพิเศษ?",
      options: [
        "ก. ความหนืดของสี",
        "ข. ความเข้มข้นของสี",
        "ค. การแห้งของสี",
        "ง. ความเสถียรของสี",
      ],
    },
    {
      title: "ข้อที่ 41. การเลือกใช้เครื่องขัดสีควรพิจารณาจากอะไร?",
      options: [
        "ก. ขนาดของเครื่องขัด",
        "ข. ความเร็วในการหมุน",
        "ค. ประเภทของพื้นผิวที่ต้องการขัด",
        "ง. ทุกข้อข้างต้น",
      ],
    },
    {
      title: "ข้อที่ 42. หากพบปัญหาสีไม่ยึดติดกับพื้นผิว ควรทำอย่างไร?",
      options: [
        "ก. ทาสีทับ",
        "ข. ขัดพื้นผิวก่อนทาสี",
        "ค. ใช้สีรองพื้น",
        "ง. ล้างพื้นผิวให้สะอาด",
      ],
    },
    {
      title: "ข้อที่ 43. อุปกรณ์ใดที่ใช้ในการป้องกันอันตรายจากสีและสารเคมี?",
      options: [
        "ก. แว่นตากันแดด",
        "ข. เสื้อผ้าป้องกัน",
        "ค. หน้ากากกรองสารเคมี",
        "ง. เสื้อกันฝุ่น",
      ],
    },
    {
      title: "ข้อที่ 44. วิธีการแก้ไขสีหลุดลอกในกรณีที่ทาสีใหม่ไม่ติด?",
      options: [
        "ก. ใช้สีรองพื้น",
        "ข. ขัดผิวและทำความสะอาดก่อนทาสี",
        "ค. ใช้เครื่องพ่นสี",
        "ง. เพิ่มสารเคมีในสี",
      ],
    },
    {
      title: "ข้อที่ 45. หากพบว่าพื้นผิวหลังการทาสีมีฟองอากาศ ควรทำอย่างไร?",
      options: [
        "ก. พ่นสีทับ",
        "ข. ขัดพื้นผิวแล้วทาสีใหม่",
        "ค. ทิ้งให้แห้งก่อนขัด",
        "ง. ใช้เครื่องลมระบายอากาศ",
      ],
    },
    {
      title: "ข้อที่ 46. หากเกิดการระเบิดจากสารเคมีในการพ่นสี ควรทำอย่างไร?",
      options: [
        "ก. ใช้ถังดับเพลิงชนิดโฟม",
        "ข. ใช้ถังดับเพลิงชนิดผงเคมีแห้ง",
        "ค. ใช้น้ำฉีดเพื่อดับไฟ",
        "ง. วิ่งออกจากพื้นที่โดยไม่ต้องดับเพลิง",
      ],
    },
    {
      title: "ข้อที่ 47. เครื่องมือใดที่ใช้ในการทาสีพื้นผิวที่มีลวดลายซับซ้อน?",
      options: [
        "ก. แปรงทาสี",
        "ข. ลูกกลิ้งทาสี",
        "ค. ปืนพ่นสี",
        "ง. สเปรย์เคลือบ",
      ],
    },
    {
      title: "ข้อที่ 48. การเตรียมพื้นผิวก่อนทาสีในพื้นที่ภายนอก ควรทำอย่างไร?",
      options: [
        "ก. ขัดพื้นผิวให้เรียบ",
        "ข. ทำความสะอาดและล้างน้ำให้สะอาด",
        "ค. ใช้สีรองพื้น",
        "ง. ทุกข้อข้างต้น",
      ],
    },
    {
      title: "ข้อที่ 49. หากเกิดการแพ้สารเคมีจากการพ่นสี ควรทำอย่างไร?",
      options: [
        "ก. หยุดการทำงานทันทีและล้างบริเวณที่สัมผัสสารเคมี",
        "ข. ดื่มน้ำเพื่อขับสารเคมีออกจากร่างกาย",
        "ค. ใช้ยาฆ่าเชื้อที่ถูกต้อง",
        "ง. ไปพบแพทย์ทันที",
      ],
    },
    {
      title: "ข้อที่ 50. ในการพ่นสีที่มีพื้นที่กว้าง ควรใช้เครื่องมือใด?",
      options: [
        "ก. ปืนพ่นสีแบบมืออาชีพ",
        "ข. ปืนพ่นสีอัตโนมัติ",
        "ค. เครื่องพ่นสีแบบพกพา",
        "ง. ลูกกลิ้งทาสี",
      ],
    },
  ];

  const questions = [...trueFalseQuestions, ...multipleChoiceQuestions];
  const totalQuestions = questions.length; // จำนวนข้อสอบทั้งหมด
  let completed = 0; // จำนวนข้อที่ทำเสร็จ
  let currentPage = 1; // หน้าปัจจุบัน
  const maxVisiblePages = 3; // จำนวนข้อที่แสดงใน pagination
  let answeredQuestions = Array(totalQuestions).fill(false); // เก็บสถานะของคำตอบ

  function createPagination() {
    updatePagination();
  }

  function updatePagination() {
    const pageNumbers = document.getElementById("page-numbers");
    pageNumbers.innerHTML = "";

    // ตรวจสอบว่ากำลังใช้อุปกรณ์จอเล็กหรือไม่ (เช่น มือถือ)
    const isSmallScreen = window.innerWidth <= 1240;
    let startPage, endPage;

    if (isSmallScreen) {
      // แสดงแค่ 3 ตัวเลข
      startPage = Math.max(1, currentPage - 1); // ข้อก่อนหน้า (หรือข้อแรกถ้าเป็นข้อที่ 1)
      endPage = Math.min(totalQuestions, currentPage + 1); // ข้อถัดไป (หรือข้อสุดท้าย)
    } else {
      // แสดงตามปกติ (หลายข้อ)
      startPage = Math.max(1, Math.min(currentPage - Math.floor(maxVisiblePages / 2), totalQuestions - maxVisiblePages + 1));
      endPage = Math.min(startPage + maxVisiblePages - 1, totalQuestions);
    }

    for (let i = startPage; i <= endPage; i++) {
      const li = document.createElement("li");
      li.className = `page-item ${i === currentPage ? "active" : ""}`;

      const btn = document.createElement("button");
      btn.className = "page-link";
      btn.innerText = i;

      // ไม่ให้ย้อนกลับไปดูข้อที่ทำเสร็จแล้ว
      if (answeredQuestions[i - 1] || i !== currentPage) {
        btn.disabled = true;
      } else {
        btn.onclick = () => changePage(i);
      }

      // เปลี่ยนพื้นหลังของข้อที่ทำเสร็จแล้วให้เป็นสีเขียว แต่ขึ้นใน class "page-link"
      if (answeredQuestions[i - 1]) {
        btn.style.backgroundColor = "#c0c0c0"; // สีเทา
        btn.style.color = "white";
      }

      li.appendChild(btn);
      pageNumbers.appendChild(li);
    }

    // ปุ่ม "ข้อถัดไป"
    const nextBtnContainer = document.createElement("div");
    nextBtnContainer.className = "page-item next-btn-container";

    const nextBtn = document.createElement("button");
    nextBtn.id = "next-btn";
    nextBtn.className = "page-link";
    nextBtn.innerText = currentPage === totalQuestions ? "ส่งคำตอบ" : "ข้อถัดไป";
    nextBtn.style.color = "white";
    pageNumbers.appendChild(nextBtnContainer);
    if (currentPage === 50) {
      // ถ้าถึงข้อ 50 ให้เปลี่ยนเป็นปุ่มส่งคำตอบ
      // nextBtnContainer.innerHTML = `<button class="page-link submit-btn" style="background-color: green;color: white;" onclick="submitExam()">ส่งคำตอบ</button>`;
    } else {
      // ปกติแสดง "ข้อถัดไป"
      // nextBtnContainer.innerHTML = `<button class="page-link next-btn" style="background-color: green;color: white;"  onclick="nextQuestion()">ข้อถัดไป</button>`;
    }

    if (currentPage === totalQuestions) {
      nextBtn.onclick = submitExam;
    } else {
      nextBtn.onclick = nextQuestion;
    }

    nextBtnContainer.appendChild(nextBtn);
    pageNumbers.appendChild(nextBtnContainer);
  }


  function nextQuestion() {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');
    if (!selectedAnswer) {
      Swal.fire({
        icon: 'warning',
        title: 'กรุณาเลือกคำตอบก่อนจะไปข้อถัดไป',
        confirmButtonText: 'ตกลง',
        confirmButtonColor: 'green',
      });
      return;
    }
    answeredQuestions[currentPage - 1] = true; // บันทึกว่าทำเสร็จ
    completed++;
    // อัปเดต progress bar
    const progress = (completed / totalQuestions) * 100;
    document.getElementById("progress-bar").style.width = progress + "%";
    document.getElementById("progress-bar").innerText = Math.round(progress) + "%";
    document.getElementById("progress-text").innerText = completed + "/" + totalQuestions + " ข้อ";
    updatePagination(); // อัปเดต pagination


    setTimeout(() => {
      let nextUnanswered = answeredQuestions.findIndex(ans => !ans);
      if (nextUnanswered !== -1) {
        changePage(nextUnanswered + 1);
      } else {
        Swal.fire({
          icon: 'success',
          title: 'คุณทำข้อสอบครบทุกข้อแล้ว!',
          text: 'ยืนยันการส่งคำตอบ',
          confirmButtonText: 'ตกลง',
          confirmButtonColor: 'green',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'answer_maincontent.php';
          }
        });
      }
    }, 100);
  }

  function enableNextButton() {
    const nextBtn = document.getElementById("next-btn");
    nextBtn.disabled = false;
    nextBtn.style.backgroundColor = "green";
    nextBtn.onclick = nextQuestion;
  }

  function changePage(page) {
    if (page < 1 || page > totalQuestions) return;
    currentPage = page; // เปลี่ยนไปที่หน้าใหม่
    displayQuestion(page); // แสดงข้อสอบ
    updatePagination(); // อัพเดต pagination
  }

  function displayQuestion(page) {
    const questionContainer = document.getElementById("question-container");
    const question = questions[page - 1];
    const isAnswered = answeredQuestions[page - 1];

    const handleOptionClick = (event) => {
      const radio = event.currentTarget.querySelector("input[type='radio']");
      if (radio && !radio.disabled) {
        radio.checked = true;
        enableNextButton();
        updateOptionStyles(); // อัพเดตสีพื้นหลัง
      }
    };

    if (page <= 20) {
      questionContainer.innerHTML = `
            <h3>${question.title}</h3>
            <div class="option" style="font-size: 20px;" onclick="handleOptionClick(event)">
                <input type="radio" name="answer" value="true" ${isAnswered ? "disabled" : ""}> ถูก
            </div>
            <div class="option" style="font-size: 20px;" onclick="handleOptionClick(event)">
                <input type="radio" name="answer" value="false" ${isAnswered ? "disabled" : ""}> ผิด
            </div>
        `;
    } else {
      questionContainer.innerHTML = `
            <h3>${question.title}</h3>
            <ul>
                ${question.options.map((option, index) => `
                    <div class="option" style="font-size: 20px;" onclick="handleOptionClick(event)">
                        <input type="radio" name="answer" value="${option}" ${isAnswered ? "disabled" : ""}> ${option}
                    </div>
                `).join('')}
            </ul>
        `;
    }

    document.querySelectorAll(".option").forEach(option => {
      option.addEventListener("click", handleOptionClick);
    });
  }
  // ฟังก์ชันอัพเดตสีพื้นหลังของตัวเลือกที่ถูกเลือก
  function updateOptionStyles() {
    document.querySelectorAll('.option').forEach(option => {
      const radio = option.querySelector("input[type='radio']");
      option.style.backgroundColor = radio.checked ? "#bee5e5" : "";
    });
  }
  // เพิ่ม event listener หลังจากโหลดตัวเลือกเสร็จ
  document.querySelectorAll(".option").forEach(option => {
    option.addEventListener("click", handleOptionClick);
  });


  function startTimer(display) {
    var timer = 0,
      minutes, seconds;
    var interval = setInterval(function() {
      minutes = Math.floor(timer / 60);
      seconds = timer % 60;

      // แปลงค่าเป็น 2 หลัก
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      // แสดงผลในรูปแบบ mm.ss
      display.textContent = minutes + "." + seconds;

      timer++;
    }, 1000);
  }

  function submitExam() {
    Swal.fire({
      icon: 'info',
      title: 'ส่งคำตอบสำเร็จ!',
      text: 'คำตอบของคุณถูกส่งแล้ว',
      confirmButtonText: 'ตกลง',
      confirmButtonColor: 'green',
    }).then(() => {
      window.location.href = 'answer_maincontent.php';
    });
  }

  window.onload = function() {
    var display = document.querySelector('#timestamp'); // เปลี่ยนเป็น id="timestamp"
    startTimer(display);
    loadQuestion(currentQuestionIndex);
  };
  createPagination(); // เรียกฟังก์ชันเพื่อสร้าง pagination เมื่อโหลดหน้าเว็บ
  displayQuestion(currentPage); // แสดงข้อสอบแรกเมื่อโหลดหน้าเว็บ
</script>
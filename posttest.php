<div class="container-fluid mt-4">
  <h3 style="color:#585858;"><i class="bi bi-book-half" style="color:#00adb0"></i> บทเรียนที่ 1 แบบทดสอบหลังเรียน</h3>
</div>
<div class="container mt-3 mb-4">
  <div class="card shadow-sm rounded-1" style="border: none;">
    <div class="card-body p-5">
      <div class="stepper-wrapper">
        <div class="stepper-item active">
          <div class="step-counter">1</div>
        </div>

        <div class="stepper-item">
          <div class="step-counter">2</div>
        </div>

        <div class="stepper-item">
          <div class="step-counter">3</div>
        </div>

        <div class="stepper-item">
          <div class="step-counter">4</div>
        </div>

        <div class="stepper-item">
          <div class="step-counter">5</div>
        </div>
      </div>

      <div id="quiz-container">
        <h4 id="question-title">ข้อที่ 1 การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร?</h4>
        <div class="options-container" style="font-size: 20px;">
          <div class="option">
            <input type="radio" name="question1" value="1"> 1. ทำให้สีแห้งเร็วขึ้น
          </div>
          <div class="option">
            <input type="radio" name="question1" value="2"> 2. ลดระยะเวลาในการพ่นสี
          </div>
          <div class="option">
            <input type="radio" name="question1" value="3"> 3. เพิ่มการยึดเกาะของสี
          </div>
          <div class="option">
            <input type="radio" name="question1" value="4"> 4.ป้องกันพื้นผิวจากความร้อน
          </div>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col">
          <div class="col text-end">
            <button type="button" class="btn btn-outline-success" id="next-button">ข้อต่อไป</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  const questions = [
    {
      title: "ข้อที่ 1 การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร?",
      options: [
        "1. ทำให้สีแห้งเร็วขึ้น",
        "2. ลดระยะเวลาในการพ่นสี",
        "3. เพิ่มการยึดเกาะของสี",
        "4.ป้องกันพื้นผิวจากความร้อน"
      ]
    },
    {
      title: "ข้อที่ 2 ในการพ่นสี ควรเลือกใช้อุปกรณ์ป้องกันส่วนบุคคล(PPE)ใด เพื่อป้องกันการสูดดมสารเคมีที่อาจเป็นอันตราย?",
      options: [
        "1. หน้ากากผ้า",
        "2. แว่นกันแดด",
        "3. หมวกนิรภัย",
        "4. หน้ากากกรองอากาศแบบไส้กรองมาตรฐาน"
      ]
     
    },
    {
      title: "ข้อที่ 3 สีรองพื้น(primer)มีหน้าที่อะไรในกระบวนการพ่นสี?",
      options: [
        "1. ให้สีเงางาม",
        "2. ปกป้องพื้นผิวจากสนิมและเพิ่มการยึดเกาะของสีทับหน้า",
        "3. ให้ตกแต่งเพื่อความสวยงาม",
        "4. ทำให้สีไม่หลุดลอก"
      ]
    },
    {
      title: "ข้อที่ 4 หากพ่นสีแล้วพบรอยคลื่นหรือฟองอากาศ ควรแก้ไขอย่างไร?",
      options: [
        "1. พ่นสีเพิ่มทันที",
        "2. ใช้ความร้อนเร่งให้ฟองอากาศแตก",
        "3. พ่นสีใสเคลือบทับทันที",
        "4. ปล่อยให้แห้งแล้วขัดพื้นผิวก่อนพ่นซ้ำ"
      ]
    },
    {
      title: "ข้อที่ 5 หน้ากากชนิดใดที่เหมาะสมที่สุดสำหรับการพ่นสีเพื่อป้องกันไอระเหยของสารเคมี?",
      options: [
        "1. หน้ากาผ้า",
        "2. หน้ากากอนามันทางการแพทย์",
        "3. หน้ากากกรองอากาศชนิดครึ่งหน้า(Half-face Respirator)พร้อมไส้กรอกสารเคมี",
        "4. หน้ากากกันฝุ่นทั่วไป"
      ]
    }
  ];

  let currentQuestionIndex = 0;

  function loadQuestion(index) {
    const question = questions[index];
    const questionTitle = document.getElementById('question-title');
    const optionsContainer = document.querySelector('.options-container');

    questionTitle.textContent = question.title;
    optionsContainer.innerHTML = '';

    question.options.forEach((option, i) => {
      const optionDiv = document.createElement('div');
      optionDiv.classList.add('option');
      optionDiv.innerHTML = `<input type="radio" name="question${index + 1}" value="${i + 1}"> ${option}`;
      optionDiv.addEventListener('click', () => {
        document.querySelectorAll('.option').forEach(opt => opt.classList.remove('selected'));
        optionDiv.classList.add('selected');
        optionDiv.querySelector('input[type="radio"]').checked = true; // Select the radio button
        nextButton.classList.add('enabled');
        nextButton.removeAttribute('disabled');

        // Update stepper item
        const stepperItems = document.querySelectorAll('.stepper-item');
        stepperItems.forEach((item, idx) => {
          item.classList.remove('selected');
          if (idx <= index) {
            item.classList.add('selected');
            item.classList.add('completed');
            if (idx > 0) {
              stepperItems[idx - 1].classList.add('completed');
            }
          }
        });
      });
      optionsContainer.appendChild(optionDiv);
    });

    // Update stepper item
    const stepperItems = document.querySelectorAll('.stepper-item');
    stepperItems.forEach((item, idx) => {
      item.classList.remove('active');
      if (idx === index) {
        item.classList.add('active');
      }
    });
    if (index === questions.length - 1) {
      nextButton.textContent = 'ส่งคำตอบ';
    } else {
      nextButton.textContent = 'ข้อต่อไป';
    }

    nextButton.classList.remove('enabled');
    nextButton.setAttribute('disabled', 'true');
  }

  const nextButton = document.getElementById('next-button');

  nextButton.addEventListener('click', () => {
    if (currentQuestionIndex < questions.length - 1) {
      currentQuestionIndex++;
      loadQuestion(currentQuestionIndex);

      // Update stepper item
      const stepperItems = document.querySelectorAll('.stepper-item');
      stepperItems.forEach((item, index) => {
        item.classList.remove('active');
        if (index <= currentQuestionIndex) {
          item.classList.add('active');
          item.classList.add('completed');
          item.querySelector('.step-counter').style.backgroundColor = '#00adb0';
        }
      });
    } else {
      Swal.fire({
      allowOutsideClick: false,
      icon:'success',
      title:'ทำข้อสอบหลังเรียนเสร็จแล้ว!',
      text:'กรุณายืนยันคำตอบ',
      confirmButtonText:'ตกลง',
      confirmButtonColor:'green'
     }).then((result) =>{
      window.location.href = 'answer_maincontent.php'; // ไปหน้าเรียน
     })
    }
  });

  function startTimer(duration, display) {
    var timer = duration,
      minutes, seconds;
    setInterval(function() {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);

      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = minutes + ":" + seconds;

      if (--timer < 0) {
        clearInterval(setInterval);
        alert('หมดเวลาทำข้อสอบ')
      }
    }, 1000);
  }

  window.onload = function() {
    var fiveMinutes = 60 * 10, //คูณนาที่ที่ให้นับถอยหลัง
      display = document.querySelector('#timer');
    startTimer(fiveMinutes, display);
    loadQuestion(currentQuestionIndex);
  };

    $(document).ready(function() {
      Swal.fire({
        allowOutsideClick: false,
        confirmButtonColor:'green',
        html: `<div style="text-align: left;">
          <h3 style="color: black;">สอบหลังเรียน บทเรียนที่ 1</h3>
          <p style="font-size: 18px;">เรื่อง ความปลอดภัยของการพ่นสี</p>
          <hr>
          <div class="row">
              <label style="font-size: 18px;">แผนก : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สี</label>
          </div>
          <div class="row">
              <label style="font-size: 18px;">จำนวน : &nbsp;&nbsp;&nbsp; 5 ข้อ</label>
          </div>
          <div class="row">
              <label style="font-size: 18px;">เวลา : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 นาที</label>
          </div>
        </div>`,
        preConfirm: () => {
          var fiveMinutes = 60 * 10, //คูณนาที่ที่ให้นับถอยหลัง
            display = document.querySelector('#timer');
          startTimer(fiveMinutes, display);
        }
      });
    });
</script>
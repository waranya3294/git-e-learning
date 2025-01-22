<div class="container mt-4">
  <h3 style="color:#585858;"><i class="bi bi-book-half" style="color:#00adb0;"></i> บทเรียนที่ 1 แบบทดสอบหลังเรียน</h3>
</div>
<div class="container mb-4">
  <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;">
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
        <h4>ข้อที่ 1 การเตรียมพื้นผิวก่อนพ่นสีมีวัตถุประสงค์หลักเพื่ออะไร?</h4>
        <div class="options-container" style="font-size: 20px;">
          <div class="option">
            <input type="radio" name="question1" value="1"> 1. ป้องกันพื้นผิวจากความร้อน
          </div>
          <div class="option">
            <input type="radio" name="question1" value="2"> 2. ทำให้สีแห้งเร็วขึ้น
          </div>
          <div class="option">
            <input type="radio" name="question1" value="3"> 3. เพิ่มการยึดเกาะของสี
          </div>
          <div class="option">
            <input type="radio" name="question1" value="4"> 4. ลดระยะเวลาในการพ่นสี
          </div>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col">
          <div id="timer" class="timer" style="font-size: 20;">00:00</div>
        </div>
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
  const options = document.querySelectorAll('.option');
  const nextButton = document.getElementById('next-button');
  const stepperwrapper = document.getElementById('stepper-wrapper');


  options.forEach(option => {
    option.addEventListener('click', () => {
      options.forEach(opt => opt.classList.remove('selected'));
      option.classList.add('selected');

      const radioInput = option.querySelector('input[type="radio"]');
      if (radioInput) {
        radioInput.checked = true;
      }

      nextButton.classList.add('enabled');
      nextButton.removeAttribute('disabled');

      // Update stepper item
      const stepperItems = document.querySelectorAll('.stepper-item');
      stepperItems.forEach(item => item.classList.remove('selected'));
      const activeItem = document.querySelector('.stepper-item.active');
      if (activeItem) {
        activeItem.classList.add('selected');
      }
    });
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
    $(document).ready(function() {
      Swal.fire({
        allowOutsideClick: false,
        confirmButtonColor:'#6633CC;',
        html: `<div style="text-align: left;">
          <h3 style="color: blue;">สอบหลังเรียน บทเรียนที่ 1</h3>
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
  };
</script>
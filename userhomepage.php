<div class="container mt-4">
    <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;">
        <div class="card-body">
            <h3 style="color:blue">สอบก่อนเรียน บทเรียนที่ 1 </h3>
            <p style="font-size:20px;">เรื่อง ความปลอดภัยของการพ่นสี</p>
            <hr>
            <div class="row">
                <label style=font-size:20px;">แผนก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สี</label>
            </div>

            <div class="row">
                <label style="font-size:20px;">จำนวน&nbsp;&nbsp;&nbsp; 5 ข้อ</label>
            </div>
            <div class="row">
                <label style="font-size:20px;">เวลา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 นาที</label>
            </div>

            <div class="row">
                <div class="col text-center">
                    <button type="summit" class="btn btn-outline-success rounded-pill" style="font-size:18px;" onclick="window.location.href='examination_maincontent.php'">เริ่มทำแบบทดสอบก่อนเรียน</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function() {
    Swal.fire({
      allowOutsideClick: false,
      width: 700,
      confirmButtonColor:'#3CB371',
      html: `<div class="row">
        <div class="col text-start">
            <h3>&nbsp;&nbsp;<u>คำอธิบายรายวิชา</u></h3>
            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>วัตถุประสงค์ของการเรียน</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. เพื่อเรียนรู้ทฤษฎีพื้นฐานและการปฏิบัติเกี่ยวกับการพ่นสี<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. เพื่อพัฒนาทักษะในการเลือกและใช้อุปกรณ์สำหรับการพ่นสี<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. เพื่อเรียนรู้เรื่องความปลอดภัยและสิ่งแวดล้อมในการทำงาน
            </p>
            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ผลที่คาดว่าจะได้รับ</b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. พนักงานมีความรู้พื้นฐานและทักษะในการพ่นสี<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. พนักงานสามารถเลือกอุปกรณ์และวัสดุได้เหมาะสมกับงาน<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. พนักงานมีความตระหนักในเรื่องความปลอดภัยและสิ่งแวดล้อมในการทำงาน
            </p>

            <h3 >&nbsp;&nbsp;<u>คำชี้แจง</u></h3>
            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ศึกษาบทเรียน อ่านหรือฟังเนื้อหาที่จัดเตรียมเกี่ยวกับหัวข้อการพ่นสี<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ทำแบบทดสอบก่อนเรียน (Pre-Test)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. เลือกคำตอบที่ถูกต้อง 1 ข้อ<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. ใช้เวลาในการศึกษาบทเรียนให้ครบถ้วนภายใน 1 ชั่วโมง<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. จำนวนข้อสอบทั้งหมด 5 ข้อ (ปรนัย)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. ทำแบบทดสอบหลังเรียน (Post-Test)
            </p>

            <p class="text-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;** ข้อกำหนดเพิ่มเติมสำหรับการทดสอบและการเรียนรู้</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>กรณีสอบผ่าน:</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ผู้เรียนสามารถเข้าสู่บทเรียนถัดไปได้ทันที<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>กรณีสอบไม่ผ่าน:</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ผู้เรียนจะต้องกลับไปเริ่มเรียนเนื้อหาบทนั้นใหม่<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- หลังจากเรียนซ้ำ สามารถเข้าสอบซ่อมได้อีก 1 ครั้งเท่านั้น
            </p>
        </div>
    </div>`,

      confirmButtonText: 'ต่อไป',
    })
  });

  // function startTimer(duration, display) {
  //           var timer = duration, minutes, seconds;
  //           setInterval(function () {
  //               minutes = parseInt(timer / 60, 10);
  //               seconds = parseInt(timer % 60, 10);

  //               minutes = minutes < 10 ? "0" + minutes : minutes;
  //               seconds = seconds < 10 ? "0" + seconds : seconds;

  //               display.textContent = minutes + ":" + seconds;

  //               if (--timer < 0) {
  //                   timer = duration;
  //               }
  //           }, 1000);
  //       }

  //       window.onload = function () {
  //           var fiveMinutes = 60 * 10, //คูณนาที่ที่ให้นับถอยหลัง
  //               display = document.querySelector('#timer');
  //           startTimer(fiveMinutes, display);
  //       };
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>หน้าแรก</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- sweetalert -->
  <script src="assets/lib/sweetalert/sweetalert.js"></script>

  <!-- jQuery -->
  <script src="assets/lib/jquery/jquery-3.6.0.min.js"></script>
  <!-- DateRangePicker CSS -->
  <link rel="stylesheet" href="assets/lib/jquery/daterangepicker.css">
  <!-- DateRangePicker JS -->
  <script src="assets/lib/jquery/data_moment.main.js"></script>
  <script src="assets/lib/jquery/daterangepicker.min.js"></script>


  <!-- fontawsome -->
  <link rel="stylesheet" href="assets/lib/fontawsome/css/brands.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/solid.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/regular.css">
  <link rel="stylesheet" href="assets/lib/fontawsome/css/fontawesome.css">
  <style>
    @font-face {
      font-family: "Kanit";
      font-weight: 400;
      font-style: normal;
      src: url(assets/lib/fonts/Kanit/Kanit-Regular.ttf);
    }

    * {
      font-family: "Kanit", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    body {
      background-image: url('images/3.png');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      animation: fadeIn 1s ease-in-out;
    }

    .card {
      width: 100%;
      max-width: 400px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(15px);
      border: 2px solid rgb(255, 255, 255, 0.3);
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card p-4">
      <div class="card-body text-center">
        <img class="img-fluid mb-3 mt-3" src="images/logo.png" alt="">
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-sm" id="floatingInput" name="floatingInput" placeholder="name@example.com">
          <label for="floatingInput"><i class="fa-solid fa-user me-2"></i>User</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control form-control-sm" id="floatingPassword" name="floatingPassword" placeholder="Password">
          <label for="floatingPassword"><i class="fa-solid fa-key me-2"></i> Password</label>
        </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <button type="submit" class="btn btn-login fw-bold text-white" style="background-color: rgba(0, 179, 192, 1);" type="submit" onclick="window.location.href='dashboard_maibcontent.php'">
              <i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ
            </button>
          </div>
        </div>
        <div class="mt-3">
          <a href="#" class="text-primary" onclick="showReserve()"><ins>จองคิวสอบ</ins></a>
        </div>
      </div>
    </div>
  </div>

  <script>
    async function fetchEmployeeData(empId) {
      // จำลองข้อมูลพนักงาน
      const employeeData = {
        "1001": {
          name: "สมชาย ใจดี",
          department: "สี",
          factory: "TS"
        },
        "1002": {
          name: "มานะ มั่นคง",
          department: "ประกอบ",
          factory: "TS"
        },
        "1003": {
          name: "สุภาพร สายใจ",
          department: "เชื่อม",
          factory: "PD"
        },
      };

      return employeeData[empId] || null;
    }

    async function showReserve() {
      const {
        value: date
      } = await Swal.fire({
        backdrop: false,
        title: "เลือกวันสอบ",
        html: `
             <div class="row mb-3">
        <div class="col-lg-12">
            <select class="form-control" id="exam_id">
                <option value="">-- เลือกรอบวันสอบ--</option>
                <option value="exam1">ความปลอดภัยของการพ่นสี (24 กุมภาพันธ์ 2568 - 31 มีนาคม 2568)</option>
                <option value="exam1">ประเภทของการพ่นสี (24 กุมภาพันธ์ 2568 - 31 มีนาคม 2568)</option>
                <option value="exam2">Test</option>
                <option value="exam3">Test</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-12 text-start">
            <label for="datetimes">จองคิวสอบ <span class="text-danger">*</span></label>
            <div class="input-group">
                <input type="text" id="datetimes" name="datetimes" class="form-control" required placeholder="เลือกช่วงเวลา" aria-describedby="exam_starttime">
                <span class="input-group-text" id="exam_starttime" style="cursor: pointer;">
                    <i class="fa-solid fa-calendar-days"></i>
                </span>
            </div>
        </div>
    </div>`,
        didOpen: () => {
          document.body.style.overflow = "hidden"; // ป้องกันการเลื่อนของ body
        },
        willClose: () => {
          document.body.style.overflow = "auto"; // คืนค่าเดิมเมื่อปิด Swal
        },
        showCancelButton: false,
        confirmButtonColor: "green",
        confirmButtonText: "ถัดไป",
        cancelButtonText: "ยกเลิก",
        preConfirm: () => {
          const exam_id = $("#exam_id").val();
          const datetimes = $("#datetimes").val();

          if (!exam_id) {
            Swal.showValidationMessage("กรุณาเลือกรอบวันสอบ!");
          }
          if (!datetimes) {
            Swal.showValidationMessage("กรุณาเลือกวันที่สอบ!");
          }

          if (!exam_id || !datetimes) {
            return false; // ป้องกันการปิด Swal
          }

          return {
            exam_id,
            datetimes
          };
        },
        didOpen: () => {
          // ซ่อนช่องเลือกวันที่เริ่มต้น
          $("#datetimes").closest(".row").hide();

          // เมื่อมีการเปลี่ยนค่าใน select รอบสอบ
          $("#exam_id").on("change", function() {
            const examId = $(this).val();

            if (examId) {
              // แสดงช่องเลือกวัน
              $("#datetimes").closest(".row").show();

              // เปิดใช้งาน DatePicker
              $("#datetimes").daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                minDate: moment(),
                locale: {
                  format: "DD/MM/YYYY",
                  daysOfWeek: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส"],
                  monthNames: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                    "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
                  ]
                }
              });

              $("#datetimes").on("apply.daterangepicker", function(ev, picker) {
                $(this).val(picker.startDate.format("DD/MM/YYYY"));
              });

              $("#datetimes").on("cancel.daterangepicker", function(ev, picker) {
                $(this).val("");
              });

            } else {
              // ซ่อนช่องเลือกวันถ้ายังไม่เลือกรอบสอบ และเคลียร์ค่า
              $("#datetimes").val("").closest(".row").hide();
            }
          });

          // เปิด DatePicker เมื่อกดไอคอน 📅 (ถ้าเลือกรอบสอบแล้ว)
          $("#exam_starttime").on("click", function() {
            if ($("#exam_id").val()) {
              $("#datetimes").focus();
            } else {
              Swal.showValidationMessage("กรุณาเลือกรอบวันสอบก่อน!");
            }
          });
        }
      });
      const {
        value: empData
      } = await Swal.fire({
        backdrop: false,
        title: "กรอกรหัสพนักงาน",
        html: `
            <input type="text" id="id_input" class="swal2-input" placeholder="รหัสพนักงาน" onkeyup="validateID(event)"> 
            <p id="id_warning" style="color: red; display: none;">กรุณากรอกตัวเลขเท่านั้น</p>
            <div id="emp_info"></div>
        `,
        didOpen: () => {
          document.body.style.overflow = "hidden"; // ป้องกันการเลื่อนของ body
        },
        willClose: () => {
          document.body.style.overflow = "auto"; // คืนค่าเดิมเมื่อปิด Swal
        },
        showCancelButton: true,
        confirmButtonColor: "green",
        confirmButtonText: "ยืนยัน",
        cancelButtonText: "ยกเลิก",
        preConfirm: async () => {
          let empIdInput = document.getElementById("id_input").value;
          if (!empIdInput || isNaN(empIdInput)) {
            Swal.showValidationMessage("กรุณากรอกรหัสพนักงานที่เป็นตัวเลข");
            return false;
          }

          let empData = await fetchEmployeeData(empIdInput);
          if (!empData) {
            Swal.showValidationMessage("ไม่พบข้อมูลพนักงาน");
            return false;
          }
          return {
            empId: empIdInput,
            ...empData
          };
        }
      });

      if (!empData) return;

      Swal.fire({
        backdrop: false,
        title: 'จองคิวสอบสำเร็จ',
        icon: 'success',
        timer: 3000,
        showConfirmButton: false
      });

      console.log("วันสอบที่เลือก:", date);
      console.log("รหัสพนักงาน:", editedData.empId);
      console.log("ชื่อ:", editedData.name);
      console.log("แผนก:", editedData.department);
      console.log("โรงงาน:", editedData.factory);
    }

    function validateID(event) {
      let idInput = document.getElementById("id_input").value;
      let warningText = document.getElementById("id_warning");
      let empInfo = document.getElementById("emp_info");

      if (isNaN(idInput) || idInput.trim() === "") {
        warningText.style.display = "block";
        empInfo.innerHTML = "";
      } else {
        warningText.style.display = "none";
        fetchEmployeeData(idInput).then(data => {
          if (data) {
            empInfo.innerHTML = `
                     <div class="row ">
        <div class="col-md-12 col-lg-12 text-start mb-3">
            <label class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" id="emp_name_preview" class="form-control" value="${data.name}" readonly>
        </div>
        <div class="col-md-12 col-lg-12 text-start mb-3">
            <label class="form-label">แผนก</label>
            <input type="text" id="emp_department_preview" class="form-control" value="${data.department}" readonly>
        </div>
        <div class="col-md-12 col-lg-12 text-start mb-3">
            <label class="form-label">โรงงาน</label>
            <input type="text" id="emp_factory_preview" class="form-control" value="${data.factory}" readonly>
        </div>
    </div>`;
          } else {
            empInfo.innerHTML = "<span style='color: red;'>ไม่พบข้อมูลพนักงาน</span>";
          }
        });
      }
      // กด Enter เพื่อกดยืนยัน
      if (event.key === "Enter") {
        document.querySelector(".swal2-confirm").click();
      }
    }
  </script>
</body>

</html>
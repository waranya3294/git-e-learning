<div class="container mt-4">
  <div class="card shadow-sm rounded-0">
    <div class="card-header rounded-0 text-white text-start" style="background-color: #18B0BD;">
      <h4 class="m-0">ฟอร์มเลือกข้อมูลการสอบ</h4>
    </div>
    <div class="card-body">
      <div class="card rounded-0 ">
        <div class="card-body" style="height: 300px;">
          <div class="row">
            <!-- เลือกประเภทการสอบ -->
            <div class="col-md-4 mb-3">
              <label for="examType" class="fw-bold" style="font-size: 20px;"> เลือกประเภทการสอบ <span class="text-danger">*</span></label>
              <select class="form-select" id="examType">
                <option selected>--เลือกประเภทการสอบ--</option>
                <option value="1">สี</option>
                <option value="2">เชื่อม</option>
                <option value="3">ประกอบ</option>
                <option value="4">CNC</option>
              </select>
            </div>

            <!-- เลือกโรงงาน -->
            <div class="col-md-4 mb-3">
              <label for="factory" class="fw-bold" style="font-size: 20px;">เลือกโรงงาน <span class="text-danger">*</span></label>
              <select class="form-select" id="factory">
                <option selected>--เลือกโรงงาน--</option>
                <option value="1">TS (ตาสิทธิ์)</option>
                <option value="2">PD (ปลวกแดง)</option>
                <option value="3">ทั้งหมด</option>
              </select>
            </div>

            <!-- เลือกจุดปฏิบัติงาน -->
            <div class="col-md-4">
              <label class="fw-bold" style="font-size: 20px;">เลือกจุดปฏิบัติงาน <span class="text-danger">*</span></label>
              <div id="section" class="border rounded p-2">
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="topcoat">
                  <label class="form-check-label" for="topcoat">Top coat</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="smallpart">
                  <label class="form-check-label" for="smallpart">Small Part</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="undercoat">
                  <label class="form-check-label" for="undercoat">Under Coat</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="finalpaint">
                  <label class="form-check-label" for="finalpaint">Final Paint</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="painting">
                  <label class="form-check-label" for="painting">Painting</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="selectAll">
                  <label class="form-check-label" for="selectAll">เลือกทั้งหมด</label>
                </div>
              </div>
              <div id="selectedSections" class="mt-2"></div>

              <div id="assembly" class="border rounded p-2" style="display: none;">
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="35 Ton">
                  <label class="form-check-label" for="35 Ton">35 Ton</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="20 Ton">
                  <label class="form-check-label" for="20 Ton">20 Ton</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="upper line">
                  <label class="form-check-label" for="upper line">Upper line</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="lower sub">
                  <label class="form-check-label" for="lower sub">Lower Sub</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="test&label">
                  <label class="form-check-label" for="test&label">Test&Label</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="selectAll">
                  <label class="form-check-label" for="selectAll">เลือกทั้งหมด</label>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="mt-3">
        <label for="datetimes" class="fw-bold" style="font-size: 20px;">เลือกวันที่: <span class="text-danger">*</span></label>
        <div class="row " id="dateFieldsContainer">
          <div class="col-lg-6 d-flex align-items-center">
            <div class="input-group mb-2">
              <input type="text" id="datetimes" name="datetimes" class="form-control" required placeholder="เลือกช่วงเวลา" aria-describedby="exam_starttime_endtime">
              <span class="input-group-text" id="exam_starttime_endtime" style="cursor: pointer;">
                <i class="fa-solid fa-calendar-days"></i>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col text-center mt-4">
          <button class="btn btn-lg btn-secondary me-3" id="generatePDF"><i class="fa-solid fa-magnifying-glass"></i> แสดงข้อมูล</button>
          <button class="btn btn-lg btn-success" id="downloadBtn"><i class="fa-solid fa-download"></i> ดาวน์โหลด</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(function() {
    // ตั้งค่าภาษาไทยใน moment.js
    moment.locale('th');

    // ตั้งค่า Date Range Picker
    $('input[name="datetimes"]').daterangepicker({
      timePicker: true,
      startDate: moment().startOf('hour'),
      endDate: moment().startOf('hour').add(32, 'hour'),
      locale: {
        format: 'DD/MM/YYYY',
        applyLabel: 'ตกลง',
        cancelLabel: 'ยกเลิก',
        fromLabel: 'จาก',
        toLabel: 'ถึง',
        daysOfWeek: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
          'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
        ],
        firstDay: 1
      }
    });

    // ซ่อน/แสดงตัวเลือกจุดปฏิบัติงานตามประเภทการสอบ
    $('#examType').change(function() {
      if ($(this).val() == '1') { // ถ้าเลือกประเภทการสอบเป็น "สี"
        $('#section').show();
        $('#assembly').hide();
      } else if ($(this).val() == '3') { // ถ้าเลือกป���ะเภทการสอบเป็น "ประกอบ"
        $('#section').hide();
        $('#assembly').show();
      } else {
        $('#section').hide();
        $('#assembly').hide();
      }
    });

    $('#section').hide(); // ซ่อนโดยเริ่มต้น
    $('#assembly').hide(); // ซ่อนโดยเริ่มต้น

    // ปุ่ม "เลือกทั้งหมด"
    $('#selectAll').click(function() {
      $('input[type="checkbox"]').prop('checked', this.checked);
    });
  });

  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("generatePDF").addEventListener("click", function() {
      const {
        jsPDF
      } = window.jspdf;
      const doc = new jsPDF({
        orientation: 'landscape'
      }); // ตั้งค่ากระดาษแนวนอน

      // ดึงค่าที่ผู้ใช้เลือกมาแสดงบนหัวกระดาษ
      let examType = $('#examType option:selected').text();
      let factory = $('#factory option:selected').text();
      let dateRange = $('input[name="datetimes"]').val();

      // ดึงค่าจุดปฏิบัติงานที่เลือก
      let selectedSections = [];
      $('#section input[type="checkbox"]:checked').each(function() {
        selectedSections.push($(this).next('label').text());
      });
      $('#assembly input[type="checkbox"]:checked').each(function() {
        selectedSections.push($(this).next('label').text());
      });
      let section = selectedSections.join(', ');

      // โหลดฟอนต์ภาษาไทย
      fetch('assets/lib/fonts/sarabun/Sarabun-Regular.ttf')
        .then(response => response.arrayBuffer())
        .then(buffer => {
          const base64Font = btoa(String.fromCharCode(...new Uint8Array(buffer)));
          doc.addFileToVFS("Sarabun-Regular.ttf", base64Font);
          doc.addFont("Sarabun-Regular.ttf", "Sarabun", "normal");
          doc.setFont("Sarabun");

          // หัวกระดาษ
          doc.setFontSize(16);
          doc.text("E-learning Report", 14, 10);
          doc.setFontSize(12);
          doc.text(`ประเภทการสอบ: ${examType}`, 14, 20);
          doc.text(`โรงงาน: ${factory}`, 14, 30);
          doc.text(`จุดปฏิบัติงาน: ${section}`, 14, 40);
          doc.text(`ช่วงวันที่: ${dateRange}`, 14, 50);

          // สร้างตารางข้อมูล
          const headers = [
            ["#", "รหัสพนักงาน", "ชื่อ - นามสกุล", "ตำแหน่ง", "ฝ่าย", "แผนก", "จุดปฏิบัติงาน", "โรงงาน", "วันที่จอง", "รอบเวลา", "สถานะ"]
          ];
          const data = [
            ["1", "3811", "นาย วิทยา ลอยอากาศ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Top Coat", "TS", "25/02/2025", "09:00 - 10:00", "จองสอบ"],
            ["2", "3768", "นาย วีระศักดิ์  คงชูดี  ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Top Coat", "TS", "25/02/2025", "09:00 - 10:00", "สอบผ่าน"],
            ["3", "3790", "นาย เทวัน  บุญยะบุตร ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Final Paint 20 Ton", "TS", "25/02/2025", "09:00 - 10:00", "สอบผ่าน"],
            ["4", "3804", "นาย อนุวัฒน์  โถทอง ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Final Paint 35 Ton", "TS", "25/02/2025", "09:00 - 10:00", "สอบไม่ผ่าน"],
            ["5", "0549", "นาย สนิท เงาใส ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Final Paint 35 Ton", "TS", "25/02/2025", "09:00 - 10:00", "ไม่มาสอบ"]
          ];

          // ใช้ autoTable สร้างตาราง รองรับภาษาไทย พร้อมเส้นขอบ
          doc.autoTable({
            head: headers,
            body: data,
            startY: 60,
            styles: {
              font: "Sarabun",
              lineWidth: 0.1
            },
            headStyles: {
              fillColor: false,
              textColor: 0
            },
            bodyStyles: {
              fontSize: 10,
              lineColor: 0,
              lineWidth: 0.1
            },
            tableLineColor: 0,
            tableLineWidth: 0.1
          });

          // แสดง PDF โดยไม่ต้องดาวน์โหลด
          const pdfData = doc.output('datauristring');
          const pdfWindow = window.open();
          pdfWindow.document.write('<html><body><iframe width="100%" height="100%" src="' + pdfData + '"></iframe></body></html>');
        });

    });
  });

  // เพิ่ม Event Listener ให้กับปุ่มดาวน์โหลด
  document.getElementById("downloadBtn").addEventListener("click", function() {
    // ดึงค่าจากฟอร์มที่ผู้ใช้เลือก
    let examType = $('#examType option:selected').text(); // ประเภทการสอบ
    let factory = $('#factory option:selected').text(); // โรงงานที่เลือก
    let dateRange = $('input[name="datetimes"]').val(); // ช่วงวันที่ที่เลือก

    // ดึงค่าจุดปฏิบัติงานที่ถูกเลือก
    let selectedSections = [];
    $('#section input[type="checkbox"]:checked').each(function() {
      selectedSections.push($(this).next('label').text()); // เพิ่มชื่อจุดปฏิบัติงานลงในอาร์เรย์
    });
    $('#assembly input[type="checkbox"]:checked').each(function() {
      selectedSections.push($(this).next('label').text()); // เพิ่มชื่อจุดปฏิบัติงานลงในอาร์เรย์
    });
    let section = selectedSections.join(', '); // รวมชื่อจุดปฏิบัติงานที่เลือกทั้งหมด

    // สร้างข้อมูลสำหรับไฟล์ Excel
    const data = [
      ["ประเภทการสอบ", "โรงงาน", "จุดปฏิบัติงาน", "ช่วงวันที่"], // หัวตาราง
      [examType, factory, section, dateRange], // ข้อมูลจากฟอร์ม
      [], // เว้นว่าง 1 แถว
      ["#", "รหัสพนักงาน", "ชื่อ - นามสกุล", "ตำแหน่ง", "ฝ่าย", "แผนก", "จุดปฏิบัติงาน", "โรงงาน", "วันที่จอง", "รอบเวลา", "สถานะ"], // หัวตารางข้อมูลพนักงาน
      ["1", "3811", "นาย วิทยา ลอยอากาศ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Top Coat", "TS", "25/02/2025", "09:00 - 10:00", "จองสอบ"],
      ["2", "3768", "นาย วีระศักดิ์  คงชูดี  ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Top Coat", "TS", "25/02/2025", "09:00 - 10:00", "สอบผ่าน"],
      ["3", "3790", "นาย เทวัน  บุญยะบุตร ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Final Paint 20 Ton", "TS", "25/02/2025", "09:00 - 10:00", "สอบผ่าน"],
      ["4", "3804", "นาย อนุวัฒน์  โถทอง ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Final Paint 35 Ton", "TS", "25/02/2025", "09:00 - 10:00", "สอบไม่ผ่าน"],
      ["5", "0549", "นาย สนิท เงาใส ", "Painter", "Manufacturing", "Manufacturing Tasith Factory", "Final Paint 35 Ton", "TS", "25/02/2025", "09:00 - 10:00", "ไม่มาสอบ"]
    ];

    // แปลงข้อมูลที่สร้างขึ้นเป็น Worksheet ของ Excel
    const ws = XLSX.utils.aoa_to_sheet(data); // สร้างแผ่นงานจากอาร์เรย์ข้อมูล
    const wb = XLSX.utils.book_new(); // สร้าง workbook ใหม่
    XLSX.utils.book_append_sheet(wb, ws, "รายงานพนักงาน"); // เพิ่มแผ่นงานลงใน workbook พร้อมตั้งชื่อว่า "รายงานพนักงาน"

    // ดาวน์โหลดไฟล์ Excel โดยตั้งชื่อไฟล์ว่า "รายงานพนักงาน.xlsx"
    XLSX.writeFile(wb, "รายงานพนักงาน.xlsx");

    // แสดงข้อความใน Console เพื่อยืนยันว่าปุ่มถูกคลิกแล้ว
    console.log("downloadBtn");
  });
</script>
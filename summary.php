<div class="container-fluid mt-4">
  <div class="card shadow-sm rounded-1 mb-3" style="border: none;">
    <div class="card-body">
      <div class="row">
        <div class="col d-flex align-items-center">
          <h3>รวมผลคะแนนรายบุคคล</h3>
          <button id="solution-btn" class="btn btn-warning ms-3" onclick="window.location.href='answer_maincontent.php'" style="display: none;">ดูเฉลย</button>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table id="example" class="table table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center"><b>หัวข้อ/รายละเอียด</b></th>
                  <th class="text-center"><b>สถานะ/คะแนน</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>บทเรียนที่ 1 ความปลอดภัยของการพ่นสี</td>
                  <td class="text-center"><span class="badge bg-success bg-opacity-25" style="color: black;">เรียนแล้ว</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 2 เครื่องมือและอุปกรณ์</td>
                  <td class="text-center"><span class="badge bg-success bg-opacity-25" style="color: black;">เรียนแล้ว</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 3 การทำงาน/แก้ไขปัญหา</td>
                  <td class="text-center"><span class="badge bg-success bg-opacity-25" style="color: black;">เรียนแล้ว</span></td>
                </tr>
                <tr>
                  <td>แบบทดสอบหลังเรียน</td>
                  <td id="total-post" class="text-center"></td>
                </tr>
                <tr>
                  <td id="percentage" class="align-middle">คิดเป็นร้อยละ</td>
                  <td id="status" class="text-center"></td>
                </tr>
                <tr>
                  <td>เวลาที่ใช้ในการทำแบบทดสอบ</td>
                  <td class="text-center"><i class="fa-regular fa-clock"></i> 1 ชั่วโมง 30 นาที</td>
                </tr>
                <tr>
                  <td>รวมเวลาที่ใช้ในการเรียนและทำแบบทดสอบ</td>
                  <td class="text-center"><i class="fa-regular fa-clock"></i> 2 ชั่วโมง 30 นาที</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- ส่วนแสดงผลลัพธ์-->
      <div id="result-section" class="mt-4 text-center">
        <div class="row mb-4">
          <div class="col-lg-6">
            <div class="card" style="width: 100%;" id="chart-card1">
              <div class="card-body">
                <h5 class="card-title">คะแนนรวม</h5>
                <div id="chart1" style="height: 400px;"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="card" style="width: 100%;" id="chart-card2">
              <div class="card-body">
                <h5 class="card-title">เวลาที่ใช้ไปทั้งหมด</h5>
                <div id="chart2" style="height: 400px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <button id="retry-button" class="btn text-center btn-danger mb-3" style="display: none; margin: 0 auto;" onclick="showRetryButton()">เริ่มเรียนใหม่</button>
  </div>

  <script>
    let table = new DataTable('#example', {
      paging: false, // ปิดการแบ่งหน้า
      searching: false, // ปิดการค้นหา
      autoWidth: false, // ป้องกันการปรับขนาดอัตโนมัติ
      sorting: false,
      language: {
        url: "assets/lib/dataTables/language.json",
        info: ""
      }
    });
    document.addEventListener("DOMContentLoaded", function() {
      let postTotal = 42; // คะแนนที่ได้
      let maxTotal = 50; // คะแนนเต็ม
      let percentage = (postTotal / maxTotal) * 100;

      document.getElementById('total-post').innerText = postTotal + ' คะแนน';
      document.getElementById('percentage').innerText = 'คิดเป็นร้อยละ ' + percentage.toFixed(2) + '%';
      document.getElementById('status').innerHTML = percentage >= 80 ?
        '<h4><span class="badge bg-success">ผ่าน</span></h4>' :
        '<h4><span class=" badge badge-lg bg-danger ">ไม่ผ่าน</span></h4>';

      if (percentage >= 80) {
        document.getElementById('solution-btn').style.display = 'inline-block';
      } else {
        $("#result-section").addClass('d-none');
        document.getElementById('retry-button').style.display = 'block';
      }

      // เรียกใช้งานกราฟ
      showChart(postTotal, maxTotal);
    });

    function showChart(postTotal, maxTotal) {
      document.getElementById('chart-card1').style.display = 'block';

      var radialBarOptions = {
        series: [(postTotal / maxTotal) * 100], // แสดงคะแนนรวมแทนเปอร์เซ็นต์
        chart: {
          height: 350,
          type: 'radialBar',
          toolbar: {
            show: true
          }
        },
        plotOptions: {
          radialBar: {
            startAngle: -135,
            endAngle: 225,
            hollow: {
              size: '70%'
            },
            dataLabels: {
              value: {
                formatter: val => `${postTotal} / ${maxTotal}`, // แสดงคะแนน
                fontSize: '36px'
              }
            }
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
            stops: [0, 100]
          }
        },
        stroke: {
          lineCap: 'round'
        },
        labels: ['คะแนนรวม'],
      };

      var radialBarChart = new ApexCharts(document.querySelector("#chart1"), radialBarOptions);
      radialBarChart.render();

      var options = {
        series: [{
          name: 'Test Time', // Time spent on tests
          data: [90, 150] // Time in minutes (1 hour 30 minutes = 90 mins, 2 hours 30 minutes = 150 mins)
        }],
        chart: {
          height: 350,
          type: 'bar',
          stacked: true, // Stacked bars
          events: {
            click: function(chart, w, e) {
              // Handle click event
              // console.log(chart, w, e)
            }
          }
        },
        colors: ['#ff6347', '#4caf50'], // Color for Study Time and Test Time
        plotOptions: {
          bar: {
            columnWidth: '45%',
            distributed: true,
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function(val) {
            var hours = Math.floor(val / 60);
            var minutes = val % 60;
            return hours + ' ชั่วโมง ' + minutes + ' นาที'; // Convert minutes to hours and minutes
          }
        },
        legend: {
          show: true // Show legend to distinguish the two series
        },
        xaxis: {
          categories: [
            ['เวลาในการ', 'เรียนและทดสอบทั้งหมด'],
            ['เวลาในการ', 'ทำแบบทดสอบ'],
          ],
          labels: {
            style: {
              colors: ['#ff6347', '#4caf50'],
              fontSize: '12px'
            }
          }
        }
      };

      var chart = new ApexCharts(document.querySelector("#chart2"), options);
      chart.render();
    }

    function showRetryButton() {
      document.getElementById('retry-button').style.display = 'block';
      document.getElementById('retry-button').onclick = function() {
        Swal.fire({
          text: 'กำลังไปยังหน้าบทเรียน',
          showConfirmButton: false,
          timerProgressBar: true,
          timer: 2000
        }).then(() => {
          window.location.href = 'learning_maincontent.php'; // เปลี่ยน URL ไปหน้าเรียน
        });
      };
    }
  </script>
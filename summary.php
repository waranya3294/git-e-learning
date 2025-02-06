<div class="container-fluid mt-4">
  <div class="card shadow-sm rounded-1 mb-3" style="border: none;">
    <div class="card-body">
      <div class="row">
        <div class="col d-flex align-items-center">
          <h3>รวมผลคะแนนรายบุคคล</h3>
          <div class="btn btn-warning ms-3">ดูเฉลย</div>
        </div>
      </div>
      <div class="row ">
        <div class="col">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th><b>บทเรียน</b></th>
                  <th><b>คะแนนสอบ</b></th>
                  <th><b>เวลาที่ทำ</b></th>
                  <th><b>สถานะ</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>บทเรียนที่ 1 ความปลอดภัยของการพ่นสี</td>
                  <td data-post="5">5 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 60 นาที </td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 2</td>
                  <td data-post="3">3 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 1 ชั่วโมง 30 นาที </td>
                  <td class="text-center"><span class="badge text-bg-danger " style="font-size:14px;">ไม่ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 3</td>
                  <td data-post="5">5 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 1 ชั่วโมง 30 นาที </td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 4</td>
                  <td data-post="4">4 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 1 ชั่วโมง 30 นาที </td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr>
                  <td>บทเรียนที่ 5</td>
                  <td data-post="4">5 คะแนน</td>
                  <td><i class="fa-regular fa-clock"></i> 30 นาที </td>
                  <td class="text-center"><span class="badge text-bg-success " style="font-size:14px;">ผ่าน</span></td>
                </tr>
                <tr id="summary-row" style="background-color:rgb(255, 255, 255); font-weight: bold;">
                  <th><b>รวมคะแนน</b></th>
                  <th id="total-post"><b></b></th>
                  <th id="percentage" class="text-center"><b></b></th>
                  <th id="status" class="text-center"><b></b></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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
            <h5 class="card-title">เวลาที่ใช้ไป</h5>
            <div id="chart2" style="height: 400px;"></div>
          </div>
        </div>
      </div>
    </div>
    <button id="retry-button" class="btn text-center btn-danger" style="display: none; margin: 0 auto;">เริ่มเรียนใหม่</button>
  </div>
</div>

<script>
  let table = new DataTable('#example', {
    paging: false, // ปิดการแบ่งหน้า
    searching: false, // ปิดการค้นหา
    autoWidth: false, // ป้องกันการปรับขนาดอัตโนมัติ
    language: {
      url: "assets/lib/dataTables/language.json",
      info: ""
    }
  });

  function calculateTotal() {
  let postTotal = 0,
      maxTotal = 0,
      totalMinutes = 0;
  let timeData = [];

  document.querySelectorAll('#example tbody tr:not(#summary-row)').forEach(row => {
    const post = parseInt(row.querySelector('[data-post]')?.getAttribute('data-post')) || 0;
    const timeText = row.querySelector('td:nth-child(3)')?.innerText;
    
    let minutes = 0;
    if (timeText) {
      const hoursMatch = timeText.match(/(\d+)\s*ชั่วโมง/);
      const minutesMatch = timeText.match(/(\d+)\s*นาที/);

      if (hoursMatch) minutes += parseInt(hoursMatch[1]) * 60;
      if (minutesMatch) minutes += parseInt(minutesMatch[1]);
    }

    if (post) {
      postTotal += post;
      maxTotal += 5;
    }
    totalMinutes += minutes;
    timeData.push(minutes);
  });

  const totalPercentage = (postTotal / maxTotal) * 100;
  const statusText = totalPercentage >= 80 ?
    '<span class="badge text-bg-success" style="font-size:14px;">ผ่าน</span>' :
    '<span class="badge text-bg-danger" style="font-size:14px;">ไม่ผ่าน</span>';

  document.getElementById('total-post').innerText = postTotal + ' คะแนน';
  document.getElementById('percentage').innerText = 'คิดเป็นร้อยละ ' + totalPercentage.toFixed(2) + '%';
  document.getElementById('status').innerHTML = statusText;

  // แสดงหรือซ่อนปุ่มดูเฉลย
  let solutionButton = document.querySelector('.btn-warning');
  solutionButton.style.display = totalPercentage >= 80 ? 'inline-block' : 'none';

  // ซ่อนหรือแสดงการ์ดคะแนนรวมและเวลาที่ใช้
  let chartCard1 = document.getElementById('chart-card1');
  let chartCard2 = document.getElementById('chart-card2');

  if (totalPercentage >= 80) {
    chartCard1.style.display = 'block';
    chartCard2.style.display = 'block';
    showChart(postTotal, maxTotal, totalMinutes, timeData);
  } else {
    chartCard1.style.display = 'none';
    chartCard2.style.display = 'none';
    showRetryButton();
  }
}
  function showChart(postTotal, maxTotal, totalMinutes, timeData) {
    let totalPercentage = (postTotal);

    document.getElementById('chart-card1').style.display = 'block';
    document.getElementById('chart-card2').style.display = 'block';

    let colors = ['#00adb0', '#006400', '#32CD32', '#2E8B57', '#606060'];

    // กราฟคะแนนรวม
    var radialBarOptions = {
      series: [totalPercentage],
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
              formatter: val => `${parseInt(val)} คะแนน`,
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

    // กราฟเวลาที่ใช้
    var barChartOptions = {
      series: [{
        data: timeData // ใช้เวลาในแต่ละบทเรียน
      }],
      chart: {
        height: 350,
        type: 'bar',
        toolbar: {
          show: true
        }
      },
      colors: colors,
      plotOptions: {
        bar: {
          columnWidth: '45%',
          distributed: true,
        }
      },
      dataLabels: {
        formatter: val => {
          let hours = Math.floor(val / 60); // คำนวณจำนวนชั่วโมง
          let minutes = val % 60; // คำนวณจำนวนที่เหลือเป็นนาที
          return `${hours} ชั่วโมง ${minutes} นาที`; // แสดงผลในรูปแบบ "x ชั่วโมง y นาที"
        }
      },
      dataLabels: {
        enabled: false
      },
      legend: {

      },
      xaxis: {
        categories: [
          'บทเรียนที่ 1',
          'บทเรียนที่ 2',
          'บทเรียนที่ 3',
          'บทเรียนที่ 4',
          'บทเรียนที่ 5',
        ],
        labels: {
          style: {
            colors: colors,
            fontSize: '12px'
          }
        }
      }
    };

    var barChart = new ApexCharts(document.querySelector("#chart2"), barChartOptions);
    barChart.render();
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
  window.onload = calculateTotal;
</script>
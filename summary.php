<div class="container mt-3">
  <div class="card shadow-sm rounded-1 mb-3" style="border: none;border-top: 4px solid #00adb0;">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h3>รวมผลคะแนนรายบุคคล</h3>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col">
          <table id="data-table" class="table table-bordered" style="color:blue">
            <thead>
              <tr style="font-size:20px">
                <th><b>บทเรียน</b></th>
                <th><b>คะแนนก่อนสอบ</b></th>
                <th><b>คะแนนหลังสอบ</b></th>
                <th><b>เวลาที่ทำ</b></th>
                <th><b>สถานะ</b></th>
              </tr>
              <tr>
                <th>บทเรียนที่ 1 ความปลอดภัยของการพ่นสี</th>
                <th>5 คะแนน </th>
                <th>5 คะแนน</th>
                <th><i class="fa-regular fa-clock"></i> 8 นาที</th>
                <th style="color:green;"><i class="fa-solid fa-check"></i></th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="container mt-3">
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm" style="border: none;border-top: 4px solid #00adb0;">
        <div class="card-body">
          <h4>ช่วงคะแนนสอบของผู้สอบทั้งหมด</h4>
          <div id="chartdiv" style=" width: 100%; height: 500px;"></div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm" style="border: none;border-top: 4px solid #00adb0;">
        <div class="card-body">
          <h4>ช่วงคะแนนสอบของผู้สอบทั้งหมด</h4>
         
        </div>
      </div>
    </div>
  </div>
</div> -->

<script>
  // // am5.ready(function() {

  //   var root = am5.Root.new("chartdiv");
  //   root._logo.dispose();
  //   root.setThemes([
  //     am5themes_Animated.new(root)
  //   ]);

  //   var chart = root.container.children.push(am5xy.XYChart.new(root, {
  //     panX: true,
  //     panY: true,
  //     wheelX: "panX",
  //     wheelY: "zoomX",
  //     pinchZoomX: true,
  //     paddingLeft: 0,
  //     paddingRight: 1
  //   }));

  //   var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
  //   cursor.lineY.set("visible", false);

  //   var xRenderer = am5xy.AxisRendererX.new(root, {
  //     minGridDistance: 30,
  //     minorGridEnabled: true
  //   });

  //   xRenderer.labels.template.setAll({
  //     rotation: -90,
  //     centerY: am5.p50,
  //     centerX: am5.p100,
  //     paddingRight: 15
  //   });

  //   xRenderer.grid.template.setAll({
  //     location: 1
  //   })

  //   var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  //     maxDeviation: 0.3,
  //     categoryField: "country",
  //     renderer: xRenderer,
  //     tooltip: am5.Tooltip.new(root, {})
  //   }));

  //   var yRenderer = am5xy.AxisRendererY.new(root, {
  //     strokeOpacity: 0.1
  //   })

  //   var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  //     maxDeviation: 0.3,
  //     renderer: yRenderer
  //   }));

  //   var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  //     name: "Series 1",
  //     xAxis: xAxis,
  //     yAxis: yAxis,
  //     valueYField: "value",
  //     sequencedInterpolation: true,
  //     categoryXField: "country",
  //     tooltip: am5.Tooltip.new(root, {
  //       labelText: "{valueY}"
  //     })
  //   }));

  //   series.columns.template.setAll({
  //     cornerRadiusTL: 5,
  //     cornerRadiusTR: 5,
  //     strokeOpacity: 0
  //   });
  //   series.columns.template.adapters.add("fill", function(fill, target) {
  //     return chart.get("colors").getIndex(series.columns.indexOf(target));
  //   });

  //   series.columns.template.adapters.add("stroke", function(stroke, target) {
  //     return chart.get("colors").getIndex(series.columns.indexOf(target));
  //   });
    
  //   // Set data
  //   var data = [{
  //     country: "1",
  //     value: 20
  //   }, {
  //     country: "2",
  //     value: 40
  //   }, {
  //     country: "3",
  //     value: 100
  //   }, {
  //     country: "4",
  //     value: 30
  //   }, {
  //     country: "5",
  //     value: 4
  //   }, {
  //     country: "6",
  //     value: 11
  //   }, {
  //     country: "7",
  //     value: 30
  //   }, {
  //     country: "8",
  //     value: 10
  //   }, {
  //     country: "9",
  //     value: 3
  //   }, {
  //     country: "10",
  //     value: 0
  //   }, {
  //     country: "11",
  //     value: 40
  //   }, {
  //     country: "12",
  //     value: 100
  //   }, {
  //     country: "13",
  //     value: 30
  //   }, {
  //     country: "14",
  //     value: 4
  //   }, {
  //     country: "15",
  //     value: 11
  //   }, {
  //     country: "16",
  //     value: 30
  //   }, {
  //     country: "17",
  //     value: 10
  //   }, {
  //     country: "18",
  //     value: 3
  //   }, {
  //     country: "20",
  //     value: 0
  //   }, {
  //     country: "21",
  //     value: 0
  //   }, {
  //     country: "22",
  //     value: 30
  //   }, {
  //     country: "23",
  //     value: 4
  //   }, {
  //     country: "24",
  //     value: 11
  //   }, {
  //     country: "25",
  //     value: 30
  //   }, {
  //     country: "26",
  //     value: 10
  //   }, {
  //     country: "27",
  //     value: 3
  //   }, {
  //     country: "28",
  //     value: 0
  //   }, {
  //     country: "29",
  //     value: 0
  //   }, {
  //     country: "30",
  //     value: 0
  //   }];

  //   xAxis.data.setAll(data);
  //   series.data.setAll(data);


  //   // Make stuff animate on load
  //   // https://www.amcharts.com/docs/v5/concepts/animations/
  //   series.appear(1000);
  //   chart.appear(1000, 100);

  // });
</script>
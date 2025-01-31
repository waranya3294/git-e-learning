<!-- <style>
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        /* transform: translateY(-10px); */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .icon-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    #chartdiv {
        width: 100%;
        height: 500px;
    }
</style>
</head> -->

<div class="container mt-4">
    <div class="card shadow-sm rounded">
        <div class="card-body">
            <h4><b>Dashboard</b></h4>
            <hr>
            <div class="row">
                <div class="col-md-4 mt-2">
                    <div class="card card-hover" onclick="window.location.href='room_maincontent.php'" style="background-color: #DDF2D1; border: none; cursor: pointer;">
                        <i class="bi bi-card-heading p-3 icon-shadow" style="font-size: 2rem;color:green;"></i>
                        <div class="card-body p-3" style="font-size:18px;color:green;">
                            <b style="font-size:24px;">สร้างห้องสอบ</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card card-hover" onclick="window.location.href='examform_maincontent.php'" style="background-color:#c9f7f5; border: none; cursor: pointer">
                        <i class="bi bi-card-heading p-3 icon-shadow" style="font-size: 2rem;"></i>
                        <div class="card-body p-3" style="font-size:18px;color:blue;">
                            <b style="font-size:24px;">สร้างเนื้อหา</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card card-hover" onclick="window.location.href='examgroup_maincontent.php'" style="background-color:#ffe2e5; border: none; cursor: pointer">
                        <i class="bi bi-trophy-fill p-3 icon-shadow" style="font-size: 2rem;color:red;"></i>
                        <div class="card-body p-3" style="font-size:18px;color:red">
                            <b style="font-size:24px;">สร้างข้อสอบ</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4><b>ปฏิทินการสอบ</b></h4>
                            <div class="ui container mt-3">
                                <div class="ui grid">
                                    <div class="ui sixteen column">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4><b>สถิติห้องสอบ</b></h4>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card rounded-1 shadow-sm" style="border: none;border-top: 4px solid #00adb0;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4><b>ปฏิทินการสอบ</b></h4>
                        <div id="calendar" style="height: 800px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;">
                    <div class="card-body" style="height: 400px;">
                        <div class="row">
                            <div class="col">
                                <h4><b>จองคิวสอบ</b></h4>
                            </div>
                        </div>
                        <div class="row justify-content-center p-3">
                        <div class="col text-end">
                            <select class="from-control" id="">
                                <option value="">--เลือกโรงงาน--</option>
                                <option value="">PD</option>
                                <option value="">TS</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card shadow-sm rounded-1 mb-2" style="border: none;border-top: 4px solid #00adb0;">
                    <div class="card-body">
                        <h4 style="cursor: pointer"><b>สถิติห้องสอบ</b></h4>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <div class="card card " style="background-color:#fff4de; border: none; cursor: pointer">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style=" font-size: 2rem; color:orange;"> สี</i>
                                    <div class="card-body p-3" style="font-size:26px;color:orange"><b>0 ชุด</b></div>
                                    <div class="card-body p-3" style="font-size:18px;color:orange">
                                        <b>ชุดข้อสอบทั้งหมด </b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="card card-hover" style="background-color:#ffe2e6; border: none; cursor: pointer">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:red;">เชื่อม</i>
                                    <div class="card-body p-3" style="font-size:26px;color:red"><b>0 ชุด</b></div>
                                    <div class="card-body p-3" style="font-size:18px;color:red;">
                                        <b>ชุดข้อสอบทั้งหมด</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-md-6 mt-3">
                                <div class="card card" style="background-color:#e1f0ff; border: none; cursor: pointer">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style=" font-size: 2rem; color:#00a12b;"> ประกอบ</i>
                                    <div class="card-body p-3" style="font-size:26px;color:#00a12b"><b>0 ชุด</b></div>
                                    <div class="card-body p-3" style="font-size:18px;color:#00a12b">
                                        <b>ชุดข้อสอบทั้งหมด</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="card card" style="background-color:#c9f7f5; border: none; cursor: pointer">
                                    <i class="bi bi-envelope-paper-fill p-3 icon-shadow" style="font-size: 2rem; color:blue;"> CNC</i>
                                    <div class="card-body p-3" style="font-size:26px;color:blue;"><b>0 ชุด</b></div>
                                    <div class="card-body p-3" style="font-size:18px;color:blue;;">
                                        <b>ชุดข้อสอบทั้งหมด</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <h3><b>จองคิวสอบ</b></h3>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm rounded">
                <div class="card-body" style="height: 500px">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm rounded">
                <div class="card-body" style="height: 500px">
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- สรุปผลการสอบ -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card shadow-sm rounded-1" style="border: none;border-top: 4px solid #00adb0;">
                    <div class="card-body" style="height: 400px;">
                        <div class="row">
                            <div class="col">
                                <h4><b>สรุปผลการสอบ</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container mt-4 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h3><b>สถิติห้องสอบ</b></h3>
            </div>

            <div class="table-responsive mt-3">
                <table id="data-table" class="table table-bordered">
                    <thead>
                        <tr class="text-center" style="font-size:18px;">
                            <th><b>ประเภท</b></th>
                            <th><b>จำนวนผู้เข้าสอบ</b></th>
                            <th><b>สอบเสร็จแล้ว</b></th>
                            <th><b>ยังไม่สอบ</b></th>
                            <th><b>ผ่าน</b></th>
                            <th><b>ไม่ผ่าน</b></th>
                            <th><b>ดู</b></th>
                        </tr>
                    </thead>
                    <tr class="text-center" style="font-size:18px;cursor: pointer">
                        <th>สี</th>
                        <th>100</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th><span class="badge text-bg-success"><i class="bi bi-eye-fill"></i></span></th>
                    </tr>
                    <tr class="text-center" style="font-size:18px;cursor: pointer">
                        <th>เชื่อม</th>
                        <th>100</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th><span class="badge text-bg-success"><i class="bi bi-eye-fill"></i></span></th>
                    </tr>
                    <tr class="text-center" style="font-size:18px;cursor: pointer">
                        <th>ประกอบ</th>
                        <th>100</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th><span class="badge text-bg-success"><i class="bi bi-eye-fill"></i></span></th>
                    </tr>
                    <tr class="text-center" style="font-size:18px;cursor: pointer">
                        <th>CNC</th>
                        <th>100</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th><span class="badge text-bg-success"><i class="bi bi-eye-fill"></i></span></th>
                    </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- 
<div class="container mt-4 mb-4 p-0">
    <div class="col mt-3 ">
        <div class="card shadow-sm rounded" style="border: none;">
            <div class="card-body">
                <h4><b>ผลรวมจำนวนคนเข้าสอบทั้งหมด</b></h>
                    <div id="chartdiv"></div>
            </div>
        </div>
    </div>
</div> -->

<!-- 
<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '2025-01-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [{
                    title: 'สอบสี',
                    start: '2025-02-03',
                    end: '2025-02-05',
                    color: '#1E90FF',
                },
                {
                    title: 'สอบความปลอดภัยของการพ่นสี',
                    start: '2025-02-07',
                    end: '2025-02-15',
                    color: 'green',
                },
                {
                    title: 'เชื่อม',
                    start: '2025-02-07',
                    end: '2025-02-11',
                    color: '#9933FF',
                },
                {
                    title: 'สอบประกอบ',
                    start: '2025-02-28',
                    color: '#3CB371',
                }
            ],
            eventClick: function(event) {
                Swal.fire({
                    title: event.title,
                    text: event.description,
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: "green",
                });
            }
        });
    });

    am5.ready(function() {
        var root = am5.Root.new("chartdiv");
        // เอาโลโก้ออก
        root._logo.dispose();

        // import Calendar from '@toast-ui/calendar';
        // import '@toast-ui/calendar/dist/toastui-calendar.min.css';
        // const Calendar = require('@toast-ui/calendar');
        // require('@toast-ui/calendar/dist/toastui-calendar.min.css');
        // const Calendar = tui.Calendar;
        // const calendar = new Calendar('#calendar', {
        //     usageStatistics: false,
        //     defaultView: 'week',
        //     template: {
        //         time(event) {
        //             const {
        //                 start,
        //                 end,
        //                 title
        //             } = event;

        //             return `<span style="color: white;">${formatTime(start)}~${formatTime(end)} ${title}</span>`;
        //         },
        //         allday(event) {
        //             return `<span style="color: gray;">${event.title}</span>`;
        //         },
        //     },
        //     calendars: [{
        //             id: 'cal1',
        //             name: 'Personal',
        //             backgroundColor: '#03bd9e',
        //         },
        //         {
        //             id: 'cal2',
        //             name: 'Work',
        //             backgroundColor: '#00a9ff',
        //         },
        //     ],
        // });


        am5.ready(function() {
            var root = am5.Root.new("chartdiv");
            // เอาโลโก้ออก
            root._logo.dispose();


        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelX: "none",
            wheelY: "none",
            paddingLeft: 0
        }));

        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
        cursor.lineY.set("visible", false);

        var xRenderer = am5xy.AxisRendererX.new(root, {
            minGridDistance: 30,
            minorGridEnabled: true
        });

        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
            maxDeviation: 0,
            categoryField: "name",
            renderer: xRenderer,
            tooltip: am5.Tooltip.new(root, {})
        }));

        xRenderer.grid.template.set("visible", false);

        var yRenderer = am5xy.AxisRendererY.new(root, {});
        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            maxDeviation: 0,
            min: 50,
            max: 700,
            extraMax: 0.1,
            renderer: yRenderer
        }));

        yRenderer.grid.template.setAll({
            strokeDasharray: [2, 2]
        });

        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: "Series 1",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            sequencedInterpolation: true,
            categoryXField: "name",
            tooltip: am5.Tooltip.new(root, {
                dy: -25,
                labelText: "{valueY}"
            })
        }));

        series.columns.template.setAll({
            cornerRadiusTL: 5,
            cornerRadiusTR: 5,
            strokeOpacity: 0
        });

        series.columns.template.adapters.add("fill", (fill, target) => {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });

        series.columns.template.adapters.add("stroke", (stroke, target) => {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });

        var data = [{
                name: "เชื่อม",
                value: 100
            },
            {
                name: "สี",
                value: 150
            },
            {
                name: "ประกอบ",
                value: 123
            },
            {
                name: "CNC",
                value: 60
            }
        ];

        series.bullets.push(function() {
            return am5.Bullet.new(root, {
                locationY: 1,
                sprite: am5.Picture.new(root, {
                    templateField: "bulletSettings",
                    width: 50,
                    height: 50,
                    centerX: 0,
                    centerY: 0,
                    shadowColor: am5.color(0x000000),
                    shadowBlur: 4,
                    shadowOffsetX: 4,
                    shadowOffsetY: 4,
                    shadowOpacity: 0.6
                })
            });
        });

        xAxis.data.setAll(data);
        series.data.setAll(data);

        series.appear(1000);
        chart.appear(1000, 1);
    });
</script> -->
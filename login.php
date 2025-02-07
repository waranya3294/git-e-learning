<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองคิวสอบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
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
</style>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2>จองคิวสอบ</h2>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="text">เลือกรอบสอบ</label>
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
                </div>
            </div>
        </div>
    </div>

    <script>
        

    </script>
</body>
</html>
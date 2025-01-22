<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Saved Content</title>
</head>
<body>
  <h1>Saved Content</h1>
  <div id="display-container">
    <?php
    // อ่านข้อมูลจากไฟล์ JSON
    $data = json_decode(file_get_contents('saved_content.json'), true);
    echo $data['content'];
    ?>
  </div>
</body>
</html>

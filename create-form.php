<?php
require_once("connection.php");

$connection = new MyConnection();
$pdo = $connection->getPdo();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่าจากฟอร์ม
    $exam_name = $_POST['exam_name'];
    $exam_description = $_POST['exam_description'];
    $exam_category = $_POST['exam_category'];
    $exam_code = intval($_POST['exam_code']);
    
    // แยกวันที่เริ่มต้นและสิ้นสุดที่ส่งจาก JavaScript
    $start_date = $_POST['start_date']; // format: YYYY-MM-DD HH:mm
    $end_date = $_POST['end_date']; // format: YYYY-MM-DD HH:mm
    
    // แปลงวันที่เริ่มต้นและสิ้นสุดให้เป็นรูปแบบที่ฐานข้อมูลรองรับ
    $form_date = $start_date; // ใช้วันที่เริ่มต้นเป็นค่าห้องสอบ
    $exam_passed = $_POST['exam_passed'];
    $exam_number = $_POST['exam_number'];

    try {
        // ตรวจสอบห้องสอบซ้ำ
        $check_form = "SELECT * FROM tbl_exam_form WHERE exam_name = :exam_name AND exam_code = :exam_code";
        $stmt = $pdo->prepare($check_form);
        $stmt->execute([
            ':exam_name' => $exam_name,
            ':exam_code' => $exam_code
        ]);

        if ($stmt->rowCount() > 0) {
            echo "ห้องสอบนี้มีอยู่แล้ว!";
        } else {
            // เพิ่มข้อมูลใหม่
            $insert_sql = "INSERT INTO tbl_exam_form (exam_name, exam_description, exam_category, exam_code, form_date, exam_passed, exam_number) 
                           VALUES (:exam_name, :exam_description, :exam_category, :exam_code, :form_date, :exam_passed, :exam_number)";
            $stmt = $pdo->prepare($insert_sql);
            $stmt->execute([
                ':exam_name' => $exam_name,
                ':exam_description' => $exam_description,
                ':exam_category' => $exam_category,
                ':exam_code' => $exam_code,
                ':form_date' => $form_date,  // ใช้ค่าของวันที่เริ่มต้น
                ':exam_passed' => $exam_passed,
                ':exam_number' => $exam_number
            ]);

            if ($stmt->rowCount() > 0) {
                $new_form_id = $pdo->lastInsertId();
                echo "สร้างห้องสอบสำเร็จ! ID: " . $new_form_id;
            } else {
                echo "ไม่สามารถบันทึกข้อมูลได้!";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

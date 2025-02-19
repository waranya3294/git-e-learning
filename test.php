<?php

require_once("connection.php");
$conn = new MyConnection();
$pdo = $conn->getPdo();

$response = array();

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $emp_id = !empty($_POST['user']) ? $_POST['user'] : '-';
        $password = !empty($_POST['pass']) ? $_POST['pass'] : '-';
        if($emp_id == '1234'){
            $location = 'learning_maincontent.php';
        } elseif($emp_id == '1111'){
            $location = 'dashboard_maincontent.php';
        }else{
            $location = 'index.php';
            $response = array(
                'icon' => 'warning',
                'title' => 'เกิดข้อผิดพลาด',
                'text' => 'กรุณาลองใหม่อีกครั้ง',
                'btnColor' => 'yellow',
                'location' => $location
            );
            echo json_encode($response);
            exit;
        }
        $response = array(
            'icon' => 'success',
            'title' => 'สำเร็จ',
            'text' => 'บันทึกสำเร็จ',
            'btnColor' => 'green',
            'location' => $location
        );
    } else {
        $response = array(
            'icon' => 'error',
            'title' => 'เกิดข้อผิดพลาด',
            'text' => 'ไม่สามารถดำเนินการได้',
            'btnColor' => 'red'
        );
    }
} catch (Exception $e) {
    //throw $th;
    $response = array('icon' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage(), 'btnColor' => 'red');
}






// //echo "ID_Emp : ".$ID_Emp." Pass: ".$password."";

// $response = array('ID_Emp'=> $ID_Emp,'pass'=> $password);


// if($type === "user"){
//     $response = array("user_type"=>"เป็นผู้ใช้จ้าาาา");
// }else {
//     $response = array("user_type"=>"เป็นผู้ใช้อื่น");
// }

echo json_encode($response);


// //ID_Emp : 1234 Pass: 1234

// 

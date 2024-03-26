<?php

// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_application";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// รับค่าจากฟอร์ม
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$position = $_POST["position"];

// อัปโหลดไฟล์ประวัติส่วนตัว
$resume = $_FILES["resume"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($resume["name"]);

if (move_uploaded_file($resume["tmp_name"], $target_file)) {
    echo "อัปโหลดไฟล์ประวัติส่วนตัวสำเร็จ";
} else {
    echo "อัปโหลดไฟล์ประวัติส่วนตัวไม่สำเร็จ";
}

// บันทึกข้อมูลลงฐานข้อมูล
$sql = "INSERT INTO applications (name, email, phone, position, resume) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$name, $email, $phone, $position, $target_file]);

// แสดงข้อความแจ้งเตือน
echo "<script>alert('สมัครงานสำเร็จ');</script>";

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครงาน</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="save.php" method="post">
        <h1>สมัครงาน</h1>
        <p>
            <label for="name">ชื่อ-นามสกุล:</label>
            <input type="text" name="name" id="name" required>
        </p>
        <p>
            <label for="email">อีเมล:</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="phone">เบอร์โทรศัพท์:</label>
            <input type="tel" name="phone" id="phone" required>
        </p>
        <p>
            <label for="position">ตำแหน่งที่สมัคร:</label>
            <select name="position" id="position">
                <option value="">เลือกตำแหน่ง</option>
                <option value="developer">นักพัฒนาซอฟต์แวร์</option>
                <option value="designer">นักออกแบบ</option>
                <option value="marketer">นักการตลาด</option>
            </select>
        </p>
        <p>
            <label for="resume">ประวัติส่วนตัว:</label>
            <input type="file" name="resume" id="resume" accept=".pdf,.doc,.docx">
        </p>
        <p>
            <input type="submit" value="สมัคร">
        </p>
    </form>
</body>
</html>

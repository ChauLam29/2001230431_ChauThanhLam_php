<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ghi chú</title>
</head>
<body>

<h2>Nhập nội dung</h2>

<form method="post">
    <textarea name="noidung" rows="5" cols="40" required></textarea><br><br>
    <input type="submit" value="Lưu">
</form>

<?php
$file = "note.txt";

// Lưu nội dung vào file
if (isset($_POST["noidung"])) {
    $noidung = $_POST["noidung"];
    file_put_contents($file, $noidung . PHP_EOL, FILE_APPEND);
    echo "<p>Đã lưu thành công!</p>";
}

// Hiển thị nội dung file
if (file_exists($file)) {
    echo "<h3>Nội dung đã lưu:</h3>";
    echo "<pre>";
    echo htmlspecialchars(file_get_contents($file));
    echo "</pre>";
}
?>

</body>
</html>
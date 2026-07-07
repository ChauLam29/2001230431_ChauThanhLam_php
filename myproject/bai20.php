<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ghi nhớ tên</title>
</head>
<body>

<?php
// Nếu đã gửi tên từ form
if (isset($_POST["ten"])) {
    $ten = $_POST["ten"];

    // Lưu cookie trong 1 ngày
    setcookie("ten", $ten, time() + 86400);

    echo "<h2>Xin chào, $ten!</h2>";
    echo "<p>Tên của bạn đã được lưu.</p>";
}
// Nếu đã có cookie
elseif (isset($_COOKIE["ten"])) {
    echo "<h2>Chào mừng quay lại, " . $_COOKIE["ten"] . "!</h2>";
}
// Nếu chưa có cookie thì hiển thị form
else {
?>
    <h2>Nhập tên của bạn</h2>
    <form method="post">
        <input type="text" name="ten" required>
        <input type="submit" value="Lưu">
    </form>
<?php
}
?>

</body>
</html>
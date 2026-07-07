<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính tổng từ 1 đến N</title>
</head>
<body>

<form method="post">
    Nhập số nguyên N:
    <input type="number" name="n" required>
    <input type="submit" value="Tính">
</form>

<?php
if (isset($_POST['n'])) {
    $n = intval($_POST['n']);
    $tong = 0;

    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }

    echo "<p>Tổng các số từ 1 đến $n là: <b>$tong</b></p>";
}
?>

</body>
</html>
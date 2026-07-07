<?php
// Hàm tìm sinh viên có điểm cao nhất
function timSinhVienDiemCaoNhat($danhSach)
{
    $max = $danhSach[0];

    foreach ($danhSach as $sv) {
        if ($sv["diem"] > $max["diem"]) {
            $max = $sv;
        }
    }

    return $max;
}

// Mảng danh sách sinh viên
$danhSach = [
    ["hoten" => "Nguyen Van A", "diem" => 8.5],
    ["hoten" => "Tran Thi B", "diem" => 9.2],
    ["hoten" => "Le Van C", "diem" => 7.8],
    ["hoten" => "Pham Thi D", "diem" => 9.5]
];

// Hiển thị danh sách
echo "<h3>Danh sách sinh viên</h3>";
foreach ($danhSach as $sv) {
    echo "Họ tên: " . $sv["hoten"] . " - Điểm: " . $sv["diem"] . "<br>";
}

// Tìm sinh viên điểm cao nhất
$svMax = timSinhVienDiemCaoNhat($danhSach);

echo "<h3>Sinh viên có điểm cao nhất</h3>";
echo "Họ tên: " . $svMax["hoten"] . "<br>";
echo "Điểm: " . $svMax["diem"];
?>
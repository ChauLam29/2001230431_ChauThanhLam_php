<?php
// Autoload
spl_autoload_register(function ($class) {
    $file = str_replace("\\", "/", $class) . ".php";
    if (file_exists($file)) {
        require_once $file;
    }
});

use App\Students\Student;

// Tạo đối tượng
$sv = new Student("Nguyễn Văn A", 20, "SV001");

// Hiển thị thông tin
$sv->display();
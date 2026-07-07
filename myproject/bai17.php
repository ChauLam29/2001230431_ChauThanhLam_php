<?php
function vietHoaChuoi($chuoi) {
    return mb_strtoupper($chuoi, "UTF-8");
}

$chuoi = "Xin chào Việt Nam";
echo vietHoaChuoi($chuoi);
?>
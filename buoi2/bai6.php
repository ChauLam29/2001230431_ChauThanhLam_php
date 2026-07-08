<?php
class BankAccount
{
    private $soTaiKhoan;
    private $tenChuTaiKhoan;
    private $soDu;

    // Hàm khởi tạo
    public function __construct($soTaiKhoan, $tenChuTaiKhoan, $soDu)
    {
        $this->soTaiKhoan = $soTaiKhoan;
        $this->tenChuTaiKhoan = $tenChuTaiKhoan;
        $this->soDu = $soDu;
    }

    // Nạp tiền
    public function napTien($soTien)
    {
        if ($soTien > 0) {
            $this->soDu += $soTien;
            echo "Nạp thành công: " . number_format($soTien) . " VNĐ<br>";
        } else {
            echo "Số tiền nạp không hợp lệ!<br>";
        }
    }

    // Rút tiền
    public function rutTien($soTien)
    {
        if ($soTien <= 0) {
            echo "Số tiền rút không hợp lệ!<br>";
        } elseif ($soTien > $this->soDu) {
            echo "Không đủ số dư để rút!<br>";
        } else {
            $this->soDu -= $soTien;
            echo "Rút thành công: " . number_format($soTien) . " VNĐ<br>";
        }
    }

    // Hiển thị số dư
    public function hienThiSoDu()
    {
        echo "<h3>Thông tin tài khoản</h3>";
        echo "Số tài khoản: " . $this->soTaiKhoan . "<br>";
        echo "Tên chủ tài khoản: " . $this->tenChuTaiKhoan . "<br>";
        echo "Số dư: " . number_format($this->soDu) . " VNĐ<br><br>";
    }
}

// Chương trình chính
$tk = new BankAccount("123456789", "Nguyễn Văn A", 5000000);

$tk->hienThiSoDu();

$tk->napTien(2000000);
$tk->hienThiSoDu();

$tk->rutTien(3000000);
$tk->hienThiSoDu();

$tk->rutTien(5000000); // Thử rút quá số dư
?>
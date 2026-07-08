<?php
// Interface
interface Downloadable
{
    public function download();
}

// Lớp Book
class Book
{
    protected $title;
    protected $author;
    protected $price;

    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function display()
    {
        echo "Tên sách: " . $this->title . "<br>";
        echo "Tác giả: " . $this->author . "<br>";
        echo "Giá: " . number_format($this->price) . " VNĐ<br>";
    }
}

// Lớp Ebook kế thừa Book và triển khai Downloadable
class Ebook extends Book implements Downloadable
{
    private $fileSize;

    public function __construct($title, $author, $price, $fileSize)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }

    public function display()
    {
        parent::display();
        echo "Kích thước file: " . $this->fileSize . " MB<br>";
    }

    public function download()
    {
        echo "Đang tải ebook \"" . $this->title . "\"...<br>";
    }
}

// Chương trình chính
$ebook = new Ebook(
    "Lập trình PHP",
    "Nguyễn Văn A",
    150000,
    12.5
);

$ebook->display();
echo "<br>";
$ebook->download();
?>
<?php
namespace App\Students;

class Person
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function display()
    {
        echo "Họ tên: $this->name <br>";
        echo "Tuổi: $this->age <br>";
    }
}
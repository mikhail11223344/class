<?php

class OldMan
{
    private $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function giveAdvice()
    {
        return 'Изучи Ruby';
    }

    public function showAge()
    {
        return $this->age;
    }

    public function changeAge($age)
    {
        if (is_int($age)) {
            $this->age = $age;
        } else {
            return 'Возраст должен быть числом!';
        }
    }
}

$duv16 = new OldMan(100);
$duv16->giveAdvice();
$duv16->changeAge(60);
$duv16->showAge();


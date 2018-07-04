<?php

class OldMan
{
    private $age;
    private $heart;

    public function __construct($age, Heart $heart)
    {
        $this->age = $age;
        $this->heart = $heart;
    }

    public function startLive()
    {
        $this->heart->on();
    }

    public function endLive()
    {
        $this->heart->off();
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

interface Heart
{
    public function on();

    public function off();
}

class ownHeart implements Heart
{
    public function on()
    {

    }

    public function off()
    {

    }
}

class artificialHeart implements Heart
{
    public function on()
    {

    }

    public function off()
    {

    }
}

$heart = new ownHeart;

$duv16 = new OldMan(100, $heart);

$duv16->startLive();
$duv16->giveAdvice();
$duv16->endLive();


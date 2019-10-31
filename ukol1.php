<?php

class Ctverec
{
    public $delkastrany;

    public function __construct($delkastrany)
    {
        $this->delkastrany = $delkastrany;
    }


    public function spocitejObsah()
    {
        return $this->delkastrany * $this->delkastrany;
    }
}
$ctverecek = new Ctverec(6);
    echo 'Obsah ctverce o delce strany ' . $ctverecek->delkastrany . ' je ' . $ctverecek->spocitejObsah();
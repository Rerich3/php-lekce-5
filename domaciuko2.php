<?php
class Uzivatel
{
    private $jmeno;
private $heslo;
public function __construct($jmeno, $heslo)
{$this->jmeno=$jmeno;
$this->heslo=$heslo;}
public function overeni($jmeno, $heslo)
{if ($jmeno == $heslo)
    return true;
else return false;}
public function ziskejJmeno()
{return $this->jmeno;}
}

class Prihlasovani
{
    private $prihlaseniUzivatele = [];

    public function prihlas(Uzivatel $uzivatel, $jmeno, $heslo)
{
    if ($uzivatel->overeni($jmeno,$heslo)) {
            $this->prihlaseniUzivatele[] = $jmeno;
    }

}
public  function zobrazPrihlaseneUzivatele()
{echo 'Prihlaseni uzivatele: ' .    implode( ',' , $this->prihlaseniUzivatele) . '<br>'; }
}

$Uzivatel1 = new Uzivatel('Jozef' , 'Josef1234');
$prihlas = new Prihlasovani();
$prihlas->zobrazPrihlaseneUzivatele();
$prihlas->prihlas($Uzivatel1, 'Jozef', 'Josef1234');
$prihlas->zobrazPrihlaseneUzivatele();

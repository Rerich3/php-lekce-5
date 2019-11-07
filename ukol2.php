<?php

//keby som mal 2 vypocty na obvod alebo ine:
interface GeometrickyUtvarinterface
{
    public function ziskejPocetStran();
    public function ziskejObvod();
}

//ked nieco nedava samo o sebe zmysel dava sa predto abstract : abstract class GeometrickyUtvar, aj abstract public function
class GeometrickyUtvar
{
    private $pocetStran;
    public function __construct($pocetStran)
    { $this->pocetStran =$pocetStran;
    }
    public function Ziskejpocetstran(){
        return $this->pocetStran;
    }
}

class Ctverec extends GeometrickyUtvar implements  GeometrickyUtvarinterface
{
    private $a;
    public function __construct($a)
{ $this->a = $a;
parent::__construct(4);}
public function ziskejObvod()
{return $this->a * $this->ziskejpocetstran();
}
}
class Trojuhelnik extends GeometrickyUtvar implements  GeometrickyUtvarinterface
{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b,$c)
    {$this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct(3);
    }
public function ziskejObvod()
{return $this->a + $this->b + $this->c;
}
}
echo '<h3>Ctverec</h3>';
$ctverec = new Ctverec(3);
echo 'Pocet stran: '. $ctverec ->Ziskejpocetstran() . '<br>';
echo 'Obvod: ' . $ctverec->ziskejObvod() . '<br><br>';
echo '<h3>Trojuhelnik::</h3>';


// function vypisObvod(GeometrickyUtvarinterface )
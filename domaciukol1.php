<?php
interface TrojrozmernyObrazec
{
    public function ziskejObjem();
    public function ziskejPovrch();
}

class Kvadr implements TrojrozmernyObrazec
{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {$this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }

    public function ziskejObjem()
    {return $this->a * $this->b * $this->c;

    }
    public function ziskejPovrch()
    {return 2*($this->a *$this->b + $this->b*$this->c+$this->c*$this->a);
    }
}
$Kvader = new Kvadr(2, 3, 7);
echo 'Kvadr ma objem ' . $Kvader->ziskejObjem() . '<br>';
echo 'Kvadr ma obsah ' . $Kvader->ziskejPovrch() . '<br>';

class Krychle implements TrojrozmernyObrazec
{
    public $a;
    public function __construct($a)
    {$this->a=$a;
    }
public function ziskejObjem()
{return $this->a*$this->a*$this->a;
}
public function ziskejPovrch()
{return 6*$this->a*$this->a;

}
}
$Krychla = new Krychle(5);
echo 'Krychle ma objem ' . $Krychla->ziskejObjem() . '<br>';
echo 'Krychle ma obsah ' . $Krychla->ziskejPovrch() . '<br>';

class Koule implements TrojrozmernyObrazec
{
    public $r;
    public function __construct($r)
    {$this->r =$r;
    }
    public function ziskejObjem()
    {return 4/3*pi()*$this->r*$this->r*$this->r;
    }
    public function ziskejPovrch()
    {
return 4*pi()*$this->r*$this->r;    }
}
$Gula = new Koule(6);
echo 'Koule ma objem ' . $Gula->ziskejObjem() . '<br>';
echo 'Koule ma obsah ' . $Gula->ziskejPovrch() . '<br>';

class Jehlan implements TrojrozmernyObrazec
{
    public $a;
    public $v;
    public function __construct($a, $v)
    {
        $this->a = $a;
        $this->v=$v;
    }

    public function ziskejObjem()
    {return 1/3*$this->a*$this->a*$this->v;

    }
    public function ziskejPovrch()
    {
return $this->a*$this->a+($this->a*sqrt($this->v*$this->v+$this->a*$this->a/4))+($this->a*sqrt($this->v*$this->v+$this->a*$this->a/4));  }
}

$Ihlan = new Jehlan(3,4);
echo 'Jehlan ma objem ' . $Ihlan->ziskejObjem() . '<br>';
echo 'Jehlan ma obsah ' . $Ihlan->ziskejPovrch() . '<br>';
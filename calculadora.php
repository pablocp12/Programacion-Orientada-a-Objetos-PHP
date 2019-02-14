<?php
class Calculadora{
    
    public $suma;
    public $resta;
    public $multi;
    public $div;
    public $pote;
    public $pe;
    
    
    public function sumar($v1,$v2)
    {
        $suma = $v1+$v2;
        return $suma;
    }
    
    public function restar($v1,$v2)
    {
        $resta = $v1-$v2;
        return $resta;
    }
    
    public function mult($v1,$v2)
    {
        $multi = $v1*$v2;
        return $multi;
    }
    
    public function divi($v1,$v2)
    {
        $div = $v1/$v2;
        return $div;
        
    }
    
    public function pot($v1,$v2)
    {
        $pote = pow($v1,$v2);
        return $pote;
    }
    
    public function parteEntera($v1)
    {
        $pe = intval($v1);
        return $pe;
    }
   
}


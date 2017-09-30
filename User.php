<?php

class Invoice
{
    
    /**
    * User constructor.
    *
    * @param $name
    */
    
    const IVA = 1.16;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    
    private function sumItems($items)
    {
        foreach ($items as $item) { //Iterate fn
            $result+= $item;
        }
        
        return $item;
    }
    
    public function getTotal($a)
    {
        return $this->sumItems($a) * static::IVA;
    }
    
}

$user = new User();
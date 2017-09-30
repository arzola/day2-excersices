<?php
/**
* Creado Por icode.mx
* User: Oscar Arzola
*/

class Xdebug
{
    private $steps = 3;
    private $names = ['2', 3, 2];
    
    /**
    * Xdebug constructor.
    */
    public function __construct()
    {
        
    }
    
    private function init()
    {
        if($this->names[0]===2){
            $this->steps = 4;
        }
    }
    
    public function getSteps()
    {
        return $this->steps;
    }
    
}
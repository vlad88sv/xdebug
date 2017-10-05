<?php

class uno {
    private $miVar1;
    
    function getProcessedVar($value){
        $this->miVar1 = 0;
        $this->miVar1 += $value;
        
        $library2 = new dos();
        
        $this->miVar1 += $library2->getStaticValue();
        
        return $this->miVar1;
    }
}
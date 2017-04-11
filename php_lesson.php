<?php
function warizan($val1,$val2){
    try{
        if($val2 === 0){
            throw new Exception('0で割ることはできません');
        }
        return $val1 / $val2;
    }catch(Exception $e){
        return $e->getMessage();
    }
}
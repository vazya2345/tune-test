<?php

class MyClass {

    public function test($arr1,$arr2){
        $val_start = $this->getarrValue($arr1)+$this->getarrValue($arr2);
        return $this->getArrFromAmount($val_start);
    }
    private function getarrValue($arr){
        $res = 0;
        foreach ($arr as $key => $value) {
            $res+=$value*(pow(10,$key));
        }
        return $res;
    }
    private function getArrFromAmount($sum){
        $res = [];
        $i = 0;
        do{
            $res[$i] = $sum%10;
            $sum = ($sum-$res[$i])/10;
            $i++;
        }while($sum>0);
        return $res;
    }
}
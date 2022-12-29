<?php
$inn_arr[0][0] = [2,4,3];
$inn_arr[0][1] = [5,6,4];
$inn_arr[1][0] = [0];
$inn_arr[1][1] = [0];
$inn_arr[2][0] = [9,9,9,9,9,9,9];
$inn_arr[2][1] = [9,9,9,9];



print_r(test($inn_arr[0][0],$inn_arr[0][1]));
echo "\n"; 
print_r(test($inn_arr[1][0],$inn_arr[1][1]));
echo "\n";
print_r(test($inn_arr[2][0],$inn_arr[2][1]));
echo "\n";

function test($arr1,$arr2){
	$val_start = getarrValue($arr1)+getarrValue($arr2);
	return getArrFromAmount($val_start);
}
function getarrValue($arr){
	$res = 0;
	foreach ($arr as $key => $value) {
		$res+=$value*(pow(10,$key));
	}
	return $res;
}
function getArrFromAmount($sum){
	$res = [];
	$i = 0;
	do{
		$res[$i] = $sum%10;
		$sum = ($sum-$res[$i])/10;
		$i++;
	}while($sum>0);
	return $res;
}
?>
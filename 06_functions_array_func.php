<?php
function sum($num1,$num2){
    echo $num1+$num2;
}

// echo sum(2,3)

$list = ['one','two','three'];

// echo count($list);
// var_dump(in_array('two',$list));
array_push($list,'four','five');
//  array_pop($list);
//  array_shift($list);
//  unset($list[1]);
$a = array_chunk($list,1);

// print_r ($a)

$arr1=[1,2,3];
$arr2=[3,4,5];
// $arr3=array_merge($arr1,$arr2);
// $arr4=[...$arr1 , ...$arr2];
$combile = array_combine($arr1, $arr2);
// print_r($combile)
$number = range(2,22);
$num = array_map(function($numbe){
    return "Number ${numbe}";
},$number);
// print_r($num)

$filter = array_filter($number,fn($numbr)=> $numbr <=10);
$reduce = array_reduce($number,fn($c,$numbr)=>$c+$numbr);
print_r($reduce)
?>
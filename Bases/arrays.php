<?php

// array associativo
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// array associativo com short sintaxe 
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];

// array simples 
$arraySimples = [1,2,3,4,6,7,8,9,10];

// array multi dimensional 
$arrayMultiDimensional = [
        "dimensão1" => [
            "foo" => ["bar","bar","bar"],
            "bar" => "foo",
        ],
        "dimensão2"=> ["foo","bar"],       
        "dimensão3" => [1,3,4,5],
    ]; 


echo "Array normal\n";
print_r($array);
echo "\n";
echo "Array com short sintaxe \n";
print_r($array2);
echo "\n";
echo "Array simples \n";
print_r($arraySimples);
echo "\n";
echo "Array Multi dimensional \n";
echo "\n";
print_r($arrayMultiDimensional);
echo "\n";
echo "Array Multi dimensional D1 \n";
print_r($arrayMultiDimensional["dimensão1"]);
echo "\n";
echo "Array Multi dimensional D2 \n";
print_r($arrayMultiDimensional["dimensão2"]);
echo "\n";
echo "Array Multi dimensional D3 \n";
print_r($arrayMultiDimensional["dimensão3"]);
echo "\n";




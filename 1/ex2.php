<?php
$items = [
    [
        "name"=> "Vasja",
        "lastname"=> "Dolgov",
        "age"=> 19,
        "email"=> "vasja@mail.ru"
    ],
    [
      "name"=> "Kolya",
      "lastname"=> "Grishin",
      "age"=> 50,
      "email"=> "kolya@mail.ru"   
    ],
    [
        "name"=> "Valya",
        "lastname"=> "Galkina",
        "age"=> 22,
        "email"=> "valya@mail.ru"
    ]
];

//делаем универсально
function  map($items, $func){
$results = [];
foreach ($items as $item) {
    $results[]= $func($item);
}
return $results;
}

$emails = map($items, function ($client){
return $client['email'];
});

$names = map($items, function ($client){
return $client['name'];
});

echo '<pre>';
var_dump($emails, $names);
echo '</pre>';

//задание вывести список имен и фамилий

$total = map($items, function ($client){
return $client ['name']. " " .$client['lastname'];  
});

echo '<pre>';
var_dump($total);
echo '</pre>';

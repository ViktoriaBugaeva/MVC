<?php
$clients = [
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

//получить список email
$emails = [];
foreach ($clients as $client) {
    $emails[]= $client['email'];
}


//задание вывести список имен
$names = [];
foreach ($clients as $client) {
    $names[]= $client['name'];
}
echo '<pre>';
var_dump($emails, $names);
echo '</pre>';

//задание вывести список имен и фамилий

$total = [];
foreach ($clients as $client) {
$total[]= $client['name'] . " " . ['lastname'];
}
echo '<pre>';
var_dump($total);
echo '</pre>';
<?php
header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
require 'Dog.php';
require 'Cat.php';
require 'Fish.php';
$Nikolai = new Dog ('Николай');
echo 'Собаку зовут: ' . $Nikolai->name . '<br>';
echo 'Собака говорит: ' . $Nikolai->speak() . '<br>';
echo 'Собака делает: ' . $Nikolai->plays() . '<br>';
$Erofei = new Cat ('Ерофей Петрович');
echo 'Кота зовут: ' . $Erofei->name . '<br>';
echo 'Кот говорит: ' . $Erofei->speak() . '<br>';
echo 'Кот делает: ' . $Erofei->plays() . '<br>';
$Karas = new Fish ('Карась');
echo 'Рыбку зовут: ' . $Karas->name . '<br>';
echo 'Рыбка говорит: ' . $Karas->speak() . '<br>';
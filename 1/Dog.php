<?php
header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
require_once 'Pet.php';
class Dog extends Pet {
     public function speak() {
        return 'Гав! Гав!';
    }
     public function plays() {
        return 'ловит мяч';
}
}
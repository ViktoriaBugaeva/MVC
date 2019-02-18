<?php

//controller - место откуда вызывается наша модель, которую затем передаем в view

function uploadImage($image){
    $name = $image['name'];
    $tmp_name = $image['tmp_name'];
    move_uploaded_file($tmp_name, "./uploads/".$name);
}

//model - место, где у меня код, кт отвечает за бизнес-логику моего проекта
uploadImage($_FILES['image']);

?>

<img src="./uploads/image.jpg" alt="">
    

<?php

//controller - место откуда вызывается наша модель, которую затем передаем в view
require './upload.php';


//model - место, где у меня код, кт отвечает за бизнес-логику моего проекта
uploadImage($_FILES['image']);

//view
include 'view.php';

?>


    

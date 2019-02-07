<?php
header("Content-Type: text/html;charset=utf-8");
    ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php
if (!empty($_POST['data'])) {
    echo 'Следующая строка отправлена из формы №1: ' . $_POST['data'];
} elseif (!empty ($_GET['data'])) {
    echo 'Следующая строка отправлена из формы №2: ' . $_GET['data'];

}

<?php
    header("Content-Type: text/html;charset=utf-8");
    ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <body>
        <form method="post" action="collect.php">
            <h1>форма №1</h1>
            <input name="data" placeholder="введите строку" type="text" />
            <button type="submit">Отправить</button>
        </form>
        <form method="get" action="collect.php">
            <h1>форма №2</h1>
            <input name="data" placeholder="введите строку" type="text" />
            <button type="submit">Отправить</button>
            </form>
    </body>
</html>
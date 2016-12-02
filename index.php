<?php
    
    require('init.php'); //доступ к бд в отдельном файле, чтобы не менять постоянно мой логин/пароль и твой


if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL.<br>";  //меняем PHP_EOL на <br> потому что мы в html'е
    echo "Код ошибки errno: " . mysqli_connect_errno() . '<br>';
    echo "Текст ошибки error: " . mysqli_connect_error() . '<br>';
    exit;
}

echo "Соединение с MySQL установлено!<br>";
echo "Информация о сервере: " . mysqli_get_host_info($link) . '<br>';

$query = "SELECT * FROM materials ORDER by idmaterials DESC"; //here goes nothing

if ($result = mysqli_query($link, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_row($result)) {
        printf ("%s (%s)\n", $row[0], $row[1]);
    }

    /* free result set */
    mysqli_free_result($result);
} else echo mysqli_error($link);

mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
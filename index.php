
<?php
require_once 'connection.php';
$link = mysqli_connect(HOST, NAME, PASSWORD, DATABASE)
or die("Ошибка " . mysqli_error($link));

$result = mysqli_query($link, "select * from tblusers");

if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_assoc($result);
        echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>{$row["Id"]}</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автосервіс</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur delectus, deleniti doloremque
    doloribus ex expedita nemo odio officia quia. Aspernatur aut blanditiis culpa cumque cupiditate dolorum
    excepturi ipsum quo.</p>

    <div class="dropList">
        <input type="text"
               name="userInput"
               id="userInput"
                class="custom-select"
                placeholder="search..."/>
        <div id="droplistContent" class="dropdown-content">
            <a href="#">aaaaa</a>
            <a href="#">bbbbbb</a>
            <a href="#">ccccc</a>
            <a href="#">qqqq</a>
            <a href="#">www</a>
        </div>
        <div id="droplistContent" class="dropdown-content">
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur delectus, deleniti doloremque
            doloribus ex expedita nemo odio officia quia. Aspernatur aut blanditiis culpa cumque cupiditate dolorum
            excepturi ipsum quo.</p>
    </div>
</body>
</html>
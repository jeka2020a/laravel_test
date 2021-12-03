<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/blade.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input name="name" type="text">
        <input name="age" type="text">
        <input name="salary" type="text">

        <button name="butt">enter</button>
    </form>

    <?php

        $connect = new mysqli("localhost","root","","form");
        $result = $connect->query("SELECT * FROM `users`;")->fetch_all();
        
        print_r($result);

    ?>
</body>
</html>
<?php
$n = "Hello My Learning";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP basic</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


    <h1>Hello PHP programing <span id="num"></span></h1>
    <button onclick="increment()">click increment</button>
    <button onclick="decrement()">click decrement</button>

    <hr>

    <?php
        echo "Hello PHP 2022 {$n}";
    ?>

    <br>

    <form action="submit.php" method="GET">
        <input type="text" name="name" id="">
        <input type="text" name="email" id="">
        <button type="submit">save</button>
    </form>

    <br>
    <br>
    <?php include 'car.php'; ?>

    <script src="./js/app.js"></script>
</body>

</html>

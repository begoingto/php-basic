<?php
echo "<h1 align='center'>PHP Indexed Array</h1>";

$arr = ['Long', 20, 21.5];

foreach ($arr as  $value) {
    echo " \$a=" . $value . "<br>";
}

$user = [
    [
        "Long",
        21,
        "MIS"
    ],
    [
        "Dara",
        20,
        "CS"
    ]
];

for ($i = 0; $i < count($user); $i++) {
    echo "Name : " . $user[$i][0] . " Age: " . $user[$i][1] . " Major: " . $user[$i][2] . "<br>";
}
$user[1][1] = 25;

echo "<hr>";

foreach ($user as $u) {
    foreach ($u as $v) {
        echo " User: {$v}";
    }
    echo "<br>";
}

echo "<h1 align='center'>PHP Associative Arrays (Array key value pairs)</h1>";
$user = [
    [
        "name" => "Long",
        "age" => 21,
        "major" => "MIS",
        'color' => 'red',
        'money' => 500
    ],
    [
        "name" => "Dara",
        "age" => 20,
        "major" => "CS",
        'color' => 'green',
        'money' => 1000
    ],
    [
        "name" => "Hak",
        "age" => 25,
        "major" => "XX",
        'color' => 'pink',
        'money' => 300.56
    ]
];
// foreach ($user as $u) {
//     foreach ($u as $key => $v) {
//         echo " {$key}: {$v}";
//     }
//     echo "<br>";
// }
// echo "<hr>";
// echo "<h4>Computer List</h4>";
// echo "<pre>";
// echo "<p>Name :<b>pc1</b></p>";
// echo "<p>Brand :<b>Dell</b></p>";
// echo "<p>Color :<b style='color:red'>Red</b></p>";
// echo "<p>Price :<b>1500.00</b></p>";
// echo "</pre>";
// echo "<hr>";
// echo "<pre>";
// echo "<p>Name :<b>pc2</b></p>";
// echo "<p>Brand :<b>Dell</b></p>";
// echo "<p>Color :<b style='color:blue'>Blue</b></p>";
// echo "<p>Price :<b>1500.00</b></p>";
// echo "</pre>";
// echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php foreach ($user as $k => $u) { ?>
    <pre>
        <p>Name : <b><?= $user[$k]['name']; ?></b></p>
        <p>Age : <b><?= $user[$k]['age']; ?></b></p>
        <p>Major : <b style="color: <?= $user[$k]['color']; ?>;"><?= $user[$k]['color']; ?></b></p>
        <p>Money : <b><?= number_format($user[$k]['money'], 2); ?></b></p>
    </pre>
    <hr>
    <?php } ?>
    <h1>Total Money: </h1>
</body>

</html>
<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for ($i=0; $i<=90; $i++) {
    for ($j=0; $j<$i; $j++) {
        echo "*";
    }
    echo "*<br>";
}
?>
</body>
</html>

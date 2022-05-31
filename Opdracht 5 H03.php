<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = 3;
$bedrag = 10;
if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd < 3) {
    $bedrag = 0;
}
echo $bedrag;


?>
</body>
</html>

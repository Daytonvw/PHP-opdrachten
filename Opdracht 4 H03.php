<!DOCTYPE html>
<html>
<head>
    <title>formulier</title>
    <style>
        body {
            text-align:center;
        }

        .rood {
            border:red solid 5px;
        }
    </style>
</head>
<body>
<?php
for($i = 1; $i <=9; $i++) {
    if($i == 3) {
        $class = "class='rood'";
    } else {
        $class = "";
    }
    echo "<img ".$class. "src='img/apen/aap".$i.".jpg'>";
}
?>
</body>
</html>

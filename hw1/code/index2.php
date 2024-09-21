<?php 
    $title = "<em>Geek</em>Brains";
    $today = date("d.m.Y");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <ul>
            <li>1 <?=$title;?></li>
            <li>2 <?=date("Y.m.d");?></li>
            <li>3 echo $today; </li>
            <li>4</li>
        </ul>
        <?php echo date("d.m.Y"); ?>
</body>
</html>
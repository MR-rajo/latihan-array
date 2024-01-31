<?php 

// For | Foreach
$angka = [1, 15, 20, 28];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background: blue;
            color: white;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 5px
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach($angka as $data) : ?>
        <div class="kotak"><?= $data; ?></div>
    <?php endforeach; ?>
</body>
</html>
<?php 

$huruf1 = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
$huruf2 = ["J", "K", "L", "M", "N", "O", "P", "Q", "R"];
$huruf3 = ["S", "T", "U", "v", "W", "X", "Y", "Z"];


$mapel1 = ["Pendidikan Agama dan Budi Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia"];
$mapel2 = ["Matematika", "Bahasa Inggris", "Dasar dasar Kejuruan RPL"];

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
            background: red;
            border-radius: 50%;
            color: white;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 5px
        }

        .clear{
            clear: both;
        }

        .persegi{
            width: 230px;
            height: 100px;
            border-radius: 10px 0 10px 0;
            background: orange;
            color: white;
            text-align: center;
            float: left;
            margin: 5px;
            line-height: 100px;
        }

        .judul{
            margin: 10px 0;
        }
    </style>
</head>
<body>

<h3>Abjad A-Z</h3>
<?php for($i = 0; $i < count($huruf1); $i++) : ?>
        <div class="kotak"><?= $huruf1[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php for($i = 0; $i < count($huruf2); $i++) : ?>
        <div class="kotak"><?= $huruf2[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php for($i = 0; $i < count($huruf3); $i++) : ?>
        <div class="kotak"><?= $huruf3[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <h3 class="judul">Mata Pelajaran - X RPL</h3>

    <?php foreach($mapel1 as $data1) : ?>
        <div class="persegi"><?= $data1; ?></div>
    <?php endforeach; ?>

    <div class="clear"></div>


    <?php foreach($mapel2 as $data2) : ?>
        <div class="persegi"><?= $data2; ?></div>
    <?php endforeach; ?>
</body>
</html>
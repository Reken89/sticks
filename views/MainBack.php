<!DOCTYPE html>
<html>
    <head>
        <title>Игра 3 | 5 | 7</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/green.css" class="colors">
    </head>

    <body>
        <form id="FormOne" method="post">
            <?php
                for ($a = 1; $a <= $_SESSION['packs']['OnePack']; $a++){
                    ?> <img src="assets/img/stick.jpg" /> <?php
                }
            ?>
            </br>
            <input type='hidden' name='variant' value='one'>
            <input type="number" name="sticks" required placeholder="Количество палочек">
            <button type="button" id="ButtonOne" class="btn btn-primary">Взять</button>
        </form>
        </br>
        <form id="FormTwo" method="post">
            <?php
                for ($a = 1; $a <= $_SESSION['packs']['TwoPack']; $a++){
                    ?> <img src="assets/img/stick.jpg" /> <?php
                }
            ?>
            </br>
            <input type='hidden' name='variant' value='two'>
            <input type="number" name="sticks" required placeholder="Количество палочек">
            <button type="button" id="ButtonTwo" class="btn btn-primary">Взять</button>
        </form>
        </br>
        <form id="FormThree" method="post">
            <?php
                for ($a = 1; $a <= $_SESSION['packs']['ThreePack']; $a++){
                    ?> <img src="assets/img/stick.jpg" /> <?php
                }
            ?>
            </br>
            <input type='hidden' name='variant' value='three'>
            <input type="number" name="sticks" required placeholder="Количество палочек">
            <button type="button" id="ButtonThree" class="btn btn-primary">Взять</button>
        </form>
    </body>
</html>

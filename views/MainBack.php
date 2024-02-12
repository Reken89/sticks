<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Игра палочки</title>
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

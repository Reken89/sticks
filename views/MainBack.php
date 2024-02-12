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
            <input type="text" name="FormOne" required placeholder="Количество палочек">
            <button type="button" id="FormOne" class="btn btn-primary">Взять</button>
        </form>
        </br>
        <form id="FormTwo" method="post">
            <?php
                for ($a = 1; $a <= $_SESSION['packs']['TwoPack']; $a++){
                    ?> <img src="assets/img/stick.jpg" /> <?php
                }
            ?>
            </br>
            <input type="text" name="FormTwo" required placeholder="Количество палочек">
            <button type="button" id="FormTwo" class="btn btn-primary">Взять</button>
        </form>
        </br>
        <form id="FormThree" method="post">
            <?php
                for ($a = 1; $a <= $_SESSION['packs']['ThreePack']; $a++){
                    ?> <img src="assets/img/stick.jpg" /> <?php
                }
            ?>
            </br>
            <input type="text" name="FormThree" required placeholder="Количество палочек">
            <button type="button" id="FormThree" class="btn btn-primary">Взять</button>
        </form>
    </body>
</html>

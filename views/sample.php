<!doctype html>
<html>
    <head>
        <title>Игра 3 | 5 | 7</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/green.css" class="colors">
    </head>

    <body id="home">
        <style>
            body { background: url(../sticks/assets/img/green.jpg); }              
        </style>
        <div>
            <div class="header-content">
                <h1 class="text-center">Игра 3|5|7</h1>
                <div class="countdown" id="countdown">
                    <div class="container">
                        <div class="row">
                            <div class="countdown-item col-sm-3 col-xs-3">
                                <form id="FormOne" method="post">
                                    <input type='hidden' name='variant' value='one'>
                                    <input type="number" name="sticks">
                                    <span class="input-group-btn">
                                        <button id="ButtonOne" type="button" class="btn">Нажать!</button>
                                    </span>
                                    <?php
                                        for ($a = 1; $a <= $_SESSION['packs']['OnePack']; $a++){
                                            ?> <img src="assets/img/st.jpg" /> <?php
                                        }
                                    ?>
                                </form>
                            </div>
                            <div class="countdown-item col-sm-3 col-xs-3">
                                <form id="FormTwo" method="post">
                                    <input type='hidden' name='variant' value='two'>
                                    <input type="number" name="sticks">
                                    <span class="input-group-btn">
                                        <button id="ButtonTwo" type="button" class="btn">Нажать!</button>
                                    </span>
                                    <?php
                                        for ($a = 1; $a <= $_SESSION['packs']['TwoPack']; $a++){
                                            ?> <img src="assets/img/st.jpg" /> <?php
                                        }
                                    ?>
                                </form>
                            </div>
                            <div class="countdown-item col-sm-3 col-xs-3">
                                <form id="FormThree" method="post">
                                    <input type='hidden' name='variant' value='three'>
                                    <input type="number" name="sticks">
                                    <span class="input-group-btn">
                                        <button id="ButtonThree" type="button" class="btn">Нажать!</button>
                                    </span>
                                    <?php
                                        for ($a = 1; $a <= $_SESSION['packs']['ThreePack']; $a++){
                                            ?> <img src="assets/img/st.jpg" /> <?php
                                        }
                                    ?>
                                </form>
                            </div>
                            <div class="countdown-item col-sm-3 col-xs-3">
                                <span class="input-group-btn">
                                        <button id="restart" type="button" class="btn">Начать заново!</button>
                                    </span>
                            </div>
                        </div>                    	
                    </div>
                </div>
                </br>
                <p class="text-center copyright"><b>Правила игры: 
                    </br>1) В окошко над пачкой, введите количество палочек, которые хотите взять
                    </br>2) Нажмите кнопку "Нажать", дождитесь ответного хода компьютера
                    </br>3) Брать палочки можно только из одной пачки! 
                    </br>4) Кто забрал последнюю палочку, тот проиграл! </b></p>
                <footer>
                </footer>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>
        <script type="text/javascript" src="assets/js/ga.js"></script>
    </body>
</html>


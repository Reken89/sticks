<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogicsTwoModel;

class LogicsTwoController extends BaseController
{
    /**
     * Логика после второго хода игрока
     * Выбираем какой вариант
     * логического действия (хода)
     * применить в конкретном случае
     *
     * @param 
     * @return 
     */
    public function SelectVariant()
    {
        $packs = $_SESSION['packs'];
        $logics = new LogicsTwoModel; 
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 5){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 3){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 0){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 0){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 6){
            $random = rand(1, 2);
            if($random == 1){
                $logics->ActionFive();
            }
            if($random == 2){
                $logics->ActionSix();
            }
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 6){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 6){
            $random = rand(1, 2);
            if($random == 1){
                $logics->ActionFive();
            }
            if($random == 2){
                $logics->ActionNine();
            }
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 6){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 6){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 6){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 6){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 5){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 4){
            $logics->ActionSix();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 3){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 2){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 4){
            $logics->ActionFourteen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 4){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 4){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 4){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 4){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 4){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 4){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 7){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 7){
            $random = rand(1, 2);
            if($random == 1){
                $logics->ActionSixteen();
            }
            if($random == 2){
                $logics->ActionFive();
            }
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 7){
            $logics->ActionSeventeen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 7){
            $logics->ActionEighteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 7){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 7){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 5){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 3){
            $logics->ActionEighteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 2){
            $logics->ActionSeventeen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 1){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 7){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 7){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 7){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 7){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 7){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 5){
            $logics->ActionSixteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 3){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 2){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 0){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 6){
            $logics->ActionSixteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 4){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 3){
            $logics->ActionEighteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 2){
            $logics->ActionSeventeen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 1){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 0){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 4){
            $logics->ActionSeventeen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 4){
            $logics->ActionEighteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 4){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 4){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 6){
            $logics->ActionSeventeen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 6){
            $logics->ActionEighteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 6){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 6){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 5){
            $logics->ActionTwenty();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 5){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 5){
            $logics->ActionTwentyOne();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 5){
            $logics->ActionTwentyTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 5){
            $logics->ActionTwentyThree();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 5){
            $logics->ActionTwentyFour();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 4){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 3){
            $logics->ActionTwentyFour();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 2){
            $logics->ActionTwentyThree();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 1){
            $logics->ActionTwentyTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 0){
            $logics->ActionTwentyOne();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 6){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 6){
            $logics->ActionTwentyOne();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 6){
            $logics->ActionTwentyTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 6){
            $logics->ActionTwentyThree();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 6){
            $logics->ActionTwentyFour();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 5){
            $random = rand(1, 2);
            if($random == 1){
                $logics->ActionSixteen();
            }
            if($random == 2){
                $logics->ActionNine();
            }
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 0){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 0){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 0){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 0){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 1){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 1){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 1){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 1){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 1){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 2){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 2){
            $logics->ActionNineteen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 2){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 2){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 4){
            $logics->ActionTwentyOne();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 4){
            $logics->ActionTwentyTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 4){
            $logics->ActionTwentyThree();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 4){
            $logics->ActionTwentyFour();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 3){
            $logics->ActionTwentyFour();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 2){
            $logics->ActionTwentyThree();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 1){
            $logics->ActionTwentyTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionTwentyOne();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 5){
            $logics->ActionTwentyFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 5){
            $logics->ActionTwentySix();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 5){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 3){
            $logics->ActionTwentyFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 2){
            $logics->ActionTwentySix();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 1){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 3){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 3){
            $logics->ActionFour();
        }
    }
}





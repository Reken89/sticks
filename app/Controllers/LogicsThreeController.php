<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogicsThreeModel;

class LogicsThreeController extends BaseController
{
    /**
     * Логика после третьего хода игрока
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
        $logics = new LogicsThreeModel; 
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 6){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 6){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 6){
            $logics->ActionThree();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 6){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 6){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 5){
            $logics->ActionSix();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 4){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 3){
            $logics->ActionThree();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 2){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 1){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 4){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 4){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 4){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 4){
            $logics->ActionThree();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 4){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 4){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 3){
            $logics->ActionThree();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 2){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 1){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 5){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 5){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 5){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 5){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 5){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 3){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 2){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 5){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 5){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 5){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 5){
            $logics->ActionFourteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 4){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 3){
            $logics->ActionThirteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 2){
            $logics->ActionFourteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 1){
            $logics->ActionEleven();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 0){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 1){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 1){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 1){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 0){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 0){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 0){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 3){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 3){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 3){
            $logics->ActionFourteen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 2){
            $logics->ActionFourteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 2){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 2){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 4){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 3){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 2){
            $logics->ActionFifteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 4){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 4){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 4){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 3){
            $logics->ActionSeven();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 2){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 0){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 5){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 5){
            $logics->ActionThree();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 5){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 5){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 2){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 2){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 2){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 3){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 3){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 1){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 0){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 0){
            $logics->ActionTwelve();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 0){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 1){
            $logics->ActionFour();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 1){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 2){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 2){
            $logics->ActionFourteen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 3){
            $logics->ActionTen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 1){
            $logics->ActionSixteen();
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 0){
            $logics->ActionSeventeen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 0){
            $logics->ActionSeventeen();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 1){
            $logics->ActionSeventeen();
        }
    }
}    


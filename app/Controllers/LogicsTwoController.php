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
    }
}





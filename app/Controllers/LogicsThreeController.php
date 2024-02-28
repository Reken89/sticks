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
            $logics->ActionSeven();
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
        
    }
}    


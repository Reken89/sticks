<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogicsModel;

class LogicsController extends BaseController
{
    /**
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
        $logics = new LogicsModel;
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 7){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 7){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionThree();
        }
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 0){
            $logics->ActionFour();
        }
        
        if($packs['TwoPack'] == 0 && $packs['ThreePack'] == 0){
            $logics->ActionFive();
        }
        
        if($packs['OnePack'] == 0 && $packs['ThreePack'] == 0){
            $logics->ActionSix();
        }
        
    }
}

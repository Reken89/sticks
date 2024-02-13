<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogicsOneModel;

class LogicsOneController extends BaseController
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
        $logics = new LogicsOneModel;
        
        if($packs['OnePack'] == 0 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 7){
            $logics->ActionOne();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 0 && $packs['ThreePack'] == 7){
            $logics->ActionTwo();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 0){
            $logics->ActionThree();
        }
        
        if($packs['OnePack'] == 2 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 7){
            $random = [4,6];
            $logics->ActionFour($random[array_rand($random, 1)]);
        }
        
        if($packs['OnePack'] == 1 && $packs['TwoPack'] == 5 && $packs['ThreePack'] == 7){
            $random = [4,6];
            $logics->ActionFive($random[array_rand($random, 1)]);
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 4 && $packs['ThreePack'] == 7){
            $random = rand(1, 2);
            if($random == 1){
                $random = [1,2];
                $logics->ActionSix($random[array_rand($random, 1)]);
            }else{
                $random = [5,6];
                $logics->ActionSeven($random[array_rand($random, 1)]);
            }
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 3 && $packs['ThreePack'] == 7){
            $logics->ActionEight();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 2 && $packs['ThreePack'] == 7){
            $logics->ActionNine();
        }
        
        if($packs['OnePack'] == 3 && $packs['TwoPack'] == 1 && $packs['ThreePack'] == 7){
            $logics->ActionTen();
        }
        
    }
}

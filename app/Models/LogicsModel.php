<?php

namespace App\Models;

class LogicsModel
{
    /**
     * Выполняем действие
     * Забираем определенное количество палочек
     * В зависимости от игровой ситуации
     *
     * @param 
     * @return 
     */
    public function ActionOne()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 5;
        $_SESSION['packs']['ThreePack'] = 5;
    }
    
    public function ActionTwo()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 3;
    }
    
    public function ActionThree()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 0;
    }
    
    public function ActionFour()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 1;
        // ПОБЕДА!!!
    }
    
    public function ActionFive()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 0;
        // ПОБЕДА!!!
    }
    
    public function ActionSix()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 0;
        // ПОБЕДА!!!
    }
    
}


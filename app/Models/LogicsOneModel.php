<?php

namespace App\Models;

class LogicsOneModel
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
    
    public function ActionFour(int $sticks)
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 5;
        $_SESSION['packs']['ThreePack'] = $sticks;
    }
    
    public function ActionFive(int $sticks)
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 5;
        $_SESSION['packs']['ThreePack'] = $sticks;
    }
    
    public function ActionSix(int $sticks)
    {
        $_SESSION['packs']['OnePack'] = $sticks;
        $_SESSION['packs']['TwoPack'] = 4;
        $_SESSION['packs']['ThreePack'] = 7;
    }
    
    public function ActionSeven(int $sticks)
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 4;
        $_SESSION['packs']['ThreePack'] = $sticks;
    }
    
    public function ActionEight()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 0;
        //Выводим на Победу!
    }
    
    public function ActionNine()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 1;
        //Выводим на Победу!
    }
    
    public function ActionTen()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим на Победу!
    }
    
}


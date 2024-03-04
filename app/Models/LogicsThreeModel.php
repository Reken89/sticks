<?php

namespace App\Models;

class LogicsThreeModel
{
    /**
     * Действие после третьего хода игрока
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
        $_SESSION['packs']['TwoPack'] = 4;
        $_SESSION['packs']['ThreePack'] = 4;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwo()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим компьютер на победу!
    }
    
    public function ActionThree()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 3;
        //Выводим компьютер на победу!
    }
    
    public function ActionFour()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 1;
        //Выводим компьютер на победу!
    }
    
    public function ActionFive()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 0;
        //Победа компьютера!
    }
    
    public function ActionSix()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 5;
        //Проигрышная ситуация для компьютера!
    }
    
    public function ActionSeven()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 3;
        //Выводим компьютер на победу!
    }
    
    public function ActionEight()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим компьютер на победу!
    }
    
    public function ActionNine()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 0;
        //Победа компьютера!
    }
    
    public function ActionTen()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 1;
        //Победа компьютера!
    }
    
    public function ActionEleven()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 1;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwelve()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 0;
        //Выводим компьютер на победу!
    }
    
    public function ActionThirteen()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 3;
        //Выводим компьютер на победу!
    }
    
    public function ActionFourteen()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим компьютер на победу!
    }
    
    public function ActionFifteen()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 1;
        //Проигрышная ситуация для компьютера
    }
    
    public function ActionSixteen()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 0;
        //Проигрышная ситуация для компьютера
    }
}    

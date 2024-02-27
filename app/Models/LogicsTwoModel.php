<?php

namespace App\Models;

class LogicsTwoModel
{
    /**
     * Действие после второго хода игрока
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
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 1;
        //Победа Компьютера!
    }
    
    public function ActionTwo()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 0;
        //Победа Компьютера!
    }
    
    public function ActionFour()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 0;
        //Победа Компьютера!
    }
    
    public function ActionFive()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 4;
        $_SESSION['packs']['ThreePack'] = 6;
    }
    
    public function ActionSix()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 5;
        $_SESSION['packs']['ThreePack'] = 4;
    }
    
    public function ActionSeven()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 5;
        $_SESSION['packs']['ThreePack'] = 5;
        //Выводим компьютер на победу!
    }
        
    public function ActionNine()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 4;
        $_SESSION['packs']['ThreePack'] = 5;
    }
    
    public function ActionTen()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 1;
        //Выводим компьютер на победу!
    }
    
    public function ActionEleven()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 0;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwelve()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 3;
        //Выводим компьютер на победу!
    }
    
    public function ActionThirteen()
    {
        $_SESSION['packs']['OnePack'] = 2;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим компьютер на победу!
    }
    
    public function ActionFourteen()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 4;
        //Проигрышная ситуация для компьютера!
    }
    
    public function ActionFifteen()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 4;
        $_SESSION['packs']['ThreePack'] = 4;
        //Выводим компьютер на победу!
    }
    
    public function ActionSixteen()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 4;
        $_SESSION['packs']['ThreePack'] = 5;
    }
    
    public function ActionSeventeen()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим компьютер на победу!
    }
    
    public function ActionEighteen()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 3;
        //Выводим компьютер на победу!
    }
    
    public function ActionNineteen()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 1;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwenty()
    {
        $_SESSION['packs']['OnePack'] = 1;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 5;
        //Проигрышная ситуация для компьютера!
    }
    
    public function ActionTwentyOne()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 0;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwentyTwo()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 1;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwentyThree()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 1;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwentyFour()
    {
        $_SESSION['packs']['OnePack'] = 3;
        $_SESSION['packs']['TwoPack'] = 0;
        $_SESSION['packs']['ThreePack'] = 3;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwentyFive()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 3;
        $_SESSION['packs']['ThreePack'] = 3;
        //Выводим компьютер на победу!
    }
    
    public function ActionTwentySix()
    {
        $_SESSION['packs']['OnePack'] = 0;
        $_SESSION['packs']['TwoPack'] = 2;
        $_SESSION['packs']['ThreePack'] = 2;
        //Выводим компьютер на победу!
    }
       
}





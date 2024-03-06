<?php

namespace App\Models;

class GameModel
{
    /**
     * Распределяем количество палочек
     * на начало игры
     *
     * @param 
     * @return array
     */
    public function StartGame(): array
    {
        $packs = [
            'OnePack'   => 3,
            'TwoPack'   => 5,
            'ThreePack' => 7,
        ];
        return $packs;    
    }
    
    /**
     * Перезапускаем игру
     * Возвращаем все палочки
     * Обнуляем ходы игрока
     *
     * @param 
     * @return array
     */
    public function Restart(): array
    {
        $packs = [
            'OnePack'   => 3,
            'TwoPack'   => 5,
            'ThreePack' => 7,
        ];
        
        $_SESSION['moves'] = 0;
        return $packs;    
    }
    
    /**
     * Подсчитываем количество 
     * ходов игрока
     *
     * @param 
     * @return 
     */
    public function CountMoves()
    {
        if(!isset($_SESSION['moves'])){
            $_SESSION['moves'] = 0;
        }  
        $_SESSION['moves'] += 1;       
    }
    
    /**
     * Проверяем введенное число
     * на соответствие,
     * должно быть не больше
     * числа палочек,
     * в выбранной пачке
     *
     * @param int $sticks, string $variant
     * @return bool
     */
    public function CheckingSticks(int $sticks, string $variant): bool
    {
        if($variant == "one"){
            return $sticks > 0 && $sticks <= $_SESSION['packs']['OnePack'] ? true : false;   
        }
        if($variant == "two"){
            return $sticks > 0 && $sticks <= $_SESSION['packs']['TwoPack'] ? true : false;   
        }
        if($variant == "three"){
            return $sticks > 0 && $sticks <= $_SESSION['packs']['ThreePack'] ? true : false;   
        }
    }
    
    /**
     * Обновляем число палочек в пачке
     *
     * @param int $sticks, string $variant
     * @return
     */
    public function UpdateSticks(int $sticks, string $variant)
    {
        if($variant == "one"){
            $_SESSION['packs']['OnePack'] = $_SESSION['packs']['OnePack'] - $sticks;
        }
        if($variant == "two"){
            $_SESSION['packs']['TwoPack'] = $_SESSION['packs']['TwoPack'] - $sticks;
        }
        if($variant == "three"){
            $_SESSION['packs']['ThreePack'] = $_SESSION['packs']['ThreePack'] - $sticks;
        }
    }
}


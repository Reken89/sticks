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
}


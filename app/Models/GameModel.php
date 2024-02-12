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
}


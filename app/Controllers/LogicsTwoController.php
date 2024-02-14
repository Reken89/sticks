<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogicsTwoModel;

class LogicsTwoController extends BaseController
{
    /**
     * Логика после второго хода игрока
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
        $logics = new LogicsTwoModel;       
    }
}





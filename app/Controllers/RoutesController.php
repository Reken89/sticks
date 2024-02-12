<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GameModel;

class RoutesController extends BaseController
{
    private $page = "/views/main.html";
    private $content = "/views/MainBack.php";
    
    /**
     * Показываем главную страницу в представлении
     *
     * @param 
     * @return render()
     */
    public function Index()
    {
        $this->view->render($this->page);
    }
    
    /**
     * Подгружаем back главной страницы в представление
     *
     * @param 
     * @return render()
     */
    public function LoadingContent()
    {
        if(!isset($_SESSION['packs'])){
            $packs = new GameModel;
            $_SESSION['packs'] = $packs->StartGame();
        }
        $this->view->render($this->content);
    }
}


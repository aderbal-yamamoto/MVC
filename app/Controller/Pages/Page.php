<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{
    /**
     * Metodo responsável por renderizar o topo da pagina
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');
    }
    /**
     * Metodo responsável por renderizar o topo da pagina
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/footer');
    }
    /**
     * Metodo responsável por retornar o conteúdo (view) da nossa pagina generica
     * @return string
     */
    public static function getPage($title, $content){
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'footer' => self::getFooter(),
            'content' => $content
        ]);

    }
}
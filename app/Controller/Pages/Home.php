<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{
    /**
     * Metodo responsável por retornar o conteúdo (view) da nossa home
     * @return string
     */
    public static function getHome(){
        $obOrganization = new Organization;
        
        //VIEW DA HOME
        $content =  View::render('pages/home', [
            'name' => $obOrganization->name, 
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);
        //RETORNA A VIEW DA PAGINA
        return parent::getPage('Wdev - canal - Home', $content);

    }
}
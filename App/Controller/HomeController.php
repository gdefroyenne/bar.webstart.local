<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class HomeController extends Controller implements ControllerInterface {
    public function show() {
        $introduction = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

        $sqlCards = "SELECT * FROM card WHERE active = 1";
        $sqlServers = "SELECT * FROM server WHERE active = 1";
        
        $cards = $this->getData($sqlCards);
        $servers = $this->getData($sqlServers);

        $arrayToTemplate = ['title' => 'Webstart Bar', 'introduction' => $introduction ,'cards' => $cards, 'servers' => $servers];

        $this->render($arrayToTemplate, 'Home');
    }
}
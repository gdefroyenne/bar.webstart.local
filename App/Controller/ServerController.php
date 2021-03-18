<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class ServerController extends Controller implements ControllerInterface {
    public function show() {
        $introduction = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        
        $sql = "SELECT * FROM server";
        $servers = $this->getData($sql);

        $arrayToTemplate = ['title' => "Serveurs de l'établissement", 'introduction' => $introduction ,'servers' => $servers];

        $this->render($arrayToTemplate, 'Servers');
    }

    public function showById() {
        $sql = "SELECT * FROM server WHERE id = " . $_GET['id'];
        $server = $this->getData($sql);

        $arrayToTemplate = ['title' => $server[0]['firstname'] . ' ' . $server[0]['lastname'], 'server' => $server[0]];

        $this->render($arrayToTemplate, 'Server');
    }

    public function toggle() {
        $sql = "SELECT * FROM server";
        $servers = $this->getData($sql);

        $arrayToTemplate = ['title' => "Serveurs de l'établissement", 'servers' => $servers];

        $this->render($arrayToTemplate, 'Toggle');
    }

    public function toggleById() {
        $sqlServer = "SELECT * FROM server WHERE id = " . $_GET['id'];
        $server = $this->getData($sqlServer);

        $server[0]['active'] == 1 ? $active = 0 : $active = 1;

        $sqlToggle = "UPDATE server SET server.active = " . $active . " WHERE server.id = " . $_GET['id'];
        $this->getData($sqlToggle);
        $this->toggle();
    }
}
<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class CardController extends Controller implements ControllerInterface {
    public function show() {
        $introduction = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        
        $sql = "SELECT * FROM card";
        $cards = $this->getData($sql);

        $arrayToTemplate = ['title' => 'Cartes disponibles en ce moment', 'introduction' => $introduction ,'cards' => $cards];

        $this->render($arrayToTemplate, 'Cards');
    }

    public function showById() {
        $sqlCard = "SELECT * FROM card WHERE id = " . $_GET['id'];
        $card = $this->getData($sqlCard);
        $sqlDrinks = "SELECT * FROM drink d INNER JOIN card_has_drink cd ON cd.drink_id = d.id INNER JOIN drink_has_category dc ON dc.drink_id = d.id WHERE cd.card_id = " . $_GET['id'] . " ORDER BY dc.category_id";
        $drinks = $this->getData($sqlDrinks);

        $arrayToTemplate = ['title' => $card[0]['title'], 'description' => $card[0]['description'], 'drinks' => $drinks];

        $this->render($arrayToTemplate, 'Card');
    }

    public function toggle() {
        $sql = "SELECT * FROM card";
        $cards = $this->getData($sql);

        $arrayToTemplate = ['title' => "Cartes de l'établissement", 'cards' => $cards];

        $this->render($arrayToTemplate, 'ToggleCard');
    }

    public function toggleById() {
        $sqlCard = "SELECT * FROM card WHERE id = " . $_GET['id'];
        $card = $this->getData($sqlCard);

        $card[0]['active'] == 1 ? $active = 0 : $active = 1;

        $sqlToggle = "UPDATE card SET card.active = " . $active . " WHERE card.id = " . $_GET['id'];
        $this->getData($sqlToggle);
        $this->toggle();
    }
}
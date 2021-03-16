<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class DrinkController extends Controller implements ControllerInterface {
    public function show() {
        $cocktail = false;

        $sqlDrink = "SELECT * FROM drink WHERE id = " . $_GET['id'];
        $drink = $this->getData($sqlDrink);

        $sqlCategories = "SELECT * FROM drink_has_category WHERE drink_id = " . $_GET['id'];
        $categories = $this->getData($sqlCategories);

        foreach($categories as $category) if($category['category_id'] == 3) $cocktail = true;

        if($cocktail) {
            $sqlIngredients = "SELECT * FROM ingredient WHERE drink_id = " . $_GET['id'];
            $ingredients = $this->getData($sqlIngredients);

            $arrayToTemplate = ['title' => $drink[0]['title'], 'drink' => $drink[0], 'ingredients' => $ingredients];

            $this->render($arrayToTemplate, 'Cocktail');
        } else {
            $arrayToTemplate = ['title' => $drink[0]['title'], 'drink' => $drink[0]];

            $this->render($arrayToTemplate, 'Drink');
        }
    }
}
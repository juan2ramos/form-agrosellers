<?php

namespace ArticoForm\Controllers;

use ArticoForm\Model\Farm;
use ArticoForm\Model\Region;
use ArticoForm\Model\User;

class HomeController
{
    function index()
    {
        if (!empty($_POST)) {
            $this->indexPost();
        } else {
            $this->indexGet();
        }
    }

    private function indexGet()
    {

        $user = new User();
        $users = $user->index();
        $region = new Region();
        $farm = new Farm();
        $regions = $region->index();
        $farms = $farm->index();
        view('index', compact('users','regions','farms'));
    }

    private function indexPost()
    {
        $this->validate($_POST);
        $user = new User();
        $region = new Region();
        $farm = new Farm();
        $regions = $region->index();
        $farms = $farm->index();
        if (empty($errors = $this->validate($_POST))) {
            $_POST['farming'] = implode(",", $_POST['farming']);
            $user->insertNew($_POST);
            $message = true;
            view('index', compact('users', 'message'));
            return;
        }
        view('index', compact('users','regions','farms', 'errors'));
    }

    private function validate($posts)
    {
        $errors = [];
        $fields = [
            'name' => 'Nombre de empresa',
            'email' => 'E-mail',
            'city' => 'Ciudad',
            'farming' => 'Cultivos',
        ];
        foreach ($posts as $key => $post) {
            if (empty($post)) {
                $errors[$key] = "El campo " . $fields[$key] . " es obligatorio";
            }
        }
        return $errors;
    }

}
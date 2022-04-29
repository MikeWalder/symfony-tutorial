<?php

namespace App\Controller;

use Symfony\Component\HTTPFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController {

    /**
     * @Route("/", name="home")
     */

    public function home() {
        return new Response("Bonjour voici une route");
    }

}
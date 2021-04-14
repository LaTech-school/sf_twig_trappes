<?php

namespace App\Controller;

use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        // DataBinding
        $variable_en_php = "valeur de la variable PHP";


        // Declaration du tableau $fruits utilisé sur la "boucle sur un tableau"
        $fruits = [
            "Pommes",
            "Poires",
            "Kiwi",
        ];


        $users = [
            [
                'firstname' => "Bruce",
                'lastname' => "Wayne",
            ],
            [
                'firstname' => "Clark",
                'lastname' => "Kent",
            ],
        ];


        return $this->render('default/index.html.twig', [
            'color' => "red",
            'fruits' => $fruits,
            'users' => $users,
            'variable_pour_twig' => $variable_en_php,
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
                "id" => 0,
                'title' => 'Je suis une super question',
                'content' => 'Opibus cum ibique pascebantur densis cum inveniretur ibique intersaepientes Isauriae.',
                'rating' => 20,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/women/36.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                "id" => 1,
                'title' => 'Je suis une super question',
                'content' => 'Opibus cum ibique pascebantur densis cum inveniretur ibique intersaepientes Isauriae.',
                'rating' => 0,
                'author' => [
                    'name' => 'Julie Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/women/50.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                "id" => 2,
                'title' => 'Je suis une super question',
                'content' => 'Opibus cum ibique pascebantur densis cum inveniretur ibique intersaepientes Isauriae.',
                'rating' => -13,
                'author' => [
                    'name' => 'Anne Stone',
                    'avatar' => 'https://randomuser.me/api/portraits/women/33.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                "id" => 3,
                'title' => 'Je suis une super question',
                'content' => 'Opibus cum ibique pascebantur densis cum inveniretur ibique intersaepientes Isauriae.',
                'rating' => -20,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/women/36.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                "id" => 4,
                'title' => 'Je suis une super question',
                'content' => 'Opibus cum ibique pascebantur densis cum inveniretur ibique intersaepientes Isauriae.',
                'rating' => 20,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/women/36.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                "id" => 5,
                'title' => 'Je suis une super question',
                'content' => 'Opibus cum ibique pascebantur densis cum inveniretur ibique intersaepientes Isauriae.',
                'rating' => 20,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar' => 'https://randomuser.me/api/portraits/women/36.jpg'
                ],
                'nbrOfResponse' => 15
            ],
        ];

        return $this->render('home/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}

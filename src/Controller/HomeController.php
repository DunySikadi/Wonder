<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PaginatorInterface $questions, Request $request, QuestionRepository $questionRepository): Response
    {

        $query = $questionRepository->findBy([],["createdAt" => "DESC"]);
        $max=2;
        $page=1;
        $en = round(count($query)/$max); 
        $array = [];

        for ($i=0; $i < $en ; $i++) { 
            # code...
            $array[$i] = $i+1;
        }
    
        $questions = $questions->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1), /*page number*/
        $max /*limit per page*/);

        return $this->render('home/index.html.twig', [
            'questions' => $questions,
            'array' => $array,
            "page" => $page
        ]);
    }

    #[Route('/?{page}', name: 'page')]
    public function page(int $page,PaginatorInterface $questions, Request $request, QuestionRepository $questionRepository): Response
    {

        $query = $questionRepository->findBy([],["createdAt" => "DESC"]);
        $max = 2;
        $en = round(count($query)/$max); 
        $array = [];

        for ($i=0; $i < $en ; $i++) { 
            # code...
            $array[$i] = $i+1;
        }

      $questions = $questions->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', $page), /*page number*/
        $max /*limit per page*/
    );

        return $this->render('home/index.html.twig', [
            'questions' => $questions,
            'array' => $array,
            'page' => $page
        ]);
    }
}

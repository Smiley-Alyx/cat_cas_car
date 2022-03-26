<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Это наша первая стрнаица на Symfony');
    }

    /**
     * @Route("/articles/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'Contencio, clinias, et cannabis.',
            'Humani generiss ortum in hafnia!',
            'Resistere superbe ducunt ad primus fides.'
        ];

        return $this->render('articles/show.html.twig', [
            'article' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}

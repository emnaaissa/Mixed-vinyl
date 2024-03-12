<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController  extends AbstractController
{
    #[Route("/", name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'Jericho', 'artist' => 'Iniko '],
            ['song' => 'Locked Out Of Heaven', 'artist' => 'Bruno Mars'],
            ['song' => 'Beautiful Things', 'artist' => 'Benson Boone'],
            ['song' => 'Dandelions', 'artist' => 'Ruth B.'],
            ['song' => 'Charlie Puth-Dangerously', 'artist' => 'Charlie Puth'],
        ];
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }
    #[Route('/browse/{slug}', name: 'app_browse')]

    public function browse($slug = null): Response
    {
        $genre  = $slug ? 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true) : null;

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}

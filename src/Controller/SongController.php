<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger): Response
    {

        $songs = [
            1 => ['name' => 'Iniko - Jericho', 'url' => '/audio/Iniko - Jericho.mp3'],
            2 => ['name' => 'Locked Out Of Heaven - Bruno Mars', 'url' => '/audio/Locked Out Of Heaven - Bruno Mars.mp3'],
            3 => ['name' => 'Benson Boone-Beautiful Things', 'url' => '/audio/Benson Boone-Beautiful Things.mp3'],
            4 => ['name' => 'Ruth B.-Dandelions', 'url' => '/audio/Ruth B.-Dandelions.mp3'],
            5 => ['name' => 'Charlie Puth-Dangerously', 'url' => '/audio/Charlie Puth-Dangerously.mp3'],

        ];


        return $this->json($songs[$id]);
    }
}

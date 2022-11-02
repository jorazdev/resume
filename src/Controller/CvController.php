<?php

namespace App\Controller;

use App\Manager\CvManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    public function __construct(
        private readonly CvManager $cvManager){}

    #[Route('/api/cv/download', name: 'download', methods: 'GET')]
    public function download(): Response
    {
        return $this->cvManager->download();
    }
}

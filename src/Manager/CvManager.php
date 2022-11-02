<?php

namespace App\Manager;

use App\Services\CvService;
use App\Services\ToolsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CvManager extends BaseManager
{
    public function __construct(
        EntityManagerInterface $em,
        RequestStack $request,
        Security $security,
        NormalizerInterface $normalizer,
        private readonly CvService $cvService,
        private readonly ToolsService $toolsService)
    {
        parent::__construct($em, $request, $security, $normalizer);
    }

    public function download()
    {
        $template = 'email/cv.html.twig';
        $namePdf = 'cv';
        $output = $this->toolsService->generateHtmlPdf($this->cvService->getContext(), $template, $namePdf);
        return $this->success(['output' => $output]);
    }
}
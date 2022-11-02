<?php

namespace App\Services;

use Knp\Snappy\Pdf;
use Symfony\Component\HttpKernel\KernelInterface;
use Twig\Environment;

class ToolsService
{

    public function __construct(
        private readonly KernelInterface $kernel,
        private readonly Environment $twig,
        private readonly Pdf $pdf)
    {

    }

    public function generateHtmlPdf(array $context, string $template, string $namePdf)
    {
        $public = $this->kernel->getProjectDir().'/public';
        $dir = $public.'/data';
        if(!is_dir($dir)){
            mkdir($dir, 0777);
        }

        $html = $this->twig->render($template, $context);
        $output = $dir.'/'.$namePdf.'.pdf';
        if(is_file($output)){
            unlink($output);
        }
        $this->pdf->generateFromHtml($html, $output);

        return '/data/'.$namePdf.'.pdf';
    }
}
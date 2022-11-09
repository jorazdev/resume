<?php

namespace App\Controller;


use App\Manager\BlockLeftManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlockLeftController extends AbstractController
{
    public function __construct(
        private readonly BlockLeftManager $blockLeftManager)
    {

    }

    #[Route('/api/block-left/update', name: 'block_left_update', methods: 'POST')]
    public function updateBlockLeft(): Response
    {
        return $this->blockLeftManager->updateBlockLeft();
    }

    #[Route('/api/block-left/all', name: 'block_left_all', methods: 'GET')]
    public function allBlockLeft(): Response
    {
        return $this->blockLeftManager->allBlockLeft();
    }

    #[Route('/api/block-left-item/update', name: 'block_left_item_update', methods: 'POST')]
    public function updateBlockLeftItem(): Response
    {
        return $this->blockLeftManager->updateBlockLeftItem();
    }
}

<?php

namespace App\Manager;

use App\Entity\BlockLeft;
use App\Entity\BlockLeftItem;
use App\Entity\ItemLeft;
use App\Repository\BlockLeftRepository;
use App\Repository\BlockLeftItemRepository;
use App\Repository\ItemLeftRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BlockLeftManager extends BaseManager
{
    public function __construct(
        EntityManagerInterface $em,
        RequestStack $request,
        Security $security,
        NormalizerInterface $normalizer,
        private readonly BlockLeftRepository $blockLeftRepository,
        private readonly BlockLeftItemRepository $blockLeftItemRepository,
        private readonly ItemLeftRepository $itemLeftRepository)
    {
        parent::__construct($em, $request, $security, $normalizer);
    }

    public function updateBlockLeft()
    {
        if($this->data->id == 0){
            $blockLeft = new BlockLeft();
        }else {
            $blockLeft = $this->blockLeftRepository->find($this->data->id);
        }

        $blockLeft->setLabel($this->data->label);
        $this->save($blockLeft);

        return $this->success(['blockLeft' => $this->normalize($blockLeft,['groups' => ['show_block_left']])]);
    }

    public function allBlockLeft()
    {
        $blockLefts = $this->blockLeftRepository->findAll();
        return $this->success(['blockLefts' => $this->normalize($blockLefts,['groups' => ['show_block_left']])]);
    }

    public function updateBlockLeftItem()
    {
      
        $blockLeft = $this->blockLeftRepository->find($this->data->id);

        if($this->data->blockLeftItem->id == 0){
            $blockLeftItem = new BlockLeftItem();
        }else {
            $blockLeftItem = $this->blockLeftItemRepository->find($this->data->blockLeftItem->id);
        }

        $blockLeftItem->setBlockLeft($blockLeft);
        $blockLeftItem->setTitle($this->data->blockLeftItem->title);
        $this->save($blockLeftItem);
       
        foreach($this->data->blockLeftItem->itemLefts as $item){
            $itemLeft = new ItemLeft();
            $itemLeft->setBlockLeftItem($blockLeftItem);
            $itemLeft->setUuid($item->uuid);
            $itemLeft->setTitle($item->title);
            $this->save($itemLeft);
        }

        $blockLeftItem = $this->blockLeftItemRepository->find($blockLeftItem->getId());
        $itemLefts = $this->itemLeftRepository->findBy(['blockLeftItem' => $blockLeftItem]);
        $itemLefts = $this->normalize($itemLefts,['groups' => ['show_left_item']]);
        $blockLeftItem = $this->normalize($blockLeftItem,['groups' => ['update_block_left_item']]);
        $blockLeftItem['itemLefts'] = $itemLefts;
    
        return $this->success(['blockLeftItem' => $blockLeftItem ]);
    }
}
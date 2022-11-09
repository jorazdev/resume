<?php

namespace App\Entity;

use App\Repository\ItemLeftRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ItemLeftRepository::class)]
class ItemLeft
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['show_left_item','show_block_left','show_block_left_item','update_block_left_item'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['show_left_item','show_block_left','show_block_left_item','update_block_left_item'])]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['show_left_item','show_block_left','show_block_left_item','update_block_left_item'])]
    private ?string $uuid = null;

    #[ORM\ManyToOne(inversedBy: 'itemLefts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?BlockLeftItem $blockLeftItem = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBlockLeftItem(): ?BlockLeftItem
    {
        return $this->blockLeftItem;
    }

    public function setBlockLeftItem(?BlockLeftItem $blockLeftItem): self
    {
        $this->blockLeftItem = $blockLeftItem;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\BlockLeftItemRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BlockLeftItemRepository::class)]
class BlockLeftItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['show_block_left_item','show_block_left','update_block_left_item'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['show_block_left_item','show_block_left','update_block_left_item'])]
    private ?string $title = null;

    #[ORM\ManyToOne(inversedBy: 'blockLeftItems')]
    #[ORM\JoinColumn(nullable: false)]
    private ?BlockLeft $blockLeft = null;

    #[ORM\OneToMany(mappedBy: 'blockLeftItem', targetEntity: ItemLeft::class)]
    #[Groups(['show_block_left_item','show_block_left','update_block_left_item'])]
    private Collection $itemLefts;

    public function __construct()
    {
        $this->itemLefts = new ArrayCollection();
    }

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

    public function getBlockLeft(): ?BlockLeft
    {
        return $this->blockLeft;
    }

    public function setBlockLeft(?BlockLeft $blockLeft): self
    {
        $this->blockLeft = $blockLeft;

        return $this;
    }

    /**
     * @return Collection<int, ItemLeft>
     */
    public function getItemLefts(): Collection
    {
        return $this->itemLefts;
    }

    public function addItemLeft(ItemLeft $itemLeft): self
    {
        if (!$this->itemLefts->contains($itemLeft)) {
            $this->itemLefts->add($itemLeft);
            $itemLeft->setBlockLeftItem($this);
        }

        return $this;
    }

    public function removeItemLeft(ItemLeft $itemLeft): self
    {
        if ($this->itemLefts->removeElement($itemLeft)) {
            // set the owning side to null (unless already changed)
            if ($itemLeft->getBlockLeftItem() === $this) {
                $itemLeft->setBlockLeftItem(null);
            }
        }

        return $this;
    }
}

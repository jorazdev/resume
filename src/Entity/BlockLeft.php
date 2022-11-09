<?php

namespace App\Entity;

use App\Repository\BlockLeftRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BlockLeftRepository::class)]
class BlockLeft
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['show_block_left'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['show_block_left'])]
    private ?string $label = null;

    #[ORM\Column(length: 20, nullable: true)]
    #[Groups(['show_block_left'])]
    private ?string $icon = null;

    #[ORM\OneToMany(mappedBy: 'blockLeft', targetEntity: BlockLeftItem::class)]
    #[Groups(['show_block_left'])]
    private Collection $blockLeftItems;

    public function __construct()
    {
        $this->blockLeftItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return Collection<int, BlockLeftItem>
     */
    public function getBlockLeftItems(): Collection
    {
        return $this->blockLeftItems;
    }

    public function addBlockLeftItem(BlockLeftItem $blockLeftItem): self
    {
        if (!$this->blockLeftItems->contains($blockLeftItem)) {
            $this->blockLeftItems->add($blockLeftItem);
            $blockLeftItem->setBlockLeft($this);
        }

        return $this;
    }

    public function removeBlockLeftItem(BlockLeftItem $blockLeftItem): self
    {
        if ($this->blockLeftItems->removeElement($blockLeftItem)) {
            // set the owning side to null (unless already changed)
            if ($blockLeftItem->getBlockLeft() === $this) {
                $blockLeftItem->setBlockLeft(null);
            }
        }

        return $this;
    }
}

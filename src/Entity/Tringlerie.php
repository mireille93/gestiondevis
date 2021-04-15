<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tringlerie
 *
 * @ORM\Table(name="tringlerie")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TringlerieRepository")
 */
class Tringlerie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=256, nullable=false)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="typetringlerie", type="string", length=255, nullable=false)
     */
    private $typetringlerie;

    /**
     * @var int
     *
     * @ORM\Column(name="cro", type="integer", nullable=false)
     */
    private $cro;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="id_tringlerie")
     */
    private $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getTypetringlerie(): ?string
    {
        return $this->typetringlerie;
    }

    public function setTypetringlerie(string $typetringlerie): self
    {
        $this->typetringlerie = $typetringlerie;

        return $this;
    }

    public function getCro(): ?int
    {
        return $this->cro;
    }

    public function setCro(int $cro): self
    {
        $this->cro = $cro;

        return $this;
    }

    /**
     * @return Collection|Item[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Item $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setIdTringlerie($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getIdTringlerie() === $this) {
                $item->setIdTringlerie(null);
            }
        }

        return $this;
    }
}

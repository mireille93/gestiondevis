<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Accessoire
 *
 * @ORM\Table(name="accessoire")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\AccessoireRepository")
 */
class Accessoire
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
     * @ORM\Column(name="designationace", type="string", length=255, nullable=false)
     */
    private $designationace;

    /**
     * @var string
     *
     * @ORM\Column(name="typeace", type="string", length=255, nullable=false)
     */
    private $typeace;

    /**
     * @var int
     *
     * @ORM\Column(name="croace", type="integer", nullable=false)
     */
    private $croace;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="id_accessoire")
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

    public function getDesignationace(): ?string
    {
        return $this->designationace;
    }

    public function setDesignationace(string $designationace): self
    {
        $this->designationace = $designationace;

        return $this;
    }

    public function getTypeace(): ?string
    {
        return $this->typeace;
    }

    public function setTypeace(string $typeace): self
    {
        $this->typeace = $typeace;

        return $this;
    }

    public function getCroace(): ?int
    {
        return $this->croace;
    }

    public function setCroace(int $croace): self
    {
        $this->croace = $croace;

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
            $item->setIdAcessoire($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getIdAccessoire() === $this) {
                $item->setIdAccessoire(null);
            }
        }

        return $this;
    }
}

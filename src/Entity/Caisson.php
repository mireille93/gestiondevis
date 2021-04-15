<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Caisson
 *
 * @ORM\Table(name="caisson")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CaissonRepository")
 */
class Caisson
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
     * @ORM\Column(name="fonctioncss", type="string", length=255, nullable=false)
     */
    private $fonctioncss;

    /**
     * @var int
     *
     * @ORM\Column(name="crocss", type="integer", nullable=false)
     */
    private $crocss;

    /**
     * @var string
     *
     * @ORM\Column(name="disctypecss", type="string", length=255, nullable=false)
     */
    private $disctypecss;

    /**
     * @var string
     *
     * @ORM\Column(name="rbcss", type="string", length=255, nullable=false)
     */
    private $rbcss;

    /**
     * @var string
     *
     * @ORM\Column(name="positioncss", type="string", length=255, nullable=false)
     */
    private $positioncss;

    /**
     * @var string
     *
     * @ORM\Column(name="positionpolecss", type="string", length=255, nullable=false)
     */
    private $positionpolecss;

    /**
     * @var string
     *
     * @ORM\Column(name="typephasecss", type="string", length=255, nullable=false)
     */
    private $typephasecss;

    /**
     * @var string
     *
     * @ORM\Column(name="normecss", type="string", length=255, nullable=false)
     */
    private $normecss;

    /**
     * @var string
     *
     * @ORM\Column(name="typemateriaucss", type="string", length=255, nullable=false)
     */
    private $typemateriaucss;

    /**
     * @var int
     *
     * @ORM\Column(name="eppeintcss", type="integer", nullable=false)
     */
    private $eppeintcss;

    /**
     * @var string
     *
     * @ORM\Column(name="typercdrmcss", type="string", length=255, nullable=false)
     */
    private $typercdrmcss;

    /**
     * @var string
     *
     * @ORM\Column(name="hublotinfrarcss", type="string", length=255, nullable=false)
     */
    private $hublotinfrarcss;

    /**
     * @var int
     *
     * @ORM\Column(name="epmateriaucss", type="integer", nullable=false)
     */
    private $epmateriaucss;

    /**
     * @var string
     *
     * @ORM\Column(name="eclairagecss", type="string", length=255, nullable=false)
     */
    private $eclairagecss;

    /**
     * @var string
     *
     * @ORM\Column(name="chauffagecss", type="string", length=255, nullable=false)
     */
    private $chauffagecss;

    /**
     * @var string
     *
     * @ORM\Column(name="typepeintcss", type="string", length=255, nullable=false)
     */
    private $typepeintcss;

    /**
     * @var string
     *
     * @ORM\Column(name="assblydrwnbcss", type="string", length=255, nullable=false)
     */
    private $assblydrwnbcss;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="id_caisson")
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

    public function getFonctioncss(): ?string
    {
        return $this->fonctioncss;
    }

    public function setFonctioncss(string $fonctioncss): self
    {
        $this->fonctioncss = $fonctioncss;

        return $this;
    }

    public function getCrocss(): ?int
    {
        return $this->crocss;
    }

    public function setCrocss(int $crocss): self
    {
        $this->crocss = $crocss;

        return $this;
    }

    public function getDisctypecss(): ?string
    {
        return $this->disctypecss;
    }

    public function setDisctypecss(string $disctypecss): self
    {
        $this->disctypecss = $disctypecss;

        return $this;
    }

    public function getRbcss(): ?string
    {
        return $this->rbcss;
    }

    public function setRbcss(string $rbcss): self
    {
        $this->rbcss = $rbcss;

        return $this;
    }

    public function getPositioncss(): ?string
    {
        return $this->positioncss;
    }

    public function setPositioncss(string $positioncss): self
    {
        $this->positioncss = $positioncss;

        return $this;
    }

    public function getPositionpolecss(): ?string
    {
        return $this->positionpolecss;
    }

    public function setPositionpolecss(string $positionpolecss): self
    {
        $this->positionpolecss = $positionpolecss;

        return $this;
    }

    public function getTypephasecss(): ?string
    {
        return $this->typephasecss;
    }

    public function setTypephasecss(string $typephasecss): self
    {
        $this->typephasecss = $typephasecss;

        return $this;
    }

    public function getNormecss(): ?string
    {
        return $this->normecss;
    }

    public function setNormecss(string $normecss): self
    {
        $this->normecss = $normecss;

        return $this;
    }

    public function getTypemateriaucss(): ?string
    {
        return $this->typemateriaucss;
    }

    public function setTypemateriaucss(string $typemateriaucss): self
    {
        $this->typemateriaucss = $typemateriaucss;

        return $this;
    }

    public function getEppeintcss(): ?int
    {
        return $this->eppeintcss;
    }

    public function setEppeintcss(int $eppeintcss): self
    {
        $this->eppeintcss = $eppeintcss;

        return $this;
    }

    public function getTypercdrmcss(): ?string
    {
        return $this->typercdrmcss;
    }

    public function setTypercdrmcss(string $typercdrmcss): self
    {
        $this->typercdrmcss = $typercdrmcss;

        return $this;
    }

    public function getHublotinfrarcss(): ?string
    {
        return $this->hublotinfrarcss;
    }

    public function setHublotinfrarcss(string $hublotinfrarcss): self
    {
        $this->hublotinfrarcss = $hublotinfrarcss;

        return $this;
    }

    public function getEpmateriaucss(): ?int
    {
        return $this->epmateriaucss;
    }

    public function setEpmateriaucss(int $epmateriaucss): self
    {
        $this->epmateriaucss = $epmateriaucss;

        return $this;
    }

    public function getEclairagecss(): ?string
    {
        return $this->eclairagecss;
    }

    public function setEclairagecss(string $eclairagecss): self
    {
        $this->eclairagecss = $eclairagecss;

        return $this;
    }

    public function getChauffagecss(): ?string
    {
        return $this->chauffagecss;
    }

    public function setChauffagecss(string $chauffagecss): self
    {
        $this->chauffagecss = $chauffagecss;

        return $this;
    }

    public function getTypepeintcss(): ?string
    {
        return $this->typepeintcss;
    }

    public function setTypepeintcss(string $typepeintcss): self
    {
        $this->typepeintcss = $typepeintcss;

        return $this;
    }

    public function getAssblydrwnbcss(): ?string
    {
        return $this->assblydrwnbcss;
    }

    public function setAssblydrwnbcss(string $assblydrwnbcss): self
    {
        $this->assblydrwnbcss = $assblydrwnbcss;

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
            $item->setIdCaisson($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getIdCaisson() === $this) {
                $item->setIdCaisson(null);
            }
        }

        return $this;
    }
}

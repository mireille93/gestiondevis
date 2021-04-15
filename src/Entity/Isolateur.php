<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Isolateur
 *
 * @ORM\Table(name="isolateur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\IsolateurRepository")
 */
class Isolateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numarticleorigiso", type="integer", nullable=false)
     */
    private $numarticleorigiso;

    /**
     * @var string
     *
     * @ORM\Column(name="matiereiso", type="string", length=255, nullable=false)
     */
    private $matiereiso;

    /**
     * @var string
     *
     * @ORM\Column(name="marcheiso", type="string", length=255, nullable=false)
     */
    private $marcheiso;

    /**
     * @var string
     *
     * @ORM\Column(name="designationiso", type="string", length=255, nullable=false)
     */
    private $designationiso;

    /**
     * @var string
     *
     * @ORM\Column(name="classeeffortiso", type="string", length=255, nullable=false)
     */
    private $classeeffortiso;

    /**
     * @var int
     *
     * @ORM\Column(name="biliso", type="integer", nullable=false)
     */
    private $biliso;

    /**
     * @var string
     *
     * @ORM\Column(name="cliso", type="string", length=255, nullable=false)
     */
    private $cliso;

    /**
     * @var int
     *
     * @ORM\Column(name="crosio", type="integer", nullable=false)
     */
    private $crosio;

    /**
     * @var int
     *
     * @ORM\Column(name="lfiso", type="integer", nullable=false)
     */
    private $lfiso;

    /**
     * @var string
     *
     * @ORM\Column(name="couleuriso", type="string", length=255, nullable=false)
     */
    private $couleuriso;

    /**
     * @var string
     *
     * @ORM\Column(name="homologationiso", type="string", length=255, nullable=false)
     */
    private $homologationiso;

    /**
     * @var int
     *
     * @ORM\Column(name="fixbasiso", type="integer", nullable=false)
     */
    private $fixbasiso;

    /**
     * @var int
     *
     * @ORM\Column(name="fixhautiso", type="integer", nullable=false)
     */
    private $fixhautiso;

    /**
     * @var string
     *
     * @ORM\Column(name="frsiso", type="string", length=255, nullable=false)
     */
    private $frsiso;

    /**
     * @var int
     *
     * @ORM\Column(name="dimailetiso", type="integer", nullable=false)
     */
    private $dimailetiso;

    /**
     * @var float
     *
     * @ORM\Column(name="poidsiso", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsiso;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="id_isolateur")
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

    public function getNumarticleorigiso(): ?int
    {
        return $this->numarticleorigiso;
    }

    public function setNumarticleorigiso(int $numarticleorigiso): self
    {
        $this->numarticleorigiso = $numarticleorigiso;

        return $this;
    }

    public function getMatiereiso(): ?string
    {
        return $this->matiereiso;
    }

    public function setMatiereiso(string $matiereiso): self
    {
        $this->matiereiso = $matiereiso;

        return $this;
    }

    public function getMarcheiso(): ?string
    {
        return $this->marcheiso;
    }

    public function setMarcheiso(string $marcheiso): self
    {
        $this->marcheiso = $marcheiso;

        return $this;
    }

    public function getDesignationiso(): ?string
    {
        return $this->designationiso;
    }

    public function setDesignationiso(string $designationiso): self
    {
        $this->designationiso = $designationiso;

        return $this;
    }

    public function getClasseeffortiso(): ?string
    {
        return $this->classeeffortiso;
    }

    public function setClasseeffortiso(string $classeeffortiso): self
    {
        $this->classeeffortiso = $classeeffortiso;

        return $this;
    }

    public function getBiliso(): ?int
    {
        return $this->biliso;
    }

    public function setBiliso(int $biliso): self
    {
        $this->biliso = $biliso;

        return $this;
    }

    public function getCliso(): ?string
    {
        return $this->cliso;
    }

    public function setCliso(string $cliso): self
    {
        $this->cliso = $cliso;

        return $this;
    }

    public function getCrosio(): ?int
    {
        return $this->crosio;
    }

    public function setCrosio(int $crosio): self
    {
        $this->crosio = $crosio;

        return $this;
    }

    public function getLfiso(): ?int
    {
        return $this->lfiso;
    }

    public function setLfiso(int $lfiso): self
    {
        $this->lfiso = $lfiso;

        return $this;
    }

    public function getCouleuriso(): ?string
    {
        return $this->couleuriso;
    }

    public function setCouleuriso(string $couleuriso): self
    {
        $this->couleuriso = $couleuriso;

        return $this;
    }

    public function getHomologationiso(): ?string
    {
        return $this->homologationiso;
    }

    public function setHomologationiso(string $homologationiso): self
    {
        $this->homologationiso = $homologationiso;

        return $this;
    }

    public function getFixbasiso(): ?int
    {
        return $this->fixbasiso;
    }

    public function setFixbasiso(int $fixbasiso): self
    {
        $this->fixbasiso = $fixbasiso;

        return $this;
    }

    public function getFixhautiso(): ?int
    {
        return $this->fixhautiso;
    }

    public function setFixhautiso(int $fixhautiso): self
    {
        $this->fixhautiso = $fixhautiso;

        return $this;
    }

    public function getFrsiso(): ?string
    {
        return $this->frsiso;
    }

    public function setFrsiso(string $frsiso): self
    {
        $this->frsiso = $frsiso;

        return $this;
    }

    public function getDimailetiso(): ?int
    {
        return $this->dimailetiso;
    }

    public function setDimailetiso(int $dimailetiso): self
    {
        $this->dimailetiso = $dimailetiso;

        return $this;
    }

    public function getPoidsiso(): ?float
    {
        return $this->poidsiso;
    }

    public function setPoidsiso(float $poidsiso): self
    {
        $this->poidsiso = $poidsiso;

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
            $item->setIdIsolateur($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getIdIsolateur() === $this) {
                $item->setIdIsolateur(null);
            }
        }

        return $this;
    }
}

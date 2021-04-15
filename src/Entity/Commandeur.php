<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commandeur
 *
 * @ORM\Table(name="commandeur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CommandeurRepository")
 */
class Commandeur
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
     * @ORM\Column(name="typecom", type="string", length=255, nullable=false)
     */
    private $typecom;

    /**
     * @var string
     *
     * @ORM\Column(name="designationcom", type="string", length=255, nullable=false)
     */
    private $designationcom;

    /**
     * @var string
     *
     * @ORM\Column(name="crocom", type="string", length=255, nullable=false)
     */
    private $crocom;

    /**
     * @var string
     *
     * @ORM\Column(name="couplemancom", type="string", length=255, nullable=false)
     */
    private $couplemancom;

    /**
     * @var string
     *
     * @ORM\Column(name="verpositsercom", type="string", length=255, nullable=false)
     */
    private $verpositsercom;

    /**
     * @var string
     *
     * @ORM\Column(name="normecom", type="string", length=255, nullable=false)
     */
    private $normecom;

    /**
     * @var string
     *
     * @ORM\Column(name="materielhomcom", type="string", length=255, nullable=false)
     */
    private $materielhomcom;

    /**
     * @var string
     *
     * @ORM\Column(name="plagetempadmcom", type="string", length=255, nullable=false)
     */
    private $plagetempadmcom;

    /**
     * @var string
     *
     * @ORM\Column(name="scndechofcom", type="string", length=255, nullable=false)
     */
    private $scndechofcom;

    /**
     * @var string
     *
     * @ORM\Column(name="nbcontactauxcom", type="string", length=255, nullable=false)
     */
    private $nbcontactauxcom;

    /**
     * @var string
     *
     * @ORM\Column(name="clscontactauxcom", type="string", length=255, nullable=false)
     */
    private $clscontactauxcom;

    /**
     * @var string
     *
     * @ORM\Column(name="relaisadcom", type="string", length=255, nullable=false)
     */
    private $relaisadcom;

    /**
     * @var string
     *
     * @ORM\Column(name="rstceanticondcom", type="string", length=255, nullable=false)
     */
    private $rstceanticondcom;

    /**
     * @var string
     *
     * @ORM\Column(name="verelspcom", type="string", length=255, nullable=false)
     */
    private $verelspcom;

    /**
     * @var string
     *
     * @ORM\Column(name="eclairagecom", type="string", length=255, nullable=false)
     */
    private $eclairagecom;

    /**
     * @var string
     *
     * @ORM\Column(name="adjonctioncom", type="string", length=255, nullable=false)
     */
    private $adjonctioncom;

    /**
     * @var string
     *
     * @ORM\Column(name="prsecourtcom", type="string", length=255, nullable=false)
     */
    private $prsecourtcom;

    /**
     * @var string
     *
     * @ORM\Column(name="mcbrstcecom", type="string", length=255, nullable=false)
     */
    private $mcbrstcecom;

    /**
     * @var string
     *
     * @ORM\Column(name="mcbctrlcom", type="string", length=255, nullable=false)
     */
    private $mcbctrlcom;

    /**
     * @var string
     *
     * @ORM\Column(name="storquecom", type="string", length=255, nullable=false)
     */
    private $storquecom;

    /**
     * @var string
     *
     * @ORM\Column(name="sluxcom", type="string", length=255, nullable=false)
     */
    private $sluxcom;

    /**
     * @var string
     *
     * @ORM\Column(name="scomlancom", type="string", length=255, nullable=false)
     */
    private $scomlancom;

    /**
     * @var string
     *
     * @ORM\Column(name="scomwancom", type="string", length=255, nullable=false)
     */
    private $scomwancom;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="id_commandeur")
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

    public function getTypecom(): ?string
    {
        return $this->typecom;
    }

    public function setTypecom(string $typecom): self
    {
        $this->typecom = $typecom;

        return $this;
    }

    public function getDesignationcom(): ?string
    {
        return $this->designationcom;
    }

    public function setDesignationcom(string $designationcom): self
    {
        $this->designationcom = $designationcom;

        return $this;
    }

    public function getCrocom(): ?string
    {
        return $this->crocom;
    }

    public function setCrocom(string $crocom): self
    {
        $this->crocom = $crocom;

        return $this;
    }

    public function getCouplemancom(): ?string
    {
        return $this->couplemancom;
    }

    public function setCouplemancom(string $couplemancom): self
    {
        $this->couplemancom = $couplemancom;

        return $this;
    }

    public function getVerpositsercom(): ?string
    {
        return $this->verpositsercom;
    }

    public function setVerpositsercom(string $verpositsercom): self
    {
        $this->verpositsercom = $verpositsercom;

        return $this;
    }

    public function getNormecom(): ?string
    {
        return $this->normecom;
    }

    public function setNormecom(string $normecom): self
    {
        $this->normecom = $normecom;

        return $this;
    }

    public function getMaterielhomcom(): ?string
    {
        return $this->materielhomcom;
    }

    public function setMaterielhomcom(string $materielhomcom): self
    {
        $this->materielhomcom = $materielhomcom;

        return $this;
    }

    public function getPlagetempadmcom(): ?string
    {
        return $this->plagetempadmcom;
    }

    public function setPlagetempadmcom(string $plagetempadmcom): self
    {
        $this->plagetempadmcom = $plagetempadmcom;

        return $this;
    }

    public function getScndechofcom(): ?string
    {
        return $this->scndechofcom;
    }

    public function setScndechofcom(string $scndechofcom): self
    {
        $this->scndechofcom = $scndechofcom;

        return $this;
    }

    public function getNbcontactauxcom(): ?string
    {
        return $this->nbcontactauxcom;
    }

    public function setNbcontactauxcom(string $nbcontactauxcom): self
    {
        $this->nbcontactauxcom = $nbcontactauxcom;

        return $this;
    }

    public function getClscontactauxcom(): ?string
    {
        return $this->clscontactauxcom;
    }

    public function setClscontactauxcom(string $clscontactauxcom): self
    {
        $this->clscontactauxcom = $clscontactauxcom;

        return $this;
    }

    public function getRelaisadcom(): ?string
    {
        return $this->relaisadcom;
    }

    public function setRelaisadcom(string $relaisadcom): self
    {
        $this->relaisadcom = $relaisadcom;

        return $this;
    }

    public function getRstceanticondcom(): ?string
    {
        return $this->rstceanticondcom;
    }

    public function setRstceanticondcom(string $rstceanticondcom): self
    {
        $this->rstceanticondcom = $rstceanticondcom;

        return $this;
    }

    public function getVerelspcom(): ?string
    {
        return $this->verelspcom;
    }

    public function setVerelspcom(string $verelspcom): self
    {
        $this->verelspcom = $verelspcom;

        return $this;
    }

    public function getEclairagecom(): ?string
    {
        return $this->eclairagecom;
    }

    public function setEclairagecom(string $eclairagecom): self
    {
        $this->eclairagecom = $eclairagecom;

        return $this;
    }

    public function getAdjonctioncom(): ?string
    {
        return $this->adjonctioncom;
    }

    public function setAdjonctioncom(string $adjonctioncom): self
    {
        $this->adjonctioncom = $adjonctioncom;

        return $this;
    }

    public function getPrsecourtcom(): ?string
    {
        return $this->prsecourtcom;
    }

    public function setPrsecourtcom(string $prsecourtcom): self
    {
        $this->prsecourtcom = $prsecourtcom;

        return $this;
    }

    public function getMcbrstcecom(): ?string
    {
        return $this->mcbrstcecom;
    }

    public function setMcbrstcecom(string $mcbrstcecom): self
    {
        $this->mcbrstcecom = $mcbrstcecom;

        return $this;
    }

    public function getMcbctrlcom(): ?string
    {
        return $this->mcbctrlcom;
    }

    public function setMcbctrlcom(string $mcbctrlcom): self
    {
        $this->mcbctrlcom = $mcbctrlcom;

        return $this;
    }

    public function getStorquecom(): ?string
    {
        return $this->storquecom;
    }

    public function setStorquecom(string $storquecom): self
    {
        $this->storquecom = $storquecom;

        return $this;
    }

    public function getSluxcom(): ?string
    {
        return $this->sluxcom;
    }

    public function setSluxcom(string $sluxcom): self
    {
        $this->sluxcom = $sluxcom;

        return $this;
    }

    public function getScomlancom(): ?string
    {
        return $this->scomlancom;
    }

    public function setScomlancom(string $scomlancom): self
    {
        $this->scomlancom = $scomlancom;

        return $this;
    }

    public function getScomwancom(): ?string
    {
        return $this->scomwancom;
    }

    public function setScomwancom(string $scomwancom): self
    {
        $this->scomwancom = $scomwancom;

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
            $item->setIdCommandeur($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getIdCommandeur() === $this) {
                $item->setIdCommandeur(null);
            }
        }

        return $this;
    }
}

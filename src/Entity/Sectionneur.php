<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sectionneur
 *
 * @ORM\Table(name="sectionneur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SectionneurRepository")
 */
class Sectionneur
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
     * @ORM\Column(name="designationsec", type="string", length=255, nullable=false)
     */
    private $designationsec;

    /**
     * @var int
     *
     * @ORM\Column(name="crosec", type="integer", nullable=false)
     */
    private $crosec;

    /**
     * @var string
     *
     * @ORM\Column(name="typesec", type="string", length=255, nullable=false)
     */
    private $typesec;

    /**
     * @var float
     *
     * @ORM\Column(name="tensionsec", type="float", precision=10, scale=0, nullable=false)
     */
    private $tensionsec;

    /**
     * @var int
     *
     * @ORM\Column(name="courantsec", type="integer", nullable=false)
     */
    private $courantsec;

    /**
     * @var float
     *
     * @ORM\Column(name="iccsec", type="float", precision=10, scale=0, nullable=false)
     */
    private $iccsec;

    /**
     * @var int
     *
     * @ORM\Column(name="tksec", type="integer", nullable=false)
     */
    private $tksec;

    /**
     * @var int
     *
     * @ORM\Column(name="malt", type="integer", nullable=false)
     */
    private $malt;

    /**
     * @var string
     *
     * @ORM\Column(name="typeraccordsec", type="string", nullable=false)
     */
    private $typeraccordsec;

    /**
     * @var int
     *
     * @ORM\Column(name="epglacesec", type="integer", nullable=false)
     */
    private $epglacesec;

    /**
     * @var string
     *
     * @ORM\Column(name="classecoupsec", type="string", length=255, nullable=false)
     */
    private $classecoupsec;

    /**
     * @var string
     *
     * @ORM\Column(name="pfermiccsec", type="string", length=255, nullable=false)
     */
    private $pfermiccsec;

    /**
     * @var string
     *
     * @ORM\Column(name="fbsec", type="string", length=255, nullable=false)
     */
    private $fbsec;

    /**
     * @var string
     *
     * @ORM\Column(name="rbsec", type="string", length=255, nullable=false)
     */
    private $rbsec;

    /**
     * @var string
     *
     * @ORM\Column(name="transfertbarsec", type="string", length=255, nullable=false)
     */
    private $transfertbarsec;

    /**
     * @var int
     *
     * @ORM\Column(name="endmecsec", type="integer", nullable=false)
     */
    private $endmecsec;

    /**
     * @var string
     *
     * @ORM\Column(name="normesec", type="string", length=255, nullable=false)
     */
    private $normesec;

    /**
     * @var string
     *
     * @ORM\Column(name="annexecsec", type="string", length=255, nullable=false)
     */
    private $annexecsec;

    /**
     * @var int
     *
     * @ORM\Column(name="nbisolateursec", type="integer", nullable=false)
     */
    private $nbisolateursec;

    /**
     * @var string
     *
     * @ORM\Column(name="isolateur", type="string", length=255, nullable=false)
     */
    private $isolateur;

    /**
     * @var string
     *
     * @ORM\Column(name="assemblydnbsec", type="string", length=255, nullable=false)
     */
    private $assemblydnbsec;

    /**
     * @var string
     *
     * @ORM\Column(name="materielhomsec", type="string", length=255, nullable=false)
     */
    private $materielhomsec;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="id_sectionneur")
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

    public function getDesignationsec(): ?string
    {
        return $this->designationsec;
    }

    public function setDesignationsec(string $designationsec): self
    {
        $this->designationsec = $designationsec;

        return $this;
    }

    public function getCrosec(): ?int
    {
        return $this->crosec;
    }

    public function setCrosec(int $crosec): self
    {
        $this->crosec = $crosec;

        return $this;
    }

    public function getTypesec(): ?string
    {
        return $this->typesec;
    }

    public function setTypesec(string $typesec): self
    {
        $this->typesec = $typesec;

        return $this;
    }

    public function getTensionsec(): ?float
    {
        return $this->tensionsec;
    }

    public function setTensionsec(float $tensionsec): self
    {
        $this->tensionsec = $tensionsec;

        return $this;
    }

    public function getCourantsec(): ?int
    {
        return $this->courantsec;
    }

    public function setCourantsec(int $courantsec): self
    {
        $this->courantsec = $courantsec;

        return $this;
    }

    public function getIccsec(): ?float
    {
        return $this->iccsec;
    }

    public function setIccsec(float $iccsec): self
    {
        $this->iccsec = $iccsec;

        return $this;
    }

    public function getTksec(): ?int
    {
        return $this->tksec;
    }

    public function setTksec(int $tksec): self
    {
        $this->tksec = $tksec;

        return $this;
    }

    public function getMalt(): ?int
    {
        return $this->malt;
    }

    public function setMalt(int $malt): self
    {
        $this->malt = $malt;

        return $this;
    }

    public function getTyperaccordsec(): ?string
    {
        return $this->typeraccordsec;
    }

    public function setTyperaccordsec(string $typeraccordsec): self
    {
        $this->typeraccordsec = $typeraccordsec;

        return $this;
    }

    public function getEpglacesec(): ?int
    {
        return $this->epglacesec;
    }

    public function setEpglacesec(int $epglacesec): self
    {
        $this->epglacesec = $epglacesec;

        return $this;
    }

    public function getClassecoupsec(): ?string
    {
        return $this->classecoupsec;
    }

    public function setClassecoupsec(string $classecoupsec): self
    {
        $this->classecoupsec = $classecoupsec;

        return $this;
    }

    public function getPfermiccsec(): ?string
    {
        return $this->pfermiccsec;
    }

    public function setPfermiccsec(string $pfermiccsec): self
    {
        $this->pfermiccsec = $pfermiccsec;

        return $this;
    }

    public function getFbsec(): ?string
    {
        return $this->fbsec;
    }

    public function setFbsec(string $fbsec): self
    {
        $this->fbsec = $fbsec;

        return $this;
    }

    public function getRbsec(): ?string
    {
        return $this->rbsec;
    }

    public function setRbsec(string $rbsec): self
    {
        $this->rbsec = $rbsec;

        return $this;
    }

    public function getTransfertbarsec(): ?string
    {
        return $this->transfertbarsec;
    }

    public function setTransfertbarsec(string $transfertbarsec): self
    {
        $this->transfertbarsec = $transfertbarsec;

        return $this;
    }

    public function getEndmecsec(): ?int
    {
        return $this->endmecsec;
    }

    public function setEndmecsec(int $endmecsec): self
    {
        $this->endmecsec = $endmecsec;

        return $this;
    }

    public function getNormesec(): ?string
    {
        return $this->normesec;
    }

    public function setNormesec(string $normesec): self
    {
        $this->normesec = $normesec;

        return $this;
    }

    public function getAnnexecsec(): ?string
    {
        return $this->annexecsec;
    }

    public function setAnnexecsec(string $annexecsec): self
    {
        $this->annexecsec = $annexecsec;

        return $this;
    }

    public function getNbisolateursec(): ?int
    {
        return $this->nbisolateursec;
    }

    public function setNbisolateursec(int $nbisolateursec): self
    {
        $this->nbisolateursec = $nbisolateursec;

        return $this;
    }

    public function getIsolateur(): ?string
    {
        return $this->isolateur;
    }

    public function setIsolateur(string $isolateur): self
    {
        $this->isolateur = $isolateur;

        return $this;
    }

    public function getAssemblydnbsec(): ?string
    {
        return $this->assemblydnbsec;
    }

    public function setAssemblydnbsec(string $assemblydnbsec): self
    {
        $this->assemblydnbsec = $assemblydnbsec;

        return $this;
    }

    public function getMaterielhomsec(): ?string
    {
        return $this->materielhomsec;
    }

    public function setMaterielhomsec(string $materielhomsec): self
    {
        $this->materielhomsec = $materielhomsec;

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
            $item->setIdSectionneur($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getIdSectionneur() === $this) {
                $item->setIdSectionneur(null);
            }
        }

        return $this;
    }

}

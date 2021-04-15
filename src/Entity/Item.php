<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item
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
     * @ORM\Column(name="numeroitem", type="integer", nullable=false)
     */
    private $numeroitem;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionitem", type="string", length=255, nullable=false)
     */
    private $descriptionitem;

    /**
     * @var int
     *
     * @ORM\Column(name="qteitem", type="integer", nullable=false)
     */
    private $qteitem;

    /**
     * @var int
     *
     * @ORM\Column(name="croitem", type="integer", nullable=false)
     */
    private $croitem;

    /**
     * @var int
     *
     * @ORM\Column(name="prixventeitem", type="integer", nullable=false)
     */
    private $prixventeitem;

    /**
     * @var int
     *
     * @ORM\Column(name="margecvitem", type="integer", nullable=false)
     */
    private $margecvitem;

    /**
     * @var int
     *
     * @ORM\Column(name="nbsectionneuritem", type="integer", nullable=false)
     */
    private $nbsectionneuritem;

    /**
     * @var int
     *
     * @ORM\Column(name="nbisoitem", type="integer", nullable=false)
     */
    private $nbisoitem;

    /**
     * @var int
     *
     * @ORM\Column(name="nbcaissonitem", type="integer", nullable=false)
     */
    private $nbcaissonitem;

    /**
     * @var int
     *
     * @ORM\Column(name="nbcomitem", type="integer", nullable=false)
     */
    private $nbcomitem;

    /**
     * @var int
     *
     * @ORM\Column(name="nbaccessitem", type="integer", nullable=false)
     */
    private $nbaccessitem;

    /**
     * @var int
     *
     * @ORM\Column(name="nbtringlerieitem", type="integer", nullable=false)
     */
    private $nbtringlerieitem;

    /**
     * @ORM\ManyToOne(targetEntity=Accessoire::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_accessoire;

    /**
     * @ORM\ManyToOne(targetEntity=Tringlerie::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_tringlerie;

    /**
     * @ORM\ManyToOne(targetEntity=Isolateur::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_isolateur;

    /**
     * @ORM\ManyToOne(targetEntity=Commandeur::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_commandeur;

    /**
     * @ORM\ManyToOne(targetEntity=Caisson::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_caisson;

    /**
     * @ORM\ManyToOne(targetEntity=Sectionneur::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_sectionneur;

    /**
     * @ORM\ManyToOne(targetEntity=Devvi::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_devvi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroitem(): ?int
    {
        return $this->numeroitem;
    }

    public function setNumeroitem(int $numeroitem): self
    {
        $this->numeroitem = $numeroitem;

        return $this;
    }

    public function getDescriptionitem(): ?string
    {
        return $this->descriptionitem;
    }

    public function setDescriptionitem(string $descriptionitem): self
    {
        $this->descriptionitem = $descriptionitem;

        return $this;
    }

    public function getQteitem(): ?int
    {
        return $this->qteitem;
    }

    public function setQteitem(int $qteitem): self
    {
        $this->qteitem = $qteitem;

        return $this;
    }

    public function getCroitem(): ?int
    {
        return $this->croitem;
    }

    public function setCroitem(int $croitem): self
    {
        $this->croitem = $croitem;

        return $this;
    }

    public function getPrixventeitem(): ?int
    {
        return $this->prixventeitem;
    }

    public function setPrixventeitem(int $prixventeitem): self
    {
        $this->prixventeitem = $prixventeitem;

        return $this;
    }

    public function getMargecvitem(): ?int
    {
        return $this->margecvitem;
    }

    public function setMargecvitem(int $margecvitem): self
    {
        $this->margecvitem = $margecvitem;

        return $this;
    }

    public function getNbsectionneuritem(): ?int
    {
        return $this->nbsectionneuritem;
    }

    public function setNbsectionneuritem(int $nbsectionneuritem): self
    {
        $this->nbsectionneuritem = $nbsectionneuritem;

        return $this;
    }

    public function getNbisoitem(): ?int
    {
        return $this->nbisoitem;
    }

    public function setNbisoitem(int $nbisoitem): self
    {
        $this->nbisoitem = $nbisoitem;

        return $this;
    }

    public function getNbcaissonitem(): ?int
    {
        return $this->nbcaissonitem;
    }

    public function setNbcaissonitem(int $nbcaissonitem): self
    {
        $this->nbcaissonitem = $nbcaissonitem;

        return $this;
    }

    public function getNbcomitem(): ?int
    {
        return $this->nbcomitem;
    }

    public function setNbcomitem(int $nbcomitem): self
    {
        $this->nbcomitem = $nbcomitem;

        return $this;
    }

    public function getNbaccessitem(): ?int
    {
        return $this->nbaccessitem;
    }

    public function setNbaccessitem(int $nbaccessitem): self
    {
        $this->nbaccessitem = $nbaccessitem;

        return $this;
    }

    public function getNbtringlerieitem(): ?int
    {
        return $this->nbtringlerieitem;
    }

    public function setNbtringlerieitem(int $nbtringlerieitem): self
    {
        $this->nbtringlerieitem = $nbtringlerieitem;

        return $this;
    }

    public function getIdAccessoire(): ?Accessoire
    {
        return $this->id_accessoire;
    }

    public function setIdAccessoire(?Accessoire $id_accessoire): self
    {
        $this->id_accessoire = $id_accessoire;

        return $this;
    }

    public function getIdTringlerie(): ?Tringlerie
    {
        return $this->id_tringlerie;
    }

    public function setIdTringlerie(?Tringlerie $id_tringlerie): self
    {
        $this->id_tringlerie = $id_tringlerie;

        return $this;
    }

    public function getIdIsolateur(): ?Isolateur
    {
        return $this->id_isolateur;
    }

    public function setIdIsolateur(?Isolateur $id_isolateur): self
    {
        $this->id_isolateur = $id_isolateur;

        return $this;
    }
    public function getIdCommandeur(): ?Commandeur
    {
        return $this->id_commandeur;
    }

    public function setIdCommandeur(?Commandeur $id_commandeur): self
    {
        $this->id_commandeur = $id_commandeur;

        return $this;
    }

    public function getIdCaisson(): ?Caisson
    {
        return $this->id_caisson;
    }

    public function setIdCaisson(?Caisson $id_caisson): self
    {
        $this->id_caisson = $id_caisson;

        return $this;
    }

    public function getIdSectionneur(): ?Sectionneur
    {
        return $this->id_sectionneur;
    }

    public function setIdSectionneur(?Sectionneur $id_sectionneur): self
    {
        $this->id_sectionneur = $id_sectionneur;

        return $this;
    }

    public function getIdDevvi(): ?Devvi
    {
        return $this->id_devvi;
    }

    public function setIdDevvi(?Devvi $id_devvi): self
    {
        $this->id_devvi= $id_devvi;

        return $this;
    }


}

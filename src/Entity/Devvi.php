<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * devvi
 *
 * @ORM\Table(name="devvi")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\DevviRepository")
 */
class Devvi
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
     * @ORM\Column(name="descriptiondev", type="string", length=255, nullable=false)
     */
    private $descriptiondev;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedemande", type="datetime", nullable=false)
     */
    private $datedemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateenregdev", type="datetime", nullable=false)
     */
    private $dateenregdev;

    /**
     * @var int
     *
     * @ORM\Column(name="transportdev", type="integer", nullable=false)
     */
    private $transportdev;

    /**
     * @var int
     *
     * @ORM\Column(name="commisionsagentdev", type="integer", nullable=false)
     */
    private $commisionsagentdev;

    /**
     * @var int
     *
     * @ORM\Column(name="emballagedev", type="integer", nullable=false)
     */
    private $emballagedev;

    /**
     * @var int
     *
     * @ORM\Column(name="essaisdev", type="integer", nullable=false)
     */
    private $essaisdev;

    /**
     * @var int
     *
     * @ORM\Column(name="etudesdev", type="integer", nullable=false)
     */
    private $etudesdev;

    /**
     * @var int
     *
     * @ORM\Column(name="fraisfiscauxdev", type="integer", nullable=false)
     */
    private $fraisfiscauxdev;

    /**
     * @var int
     *
     * @ORM\Column(name="crototaldev", type="integer", nullable=false)
     */
    private $crototaldev;

    /**
     * @var int
     *
     * @ORM\Column(name="coutactivitedev", type="integer", nullable=false)
     */
    private $coutactivitedev;

    /**
     * @var int
     *
     * @ORM\Column(name="remisedev", type="integer", nullable=false)
     */
    private $remisedev;

    /**
     * @var int
     *
     * @ORM\Column(name="coutfinalventedev", type="integer", nullable=false)
     */
    private $coutfinalventedev;

    /**
     * @ORM\ManyToOne(targetEntity=Clients::class, inversedBy="devvis")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_clients;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="id_devvi")
     */
    private $items;
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getDescriptiondev(): ?string
    {
        return $this->descriptiondev;
    }

    public function setDescriptiondev(string $descriptiondev): self
    {
        $this->descriptiondev = $descriptiondev;

        return $this;
    }

    public function getDatedemande(): ?\DateTimeInterface
    {
        return $this->datedemande;
    }

    public function setDatedemande(\DateTimeInterface $datedemande): self
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    public function getDateenregdev(): ?\DateTimeInterface
    {
        return $this->dateenregdev;
    }

    public function setDateenregdev(\DateTimeInterface $dateenregdev): self
    {
        $this->dateenregdev = $dateenregdev;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransportdev(): ?int
    {
        return $this->transportdev;
    }

    public function setTransportdev(int $transportdev): self
    {
        $this->transportdev = $transportdev;

        return $this;
    }

    public function getCommisionsagentdev(): ?int
    {
        return $this->commisionsagentdev;
    }

    public function setCommisionsagentdev(int $commisionsagentdev): self
    {
        $this->commisionsagentdev = $commisionsagentdev;

        return $this;
    }

    public function getEmballagedev(): ?int
    {
        return $this->emballagedev;
    }

    public function setEmballagedev(int $emballagedev): self
    {
        $this->emballagedev = $emballagedev;

        return $this;
    }

    public function getEssaisdev(): ?int
    {
        return $this->essaisdev;
    }

    public function setEssaisdev(int $essaisdev): self
    {
        $this->essaisdev = $essaisdev;

        return $this;
    }

    public function getEtudesdev(): ?int
    {
        return $this->etudesdev;
    }

    public function setEtudesdev(int $etudesdev): self
    {
        $this->etudesdev = $etudesdev;

        return $this;
    }

    public function getFraisfiscauxdev(): ?int
    {
        return $this->fraisfiscauxdev;
    }

    public function setFraisfiscauxdev(int $fraisfiscauxdev): self
    {
        $this->fraisfiscauxdev = $fraisfiscauxdev;

        return $this;
    }

    public function getCrototaldev(): ?int
    {
        return $this->crototaldev;
    }

    public function setCrototaldev(int $crototaldev): self
    {
        $this->crototaldev = $crototaldev;

        return $this;
    }

    public function getCoutactivitedev(): ?int
    {
        return $this->coutactivitedev;
    }

    public function setCoutactivitedev(int $coutactivitedev): self
    {
        $this->coutactivitedev = $coutactivitedev;

        return $this;
    }

    public function getRemisedev(): ?int
    {
        return $this->remisedev;
    }

    public function setRemisedev(int $remisedev): self
    {
        $this->remisedev = $remisedev;

        return $this;
    }

    public function getCoutfinalventedev(): ?int
    {
        return $this->coutfinalventedev;
    }

    public function setCoutfinalventedev(int $coutfinalventedev): self
    {
        $this->coutfinalventedev = $coutfinalventedev;

        return $this;
    }


    public function getIdClients(): ?Clients
    {
        return $this->id_clients;
    }

    public function setIdClients(?Clients $id_clients): self
    {
        $this->id_clients = $id_clients;

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
            $item->setIdDevvi($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getIdDevvi() === $this) {
                $item->setIdDevvi(null);
            }
        }

        return $this;
    }
}

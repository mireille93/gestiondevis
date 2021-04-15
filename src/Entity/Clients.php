<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ClientsRepository")
 * @ORM\Table(name="clients")
 */
class Clients
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
     * @ORM\Column(name="nomcli", type="string", length=255, nullable=false)
     */
    private $nomcli;

    /**
     * @var string
     *
     * @ORM\Column(name="ruecli", type="string", length=255, nullable=false)
     */
    private $ruecli;

    /**
     * @var string
     *
     * @ORM\Column(name="villecli", type="string", length=255, nullable=false)
     */
    private $villecli;

    /**
     * @var int
     *
     * @ORM\Column(name="codepostalcli", type="integer", nullable=false)
     */
    private $codepostalcli;

    /**
     * @var string
     *
     * @ORM\Column(name="contactcli", type="string", length=255, nullable=false)
     */
    private $contactcli;

    /**
     * @var int
     *
     * @ORM\Column(name="telephonecli", type="integer", nullable=false)
     */
    private $telephonecli;

    /**
     * @var string
     *
     * @ORM\Column(name="mailcli", type="string", length=255, nullable=false)
     */
    private $mailcli;

    /**
     * @var string
     *
     * @ORM\Column(name="sitewebcli", type="string", length=255, nullable=false)
     */
    private $sitewebcli;

    /**
     * @ORM\OneToMany(targetEntity=Devvi::class, mappedBy="id_clients")
     */
    private $devvis;

    public function __construct()
    {
        $this->devvis = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcli(): ?string
    {
        return $this->nomcli;
    }

    public function setNomcli(string $nomcli): self
    {
        $this->nomcli = $nomcli;

        return $this;
    }

    public function getRuecli(): ?string
    {
        return $this->ruecli;
    }

    public function setRuecli(string $ruecli): self
    {
        $this->ruecli = $ruecli;

        return $this;
    }

    public function getVillecli(): ?string
    {
        return $this->villecli;
    }

    public function setVillecli(string $villecli): self
    {
        $this->villecli = $villecli;

        return $this;
    }

    public function getCodepostalcli(): ?int
    {
        return $this->codepostalcli;
    }

    public function setCodepostalcli(int $codepostalcli): self
    {
        $this->codepostalcli = $codepostalcli;

        return $this;
    }

    public function getContactcli(): ?string
    {
        return $this->contactcli;
    }

    public function setContactcli(string $contactcli): self
    {
        $this->contactcli = $contactcli;

        return $this;
    }

    public function getTelephonecli(): ?int
    {
        return $this->telephonecli;
    }

    public function setTelephonecli(int $telephonecli): self
    {
        $this->telephonecli = $telephonecli;

        return $this;
    }

    public function getMailcli(): ?string
    {
        return $this->mailcli;
    }

    public function setMailcli(string $mailcli): self
    {
        $this->mailcli = $mailcli;

        return $this;
    }

    public function getSitewebcli(): ?string
    {
        return $this->sitewebcli;
    }

    public function setSitewebcli(string $sitewebcli): self
    {
        $this->sitewebcli = $sitewebcli;

        return $this;
    }

    /**
     * @return Collection|Devvi[]
     */
    public function getDevvis(): Collection
    {
        return $this->devvis;
    }

    public function addDevvi(Devvi $devvi): self
    {
        if (!$this->devvis->contains($devvi)) {
            $this->devvis[] = $devvi;
            $devvi->setIdClients($this);
        }

        return $this;
    }

    public function removeDevvi(Devvi $devvi): self
    {
        if ($this->devvis->removeElement($devvi)) {
            // set the owning side to null (unless already changed)
            if ($devvi->getIdClients() === $this) {
                $devvi->setIdClients(null);
            }
        }

        return $this;
    }

}

<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity=FicheService::class, mappedBy="client")
     */
    private $ficheServices;

    public function __construct()
    {
        $this->ficheServices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|FicheService[]
     */
    public function getFicheServices(): Collection
    {
        return $this->ficheServices;
    }

    public function addFicheService(FicheService $ficheService): self
    {
        if (!$this->ficheServices->contains($ficheService)) {
            $this->ficheServices[] = $ficheService;
            $ficheService->setClient($this);
        }

        return $this;
    }

    public function removeFicheService(FicheService $ficheService): self
    {
        if ($this->ficheServices->removeElement($ficheService)) {
            // set the owning side to null (unless already changed)
            if ($ficheService->getClient() === $this) {
                $ficheService->setClient(null);
            }
        }

        return $this;
    }
}

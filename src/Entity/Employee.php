<?php

namespace App\Entity;

use App\Entity\Person;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use App\Repository\EmployeeRepository;

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee extends Person
{
    

    /**
     * @ManyToOne(targetEntity="Departement")
     * @JoinColumn(name="department_id", referencedColumnName="id")
     */
    private $department;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;


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
}

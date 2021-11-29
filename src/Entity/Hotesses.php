<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotesses
 *
 * @ORM\Table(name="hotesses")
 * @ORM\Entity
 */
class Hotesses
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getDemande(): string
    {
        return $this->demande;
    }

    /**
     * @param string $demande
     */
    public function setDemande(string $demande): void
    {
        $this->demande = $demande;
    }

    /**
     * @return bool
     */
    public function isDisponibilite(): bool
    {
        return $this->disponibilite;
    }

    /**
     * @param bool $disponibilite
     */
    public function setDisponibilite(bool $disponibilite): void
    {
        $this->disponibilite = $disponibilite;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="demande", type="string", length=255, nullable=false)
     */
    private $demande;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilite", type="boolean", nullable=false)
     */
    private $disponibilite;


}

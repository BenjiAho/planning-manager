<?php

namespace App\Entity;

use App\Controller\MainController;
use Doctrine\ORM\Mapping as ORM;

/**
 * Demandes
 *
 * @ORM\Table(name="demandes")
 * @ORM\Entity
 */
class Demandes extends MainController
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
    public function getExpediteur(): string
    {
        return $this->expediteur;
    }

    /**
     * @param string $expediteur
     */
    public function setExpediteur(string $expediteur): void
    {
        $this->expediteur = $expediteur;
    }

    /**
     * @return string
     */
    public function getObjet(): string
    {
        return $this->objet;
    }

    /**
     * @param string $objet
     */
    public function setObjet(string $objet): void
    {
        $this->objet = $objet;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnvoi(): \DateTime
    {
        return $this->dateEnvoi;
    }

    /**
     * @param \DateTime $dateEnvoi
     */
    public function setDateEnvoi(\DateTime $dateEnvoi): void
    {
        $this->dateEnvoi = $dateEnvoi;
    }

    /**
     * @return \DateTime
     */
    public function getDateTraitement(): \DateTime
    {
        return $this->dateTraitement;
    }

    /**
     * @param \DateTime $dateTraitement
     */
    public function setDateTraitement(\DateTime $dateTraitement): void
    {
        $this->dateTraitement = $dateTraitement;
    }

    /**
     * @return bool
     */
    public function isStatut(): bool
    {
        return $this->statut;
    }

    /**
     * @param bool $statut
     */
    public function setStatut(bool $statut): void
    {
        $this->statut = $statut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFermeture(): \DateTime
    {
        return $this->dateFermeture;
    }

    /**
     * @param \DateTime $dateFermeture
     */
    public function setDateFermeture(\DateTime $dateFermeture): void
    {
        $this->dateFermeture = $dateFermeture;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="expediteur", type="string", length=255, nullable=false)
     */
    private $expediteur;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date-envoi", type="date", nullable=false)
     */
    private $dateEnvoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date-traitement", type="date", nullable=false)
     */
    private $dateTraitement;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean", nullable=false)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date-fermeture", type="date", nullable=false)
     */
    private $dateFermeture;


}

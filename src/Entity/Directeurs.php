<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directeurs
 *
 * @ORM\Table(name="directeurs")
 * @ORM\Entity
 */
class Directeurs
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
     * @var string
     *
     * @ORM\Column(name="ordre", type="string", length=255, nullable=false)
     */
    private $ordre;


}

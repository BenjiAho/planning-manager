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

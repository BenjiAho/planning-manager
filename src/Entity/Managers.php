<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Managers
 *
 * @ORM\Table(name="managers")
 * @ORM\Entity
 */
class Managers
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

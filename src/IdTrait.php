<?php

namespace Andrebian\Doctrine\EntityTraits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait IdTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait IdTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

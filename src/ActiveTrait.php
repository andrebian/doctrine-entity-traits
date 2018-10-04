<?php

namespace Andrebian\Doctrine\EntityTraits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait ActiveTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait ActiveTrait
{
    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false, options={"default" = true})
     */
    protected $active = true;

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}

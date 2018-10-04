<?php declare(strict_types=1);

namespace Andrebian\Doctrine\EntityTraits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait NullableModifiedTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait NullableModifiedTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var DateTime|null
     */
    protected $modified;

    /**
     * @return DateTime|null
     */
    public function getModified(): ?DateTime
    {
        return $this->modified;
    }

    /**
     * @param DateTime|null $modified
     * @return $this
     */
    public function setModified(?DateTime $modified)
    {
        $this->modified = $modified;
        return $this;
    }
}

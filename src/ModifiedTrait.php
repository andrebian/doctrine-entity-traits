<?php declare(strict_types=1);

namespace Andrebian\Doctrine\EntityTraits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait ModifiedTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait ModifiedTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var DateTime
     */
    protected $modified;

    /**
     * @return DateTime
     */
    public function getModified(): DateTime
    {
        return $this->modified;
    }

    /**
     * @param DateTime $modified
     * @return $this
     */
    public function setModified(DateTime $modified)
    {
        $this->modified = $modified;
        return $this;
    }
}

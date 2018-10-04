<?php declare(strict_types=1);

namespace Andrebian\Doctrine\EntityTraits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CreatedTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait CreatedTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @var DateTime
     */
    protected $created;

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return $this
     */
    public function setCreated(DateTime $created)
    {
        $this->created = $created;
        return $this;
    }
}

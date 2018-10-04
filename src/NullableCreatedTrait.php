<?php declare(strict_types=1);

namespace Andrebian\Doctrine\EntityTraits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait NullableCreatedTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait NullableCreatedTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var DateTime|null
     */
    protected $created;

    /**
     * @return DateTime|null
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime|null $created
     * @return $this
     */
    public function setCreated(?DateTime $created)
    {
        $this->created = $created;
        return $this;
    }
}

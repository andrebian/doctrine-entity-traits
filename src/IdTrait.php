<?php declare(strict_types=1);

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
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }
}

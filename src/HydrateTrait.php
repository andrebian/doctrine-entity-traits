<?php declare(strict_types=1);

namespace Andrebian\Doctrine\EntityTraits;

use Zend\Hydrator\ClassMethods;

/**
 * Trait HydrateTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait HydrateTrait
{
    /**
     * @param $data
     * @return void
     */
    public function hydrate($data): void
    {
        $hydrator = new ClassMethods(false);
        $hydrator->hydrate($data, $this);
    }
}

<?php

namespace Andrebian\Doctrine\EntityTraits;

use Zend\Hydrator\ClassMethods;

/**
 * Trait ToArrayTrait
 * @package Andrebian\Doctrine\EntityTraits
 */
trait ToArrayTrait
{
    /**
     * @return array
     */
    public function toArray()
    {
        $hydrator = new ClassMethods(false);
        return $hydrator->extract($this);
    }
}

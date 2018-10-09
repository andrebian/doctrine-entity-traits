<?php

namespace Test\Andrebian\Doctrine\EntityTraits;

use Andrebian\Doctrine\EntityTraits\ActiveTrait;
use Andrebian\Doctrine\EntityTraits\CreatedTrait;
use Andrebian\Doctrine\EntityTraits\HydrateTrait;
use Andrebian\Doctrine\EntityTraits\IdTrait;
use Andrebian\Doctrine\EntityTraits\ModifiedTrait;
use Andrebian\Doctrine\EntityTraits\ToArrayTrait;

/**
 * Class FakeEntity
 * @package Test\Andrebian\Doctrine\EntityTraits
 */
class FakeEntity
{
    use IdTrait, ActiveTrait, CreatedTrait, ModifiedTrait;
    use ToArrayTrait, HydrateTrait;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
}

<?php

namespace Test\Andrebian\Doctrine\EntityTraits;

use Andrebian\Doctrine\EntityTraits\ActiveTrait;
use Andrebian\Doctrine\EntityTraits\HydrateTrait;
use Andrebian\Doctrine\EntityTraits\IdTrait;
use Andrebian\Doctrine\EntityTraits\NullableCreatedTrait;
use Andrebian\Doctrine\EntityTraits\NullableModifiedTrait;
use Andrebian\Doctrine\EntityTraits\ToArrayTrait;

/**
 * Class FakeEntityWithNullables
 * @package Test\Andrebian\Doctrine\EntityTraits
 */
class FakeEntityWithNullables
{
    use IdTrait, ActiveTrait, NullableCreatedTrait, NullableModifiedTrait;
    use ToArrayTrait, HydrateTrait;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
}

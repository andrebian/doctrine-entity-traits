<?php

namespace Test\Andrebian\Doctrine\EntityTraits;

use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * Class EntityTraitTest
 * @package Test\Andrebian\Doctrine\EntityTraits
 */
class EntityTraitTest extends TestCase
{
    public function testEntityTraits()
    {
        $date = new DateTime();

        $data = [
            'id' => 1,
            'created' => $date,
            'modified' => $date,
            'active' => true
        ];

        $entity = new FakeEntity($data);

        $this->assertNotNull($entity->getId());
        $this->assertNotNull($entity->getCreated());
        $this->assertInstanceOf(DateTime::class, $entity->getCreated());
        $this->assertNotNull($entity->getModified());
        $this->assertInstanceOf(DateTime::class, $entity->getModified());
        $this->assertNotNull($entity->toArray());
        $this->assertInternalType('array', $entity->toArray());
    }

    public function testNullablesEntityTraits()
    {
        $date = new DateTime();

        $data = [
            'id' => 1,
            'active' => true
        ];

        $entity = new FakeEntityWithNullables($data);

        $this->assertNotNull($entity->getId());
        $this->assertNull($entity->getCreated());
        $this->assertNull($entity->getModified());
        $this->assertNotNull($entity->toArray());
        $this->assertInternalType('array', $entity->toArray());

        $entity->setCreated($date)->setModified($date);

        $this->assertInstanceOf(DateTime::class, $entity->getCreated());
        $this->assertInstanceOf(DateTime::class, $entity->getModified());
    }
}

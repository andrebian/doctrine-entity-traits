# doctrine-entity-traits

A set of basic traits for Doctrine Entities.

## Purpose

The main purpose of this trait collection is to avoid code 
repetition. You just need import the traits you need and its 
entity definition, getters and setters are ready to use.


## Installing

`composer require andrebian/doctrine-entity-traits`


## Usage

```php
<?php 

use Doctrine\ORM\Mapping as ORM;
use Andrebian\Doctrine\EntityTraits\IdTrait;
use Andrebian\Doctrine\EntityTraits\CreatedTrait;
use Andrebian\Doctrine\EntityTraits\ModifiedTrait;

/**
 * Class MyEntity
 * @ORM\Table(name="table_name")
 * @ORM\Entity()
 */
class MyEntity
{
    // import the traits you need
    use IdTrait, CreatedTrait, ModifiedTrait; 
    
    // this will provide the $id, $created and $modified properties
    // with its getters and setters
    
    // after this, you just need to write your entity specific properties, getters and setters
    
    /**
    * @var string
    * @ORM\Column(type="string", length=255, nullable=false)
    */
    private $name;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
}
```
Easy huh?


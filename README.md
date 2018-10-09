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

namespace YourNamespace;

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

## ToArray

This trait was created to provide an extract method in your entities. 
But this trait is so versatile that you can use anywhere. See how it is possible.

```php
<?php 

namespace YourNamespace;

use Andrebian\Doctrine\EntityTraits\ToArrayTrait;

class YourAwesomeClass
{
    use ToArrayTrait;
}
```

In any place of your code you simply can use it like this:

```php
<?php 

namespace YourNamespace;

class YourOtherClass
{
    public function someMethod()
    {
        $awesomeClass = new YourAwesomeClass();
        $extractedData = $awesomeClass->toArray();
    }
}
```

## Hydrate

In inverse of the ToArrayTrait, this trait is useful to set classes properties 
from a given array.

```php
<?php 

namespace YourNamespace;

use Andrebian\Doctrine\EntityTraits\HydrateTrait;

class YourClass
{
    // a lot of properties here...
    
    use HydrateTrait;
    
    public function __construct($data = []) 
    {
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }
}
```

And in any place of your code.

```php
<?php 

namespace YourNamespace;

class YourOtherClass
{
    public function someMethos() 
    {
        $data = [
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3'    
        ];
        
        $yourClass = new YourClass($data);
    }
}
```

## Contributing

Your can contribute by opening an [issue](https://github.com/andrebian/doctrine-entity-traits/issues) or making a Pull Request.

Fork this project, make your improvements/fixes and send a Pull Request ;)


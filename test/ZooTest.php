<?php

use PHPUnit\Framework\TestCase;
use Zoo\Zoo;
use Zoo\Animal\Bird\Crow;
use Zoo\Animal\Bird\Sparrow;
use Zoo\Animal\Dog\Boxer;
use Zoo\Animal\Dog\Bulldog;
use Zoo\Animal\Fish\Crucian;
use Zoo\Animal\Fish\Pike;
use Zoo\Animal\Monkey\Chimpanzee;
use Zoo\Animal\Monkey\Gorilla;
use Zoo\Stuff\Manager;
use Zoo\Stuff\Worker;
use Zoo\Stuff\Cleaner;

/**
 * Class ZooTest
 */
class ZooTest extends TestCase
{
    /**
     * test count of elements in zoo
     */
    public function testElementsCount()
    {
        $animals = new Zoo();
        $animals
            ->addUnit(new Crow())
            ->addUnit(new Sparrow())
            ->addUnit(new Boxer())
            ->addUnit(new Bulldog())
            ->addUnit(new Crucian())
            ->addUnit(new Pike())
            ->addUnit(new Chimpanzee())
            ->addUnit(new Gorilla())
        ;

        $this->assertCount(8, $animals->getUnits());
    }

    /**
     * test full zoo behavior
     */
    public function testZooBehavior()
    {
        // add animals to zoo
        $animals = new Zoo();
        $animals
            ->addUnit(new Crow())
            ->addUnit(new Sparrow())
            ->addUnit(new Boxer())
            ->addUnit(new Bulldog())
            ->addUnit(new Crucian())
            ->addUnit(new Pike())
            ->addUnit(new Chimpanzee())
            ->addUnit(new Gorilla())
        ;

        // add stuff to zoo
        $manager = new Manager();
        $manager
            ->addAnimal(new Crow())
            ->addAnimal(new Boxer())
        ;

        $worker = new Worker();
        $worker
            ->addAnimal(new Gorilla())
        ;

        $stuff = new Zoo();
        $stuff
            ->addUnit($manager)
            ->addUnit($worker)
            ->addUnit(new Cleaner())
        ;

        // create zoo
        $zoo = new Zoo();
        $zoo
            ->addUnit($stuff)
            ->addUnit($animals)
        ;

        $this->assertSame($this->getZooBehavior(), $zoo->behavior());
    }

    /**
     * @return string
     */
    private function getZooBehavior(): string
    {
        $str = <<<EOT
Manager stuck on traffic jet and late
Manager give orders for stuff
Manager is feeding Crow
Crow is eating bread
Manager is feeding Boxer
Boxer is eating meat

Worker came to work
Worker is feeding Gorilla
Gorilla is eating banana

Cleaner came to work in time
Cleaner is cleaning zoo

Crow is flying
Crow is eating bread

Sparrow is flying on the street
Sparrow is eating corn

Boxer is walking with master
Boxer is running
Boxer is barking
Boxer is byte
Boxer is eating meat

Bulldog is walking alone
Bulldog is running alone
Bulldog is barking
Bulldog is byte
Bulldog is eating bones

Crucian is swimming
Crucian is eating

Pike is swimming
Pike is eating

Chimpanzee is jumping
Chimpanzee is eating banana

Gorilla is jumping
Gorilla is eating banana


EOT;

        return $str;
    }
}

<?php

use PHPUnit\Framework\TestCase;
use Zoo\Animal\Bird\Crow;
use Zoo\Animal\Dog\Boxer;
use Zoo\Animal\Fish\Crucian;
use Zoo\Animal\Monkey\Chimpanzee;
use Zoo\Stuff\Manager;
use Zoo\Stuff\Worker;
use Zoo\Stuff\Cleaner;

/**
 * Class TestUnit
 */
class UnitTest extends TestCase
{
    /**
     * test animals
     */
    public function testAnimals()
    {
        $bird = new Crow();

        $this->assertSame('Crow', $bird->name());
        $this->assertSame('Crow is eating bread'.PHP_EOL, $bird->eat());
        $this->assertSame('Crow is flying'.PHP_EOL, $bird->fly());

        $dog = new Boxer();

        $this->assertSame('Boxer', $dog->name());
        $this->assertSame('Boxer is walking with master'.PHP_EOL, $dog->walk());
        $this->assertSame('Boxer is running'.PHP_EOL, $dog->run());
        $this->assertSame('Boxer is barking'.PHP_EOL, $dog->wuf());
        $this->assertSame('Boxer is eating meat'.PHP_EOL, $dog->eat());
        $this->assertSame('Boxer is byte'.PHP_EOL, $dog->byte());

        $fish = new Crucian();

        $this->assertSame('Crucian', $fish->name());
        $this->assertSame('Crucian is swimming'.PHP_EOL, $fish->swim());
        $this->assertSame('Crucian is eating'.PHP_EOL, $fish->eat());

        $monkey = new Chimpanzee();

        $this->assertSame('Chimpanzee', $monkey->name());
        $this->assertSame('Chimpanzee is jumping'.PHP_EOL, $monkey->jump());
        $this->assertSame('Chimpanzee is eating banana'.PHP_EOL, $monkey->eat());
    }

    /**
     * test stuff
     */
    public function testStuff()
    {
        $manager = new Manager();

        $this->assertSame('Manager', $manager->name());
        $this->assertSame('Manager stuck on traffic jet and late'.PHP_EOL, $manager->comeToWork());
        $this->assertSame('Manager give orders for stuff'.PHP_EOL, $manager->order());
        $this->assertSame('', $manager->feed());

        $manager->addAnimal(new Boxer());
        $this->assertSame('Manager is feeding Boxer'.PHP_EOL.'Boxer is eating meat'.PHP_EOL, $manager->feed());

        $worker = new Worker();

        $this->assertSame('Worker', $worker->name());
        $this->assertSame('Worker came to work'.PHP_EOL, $worker->comeToWork());
        $this->assertSame('', $worker->feed());

        $worker->addAnimal(new Chimpanzee());
        $this->assertSame('Worker is feeding Chimpanzee'.PHP_EOL.'Chimpanzee is eating banana'.PHP_EOL, $worker->feed());

        $cleaner = new Cleaner();

        $this->assertSame('Cleaner', $cleaner->name());
        $this->assertSame('Cleaner came to work in time'.PHP_EOL, $cleaner->comeToWork());
        $this->assertSame('', $cleaner->feed());

        $cleaner->addAnimal(new Crucian());
        $this->assertSame('Cleaner is feeding Crucian'.PHP_EOL.'Crucian is eating'.PHP_EOL, $cleaner->feed());
    }
}

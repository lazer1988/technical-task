<?php

namespace Zoo\Animal\Dog;

use Zoo\Animal\AbstractAnimal;

/**
 * Class AbstractDog
 *
 * @package Zoo\Animal\Dog
 */
abstract class AbstractDog extends AbstractAnimal
{
    /**
     * Dog walk
     */
    abstract public function walk();

    /**
     * Dog run
     */
    abstract public function run();

    /**
     * Dog want wuf
     */
    abstract public function wuf();

    /**
     * Dog byte
     */
    abstract public function byte();

    /**
     * Animal behavior
     */
    public function behavior()
    {
        $this->walk();
        $this->run();
        $this->wuf();
        $this->byte();
        $this->eat();
    }
}

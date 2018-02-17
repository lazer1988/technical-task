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
    abstract protected function walk();

    /**
     * Dog run
     */
    abstract protected function run();

    /**
     * Dog want wuf
     */
    abstract protected function wuf();

    /**
     * Dog byte
     */
    abstract protected function byte();

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

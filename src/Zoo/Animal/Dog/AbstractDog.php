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
     *
     * @return string
     */
    abstract public function walk(): string;

    /**
     * Dog run
     *
     * @return string
     */
    abstract public function run(): string;

    /**
     * Dog want wuf
     *
     * @return string
     */
    abstract public function wuf(): string;

    /**
     * Dog byte
     *
     * @return string
     */
    abstract public function byte(): string;

    /**
     * {@inheritdoc}
     */
    public function behavior(): string
    {
        $behavior  = $this->walk();
        $behavior .= $this->run();
        $behavior .= $this->wuf();
        $behavior .= $this->byte();
        $behavior .= $this->eat();
        $behavior .= PHP_EOL;

        return $behavior;
    }
}

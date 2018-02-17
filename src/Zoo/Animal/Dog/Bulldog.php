<?php

namespace Zoo\Animal\Dog;

/**
 * Class Bulldog
 *
 * @package Zoo\Animal\Dog
 */
class Bulldog extends AbstractDog
{
    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Bulldog';
    }

    /**
     * {@inheritdoc}
     */
    protected function eat()
    {
        echo $this->name().' is eating bones'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function walk()
    {
        echo $this->name().' is walking alone'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo $this->name().' is running alone'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function wuf()
    {
        echo $this->name().' is barking'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function byte()
    {
        echo $this->name().' is byte'.PHP_EOL;
    }
}

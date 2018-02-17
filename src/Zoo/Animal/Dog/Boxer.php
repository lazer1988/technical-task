<?php

namespace Zoo\Animal\Dog;

/**
 * Class Boxer
 *
 * @package Zoo\Animal\Dog
 */
class Boxer extends AbstractDog
{
    /**
     * {@inheritdoc}
     */
    protected function name(): string
    {
        return 'Boxer';
    }

    /**
     * {@inheritdoc}
     */
    protected function eat()
    {
        echo $this->name().' is eating meat'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    protected function walk()
    {
        echo $this->name().' is walking with master'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        echo $this->name().' is running'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    protected function wuf()
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

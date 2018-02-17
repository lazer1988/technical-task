<?php

namespace Zoo\Animal\Bird;

/**
 * Class Sparrow
 *
 * @package Zoo\Animal\Bird
 */
class Sparrow extends AbstractBird
{
    /**
     * {@inheritdoc}
     */
    protected function name(): string
    {
        return 'Sparrow';
    }

    /**
     * {@inheritdoc}
     */
    protected function eat()
    {
        echo $this->name().' is eating corn'.PHP_EOL;
    }

    /**
     * Bird fly
     */
    protected function fly()
    {
        echo $this->name().' is flying on the street'.PHP_EOL;
    }
}

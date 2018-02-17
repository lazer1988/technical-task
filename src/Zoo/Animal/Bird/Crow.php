<?php

namespace Zoo\Animal\Bird;

/**
 * Class Crow
 *
 * @package Zoo\Animal\Bird
 */
class Crow extends AbstractBird
{
    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Crow';
    }

    /**
     * {@inheritdoc}
     */
    protected function eat()
    {
        echo $this->name().' is eating bread'.PHP_EOL;
    }

    /**
     * Bird fly
     */
    public function fly()
    {
        echo $this->name().' is flying'.PHP_EOL;
    }
}

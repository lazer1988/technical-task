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
    public function eat(): string
    {
        return $this->name().' is eating bread'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function fly(): string
    {
        return $this->name().' is flying'.PHP_EOL;
    }
}

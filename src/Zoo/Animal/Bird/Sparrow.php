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
    public function name(): string
    {
        return 'Sparrow';
    }

    /**
     * {@inheritdoc}
     */
    public function eat(): string
    {
        return $this->name().' is eating corn'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function fly(): string
    {
        return $this->name().' is flying on the street'.PHP_EOL;
    }
}

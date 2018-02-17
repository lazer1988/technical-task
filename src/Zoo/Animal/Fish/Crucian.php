<?php

namespace Zoo\Animal\Fish;

/**
 * Class Crucian
 *
 * @package Zoo\Animal\Fish
 */
class Crucian extends AbstractFish
{
    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Crucian';
    }

    /**
     * {@inheritdoc}
     */
    protected function eat()
    {
        echo $this->name().' is eating'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function swim()
    {
        echo $this->name().' is swimming'.PHP_EOL;
    }
}

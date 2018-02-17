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
    public function eat(): string
    {
        return $this->name().' is eating'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function swim(): string
    {
        return $this->name().' is swimming'.PHP_EOL;
    }
}

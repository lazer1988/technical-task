<?php

namespace Zoo\Animal\Fish;

/**
 * Class Pike
 *
 * @package Zoo\Animal\Fish
 */
class Pike extends AbstractFish
{
    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Pike';
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

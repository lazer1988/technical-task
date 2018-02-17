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

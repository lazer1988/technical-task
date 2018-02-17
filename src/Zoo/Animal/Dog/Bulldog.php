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
    public function eat(): string
    {
        return $this->name().' is eating bones'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function walk(): string
    {
        return $this->name().' is walking alone'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function run(): string
    {
        return $this->name().' is running alone'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function wuf(): string
    {
        return $this->name().' is barking'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function byte(): string
    {
        return $this->name().' is byte'.PHP_EOL;
    }
}

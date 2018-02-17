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
    public function name(): string
    {
        return 'Boxer';
    }

    /**
     * {@inheritdoc}
     */
    public function eat(): string
    {
        return $this->name().' is eating meat'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function walk(): string
    {
        return $this->name().' is walking with master'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function run(): string
    {
        return $this->name().' is running'.PHP_EOL;
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

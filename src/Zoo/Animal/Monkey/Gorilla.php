<?php

namespace Zoo\Animal\Monkey;

/**
 * Class Gorilla
 *
 * @package Zoo\Animal\Monkey
 */
class Gorilla extends AbstractMonkey
{
    /**
     * {@inheritdoc}
     */
    protected function name(): string
    {
        return 'Gorilla';
    }

    /**
     * {@inheritdoc}
     */
    protected function eat()
    {
        echo $this->name().' is eating banana'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    protected function jump()
    {
        echo $this->name().' is jumping'.PHP_EOL;
    }
}

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
    public function name(): string
    {
        return 'Gorilla';
    }

    /**
     * {@inheritdoc}
     */
    public function eat(): string
    {
        return $this->name().' is eating banana'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function jump(): string
    {
        return $this->name().' is jumping'.PHP_EOL;
    }
}

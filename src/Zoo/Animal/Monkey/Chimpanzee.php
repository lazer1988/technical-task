<?php

namespace Zoo\Animal\Monkey;

/**
 * Class Chimpanzee
 *
 * @package Zoo\Animal\Monkey
 */
class Chimpanzee extends AbstractMonkey
{
    /**
     * {@inheritdoc}
     */
    protected function name(): string
    {
        return 'Chimpanzee';
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

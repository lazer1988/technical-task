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
    public function name(): string
    {
        return 'Chimpanzee';
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

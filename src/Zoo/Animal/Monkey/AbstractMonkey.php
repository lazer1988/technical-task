<?php

namespace Zoo\Animal\Monkey;

use Zoo\Animal\AbstractAnimal;

/**
 * Class AbstractMonkey
 *
 * @package Zoo\Animal\Monkey
 */
abstract class AbstractMonkey extends AbstractAnimal
{
    /**
     * Monkey jump
     */
    abstract public function jump();

    /**
     * {@inheritdoc}
     */
    public function behavior()
    {
        $this->jump();
        $this->eat();
    }
}

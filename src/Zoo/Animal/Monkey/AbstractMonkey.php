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
     *
     * @return string
     */
    abstract public function jump(): string;

    /**
     * {@inheritdoc}
     */
    public function behavior(): string
    {
        $behavior  = $this->jump();
        $behavior .= $this->eat();
        $behavior .= PHP_EOL;

        return $behavior;
    }
}

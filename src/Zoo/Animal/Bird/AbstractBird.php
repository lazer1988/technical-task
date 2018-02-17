<?php

namespace Zoo\Animal\Bird;

use Zoo\Animal\AbstractAnimal;

/**
 * Class AbstractBird
 *
 * @package Zoo\Animal\Bird
 */
abstract class AbstractBird extends AbstractAnimal
{
    /**
     * Bird fly
     *
     * @return string
     */
    abstract public function fly(): string;

    /**
     * {@inheritdoc}
     */
    public function behavior(): string
    {
        $behavior  = $this->fly();
        $behavior .= $this->eat();
        $behavior .= PHP_EOL;

        return $behavior;
    }
}

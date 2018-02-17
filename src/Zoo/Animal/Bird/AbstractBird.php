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
     */
    abstract public function fly();

    /**
     * {@inheritdoc}
     */
    public function behavior()
    {
        $this->fly();
        $this->eat();
    }
}

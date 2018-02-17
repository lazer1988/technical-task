<?php

namespace Zoo\Animal\Fish;

use Zoo\Animal\AbstractAnimal;

/**
 * Class AbstractFish
 *
 * @package Zoo\Animal\Fish
 */
abstract class AbstractFish extends AbstractAnimal
{
    /**
     * Fish swim
     */
    abstract public function swim();

    /**
     * {@inheritdoc}
     */
    public function behavior()
    {
        $this->swim();
        $this->eat();
    }
}

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
     *
     * @return string
     */
    abstract public function swim(): string;

    /**
     * {@inheritdoc}
     */
    public function behavior(): string
    {
        $behavior  = $this->swim();
        $behavior .= $this->eat();
        $behavior .= PHP_EOL;

        return $behavior;
    }
}

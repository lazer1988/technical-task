<?php

namespace Zoo\Animal;

use Zoo\UnitInterface;

/**
 * Class AbstractAnimal
 *
 * @package Zoo\Animal
 */
abstract class AbstractAnimal implements UnitInterface
{
    /**
     * Name of animal
     *
     * @return string
     */
    abstract protected function name(): string;

    /**
     * Animal eat
     */
    abstract protected function eat();
}

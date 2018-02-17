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
    abstract public function name(): string;

    /**
     * Animal eat
     *
     * @return string
     */
    abstract public function eat(): string;
}

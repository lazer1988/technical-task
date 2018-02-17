<?php

namespace Zoo\Animal;

use Zoo\UnitInterface;

/**
 * Class Animal
 *
 * @package Zoo\Animal
 */
abstract class AbstractAnimal implements UnitInterface
{
    /**
     * Animal name
     *
     * @return string
     */
    abstract public function name(): string;

    /**
     * Animal eat
     */
    abstract protected function eat();
}

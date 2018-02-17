<?php

namespace Zoo\Stuff;

use Zoo\UnitInterface;

/**
 * Class AbstractStuff
 *
 * @package Zoo\Stuff
 */
abstract class AbstractStuff implements UnitInterface
{
    /**
     * Worker name
     *
     * @return string
     */
    abstract public function name(): string;

    /**
     * Worker come to work
     */
    abstract public function comeToWork();
}

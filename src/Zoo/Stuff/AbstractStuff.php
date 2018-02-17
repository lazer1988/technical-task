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
     * Name of zoo worker
     *
     * @return string
     */
    abstract protected function name(): string;

    /**
     * Worker come to work
     */
    abstract protected function comeToWork();
}

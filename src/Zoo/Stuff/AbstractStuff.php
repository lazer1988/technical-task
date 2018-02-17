<?php

namespace Zoo\Stuff;

use Zoo\UnitInterface;
use Zoo\Animal\AbstractAnimal;

/**
 * Class AbstractStuff
 *
 * @package Zoo\Stuff
 */
abstract class AbstractStuff implements UnitInterface
{
    /**
     * @var AbstractAnimal[]
     */
    private $animals = [];

    /**
     * @param AbstractAnimal $animal
     *
     * @return $this
     */
    public function addAnimal(AbstractAnimal $animal): AbstractStuff
    {
        if (!in_array($animal, $this->animals, true)) {
            $this->animals[] = $animal;
        }

        return $this;
    }

    /**
     * Name of zoo worker
     *
     * @return string
     */
    abstract public function name(): string;

    /**
     * Worker come to work
     *
     * @return string
     */
    abstract public function comeToWork(): string;

    /**
     * Human can feed animal
     *
     * @return string
     */
    public function feed(): string
    {
        $feed = '';
        foreach ($this->animals as $animal) {
            $feed .= $this->name().' is feeding '.$animal->name().PHP_EOL;
            $feed .= $animal->eat();
        }

        return $feed;
    }
}

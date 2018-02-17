<?php

namespace Zoo;

/**
 * Class Zoo
 *
 * @package Zoo
 */
class Zoo implements UnitInterface
{
    /**
     * @var UnitInterface[]
     */
    private $units = [];

    /**
     * {@inheritdoc}
     */
    public function behavior()
    {
        foreach ($this->units as $unit) {
            $unit->behavior();
        }
    }

    /**
     * @param UnitInterface $unit
     *
     * @return $this
     */
    public function addUnit(UnitInterface $unit)
    {
        if (!in_array($unit, $this->units, true)) {
            $this->units[] = $unit;
        }

        return $this;
    }
}

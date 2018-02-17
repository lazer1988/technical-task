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
    public function behavior(): string
    {
        $behavior = '';
        foreach ($this->units as $unit) {
            $behavior .= $unit->behavior();
        }

        return $behavior;
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

    /**
     * @return UnitInterface[]
     */
    public function getUnits()
    {
        return $this->units;
    }
}

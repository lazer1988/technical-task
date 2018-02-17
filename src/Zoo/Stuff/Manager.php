<?php

namespace Zoo\Stuff;

/**
 * Class Manager
 *
 * @package Zoo\Stuff
 */
class Manager extends AbstractStuff
{
    /**
     * {@inheritdoc}
     */
    public function behavior(): string
    {
        $behavior  = $this->comeToWork();
        $behavior .= $this->order();
        $behavior .= $this->feed();
        $behavior .= PHP_EOL;

        return $behavior;
    }

    /**
     * Give orders for stuff
     *
     * @return string
     */
    public function order(): string
    {
        return $this->name().' give orders for stuff'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Manager';
    }

    /**
     * {@inheritdoc}
     */
    public function comeToWork(): string
    {
        return $this->name().' stuck on traffic jet and late'.PHP_EOL;
    }
}

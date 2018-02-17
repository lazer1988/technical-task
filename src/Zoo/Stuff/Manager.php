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
    public function behavior()
    {
        $this->comeToWork();
        $this->order();
    }

    /**
     * Give orders for stuff
     */
    public function order()
    {
        echo $this->name().' give orders for stuff'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    protected function name(): string
    {
        return 'Manager';
    }

    /**
     * {@inheritdoc}
     */
    protected function comeToWork()
    {
        echo $this->name().' stuck on traffic jet and late'.PHP_EOL;
    }
}

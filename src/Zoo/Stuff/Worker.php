<?php

namespace Zoo\Stuff;

/**
 * Class Worker
 *
 * @package Zoo\Stuff
 */
class Worker extends AbstractStuff
{
    /**
     * {@inheritdoc}
     */
    public function behavior(): string
    {
        $behavior  = $this->comeToWork();
        $behavior .= $this->feed();
        $behavior .= PHP_EOL;

        return $behavior;
    }

    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Worker';
    }

    /**
     * {@inheritdoc}
     */
    public function comeToWork(): string
    {
        return $this->name().' came to work'.PHP_EOL;
    }
}

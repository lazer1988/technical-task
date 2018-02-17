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
    public function behavior()
    {
        $this->comeToWork();
        $this->feed();
    }

    /**
     * Worked feed animals
     */
    public function feed()
    {
        echo $this->name().' feed animals'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    protected function name(): string
    {
        return 'Worker';
    }

    /**
     * {@inheritdoc}
     */
    protected function comeToWork()
    {
        echo $this->name().' came to work'.PHP_EOL;
    }
}

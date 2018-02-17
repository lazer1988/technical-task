<?php

namespace Zoo\Stuff;

/**
 * Class Cleaner
 *
 * @package Zoo\Stuff
 */
class Cleaner extends AbstractStuff
{
    /**
     * {@inheritdoc}
     */
    protected function name(): string
    {
        return 'Cleaner';
    }

    /**
     * {@inheritdoc}
     */
    protected function comeToWork()
    {
        echo $this->name().' came to work in time'.PHP_EOL;
    }

    /**
     * Cleaning zoo
     */
    public function clean()
    {
        echo $this->name().' is cleaning zoo'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function behavior()
    {
        $this->comeToWork();
        $this->clean();
    }
}

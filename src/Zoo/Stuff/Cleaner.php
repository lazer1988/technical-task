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
    public function behavior(): string
    {
        $behavior  = $this->comeToWork();
        $behavior .= $this->clean();
        $behavior .= PHP_EOL;

        return $behavior;
    }

    /**
     * Cleaning zoo
     *
     * @return string
     */
    public function clean(): string
    {
        return $this->name().' is cleaning zoo'.PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Cleaner';
    }

    /**
     * {@inheritdoc}
     */
    public function comeToWork(): string
    {
        return $this->name().' came to work in time'.PHP_EOL;
    }
}

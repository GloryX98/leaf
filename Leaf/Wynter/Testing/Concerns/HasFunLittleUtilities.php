<?php

namespace Leaf\Wynter\Testing\Concerns;

trait HasFunLittleUtilities
{
    public function dump()
    {
        echo $this->dom;

        return $this;
    }

    public function tap($callback)
    {
        $callback($this);

        return $this;
    }
}

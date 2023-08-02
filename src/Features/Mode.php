<?php

namespace Mellaoui\SparkleBuilder\Features;

class Mode
{
    public function __construct(protected string $mode){}

    public function setMode(): string
    {
        return $this->mode;
    }

}
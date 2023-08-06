<?php

namespace Mellaoui\SparkleBuilder;

class Selector implements Interfaces\SelectableInterface
{
    public function selectTheme($theme): string
    {
        return $theme;
    }
}
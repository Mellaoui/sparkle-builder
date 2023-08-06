<?php

namespace Mellaoui\SparkleBuilder;

use Mellaoui\SparkleBuilder\Builders\MenuBuilder;
use Mellaoui\SparkleBuilder\Selector;
class Sparkle
{

    public function activateTheme($theme): string
    {
        $selector = new Selector();
        return $selector->selectTheme($theme);
    }

    public function getMenu($menu): array
    {
        $builder= new MenuBuilder();
        return $builder->setMenuLinks($menu);
    }
}
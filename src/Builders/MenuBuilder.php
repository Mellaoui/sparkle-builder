<?php

namespace Mellaoui\SparkleBuilder\Builders;

use Mellaoui\SparkleBuilder\Interfaces\MenuInterface;

class MenuBuilder implements MenuInterface
{
    public function setMenuLinks(array $links): array
    {
        return $links;
    }
}
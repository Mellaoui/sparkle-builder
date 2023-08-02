<?php

namespace Mellaoui\SparkleBuilder\Builders;

use Mellaoui\SparkleBuilder\Interfaces\ThemeBuilder;

class PageBuilder implements ThemeBuilder
{
    
    public function setMenuLinks($links): array
    {
        return $links;
    }

    public function setHeroText($text): string
    {
        return $text;
    }

    public function setHeroImage()
    {
        // TODO: Implement setHeroImage() method.
    }

    public function setImages()
    {
        // TODO: Implement setImages() method.
    }
}
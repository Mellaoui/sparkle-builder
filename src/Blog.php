<?php

namespace Mellaoui\SparkleBuilder;

class Blog
{
    public function __construct(protected string $title, $content){}


    public function setTitle(): string
    {
        return $this->title;
    }

    public function setContent(){
        return $this->setContent();
    }
}
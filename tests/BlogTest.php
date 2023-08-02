<?php

namespace Mellaoui\SparkleBuilder\Tests;

use Mellaoui\SparkleBuilder\Blog;
use PHPUnit\Framework\TestCase;

class BlogTest extends TestCase
{

    /** @test*/
    public function it_returns_the_same_passed_params(): void
    {

        $blog = new Blog("this is a title", "");

        $title = $blog->setTitle();


        $this->assertSame('this is a title', $title);

    }
}

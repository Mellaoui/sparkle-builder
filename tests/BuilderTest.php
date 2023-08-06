<?php
namespace Mellaoui\SparkleBuilder\Tests;

use Mellaoui\SparkleBuilder\Builders\MenuBuilder;
use Mellaoui\SparkleBuilder\Builders\PageBuilder;
use Mellaoui\SparkleBuilder\Sparkle;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**@test */

    public function test_can_return_a_links_array()
    {
        $builder = new MenuBuilder();

        $links = ['home', 'about', 'work'];

        $menu = $builder->setMenuLinks($links);

        $this->assertIsArray($menu);
    }


    public function test_array_contains_links()
    {
        $builder = new MenuBuilder();

        $links = ['home', 'about', 'work'];

        $menu = $builder->setMenuLinks($links);

        foreach( $links as $link ){
            $this->assertContains($link, $menu);
        }
       
    }


    public function test_can_return_a_string(){
        $builder = new PageBuilder();

        $hero ="This a hero message";
         
        $this->assertIsString($builder->setHeroText($hero));
    }

    public function test_wrapper_can_get_links(){

        $wrapper = new Sparkle();

        $wrapper->getMenu($menu = ['home', 'about']);

        $this->assertIsArray($menu);
    }

}

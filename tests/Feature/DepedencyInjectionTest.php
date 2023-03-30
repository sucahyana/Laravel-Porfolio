<?php

namespace Tests\Feature;

use App\Data\foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepedencyInjectionTest extends TestCase
{
    public function testDepedencyInjection()
    {
        $foo1=$this->app->make(foo::class);
        $foo2=$this->app->make(foo::class);


        self::assertEquals("foo", $foo1->foo());
    }
}

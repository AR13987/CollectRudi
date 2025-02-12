<?php

use PHPUnit\Framework\TestCase;
use App\Collect;

class CollectTest extends TestCase
{
    public function testPush()
    {
        $collect = new Collect();
        $collect->push('item1');
        $this->assertEquals(['item1'], $collect->getItems());
    }

    public function testUnshift()
    {
        $collect = new Collect();
        $collect->unshift('item1');
        $this->assertEquals(['item1'], $collect->getItems());
    }

    public function testShift()
    {
        $collect = new Collect();
        $collect->push('item1');
        $this->assertEquals('item1', $collect->shift());
    }

    public function testCount()
    {
        $collect = new Collect();
        $collect->push('item1');
        $collect->push('item2');
        $this->assertEquals(2, $collect->count());
    }
}
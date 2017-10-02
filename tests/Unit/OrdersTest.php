<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Product;
use App\Orders;
class OrdersTest extends TestCase
{
    /** @test */
    function an_order_consists_of_products()
    {
    	$order = new Orders;

    	$product = new Product('Fallout 4', 59);
    	$product2 = new Product('Pillowcase', 7);

    	$order->add($product);
    	$order->add($product2);

    	
    	$this->assertCount(2, $order->products());

    }

    /** @test */
    function an_order_can_determine_the_total_cost_of_all_its_products()
    {
    	$order = new Orders;

    	$product = new Product('Fallout 4', 59);
    	$product2 = new Product('Pillowcase', 7);

    	$order->add($product);
    	$order->add($product2);

    	$this->assertEquals(66, $order->total());
    }
}

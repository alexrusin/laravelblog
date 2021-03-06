<?php

namespace Tests\Unit;


use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Product;

class ProductTest extends TestCase
{
  protected $product;

  public function setUp()
  {
  	$this->product = new Product('Fallout 4', 59);
  }

  /** @test */

  function a_product_has_a_name()
  {
  	$this->assertEquals('Fallout 4', $this->product->name());
  }

  function testAProductHasACost()
  {
  	$this->assertEquals(59, $this->product->cost());
  }

}

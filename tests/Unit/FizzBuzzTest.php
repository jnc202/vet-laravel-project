<?php

namespace Tests\Unit;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzbuzz;

    public function setUp() : void
    {
    $this->fizzbuzz = new FizzBuzz();
    }

    public function test1()
    {
    $this->assertSame("1", $this->fizzbuzz->forNumber(1));
    }

    public function test2()
    {
    $this->assertSame("2", $this->fizzbuzz->forNumber(2));
    }

    public function test3()
    {
    $this->assertSame("Fizz", $this->fizzbuzz->forNumber(3));
    }
    
    public function test4()
    {
        $this->assertSame("4", $this->fizzbuzz->forNumber(4));
    }

    public function test5()
    {
    $this->assertSame("Buzz", $this->fizzbuzz->forNumber(5));
    }

    public function test6()
    {
        $this->assertSame("Fizz", $this->fizzbuzz->forNumber(6));
    }

    public function test7()
    {
    $this->assertSame("Rarr", $this->fizzbuzz->forNumber(7));
    }

    public function test10()
    {
    $this->assertSame("Buzz", $this->fizzbuzz->forNumber(10));
    }

    public function test15()
    {
    $this->assertSame("FizzBuzz", $this->fizzbuzz->forNumber(15));
    }

    public function test30()
    {
    $this->assertSame("FizzBuzz", $this->fizzbuzz->forNumber(30));
    }

    public function test99()
    {
    $this->assertSame("Fizz", $this->fizzbuzz->forNumber(99));
    }

    public function test67()
    {
    $this->assertSame("67", $this->fizzbuzz->forNumber(67));
    }
    
    public function test60()
    {
    $this->assertSame("FizzBuzz", $this->fizzbuzz->forNumber(60));
    }
    
    public function test21()
    {
    $this->assertSame("FizzRarr", $this->fizzbuzz->forNumber(21));
    }

    public function test35()
    {
    $this->assertSame("BuzzRarr", $this->fizzbuzz->forNumber(35));
    }
    
    public function test105()
    {
    $this->assertSame("FizzBuzzRarr", $this->fizzbuzz->forNumber(105));
    }

}

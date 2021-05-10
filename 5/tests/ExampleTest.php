<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase 
{
    public function testTrue()
    {
        $this->assertTrue(true);
    }
    public function testFalse()
    {
        $this->assertFalse(false);
    }
    public function testEquals()
    {
        $result = 5 + 5;
        $this->assertEquals($result,"10");//==
    }
    public function testSame()
    {
        $result = 5 + 5;
        $this->assertEquals($result,10);//===
    }
    public function testArray()
    {
        $this->assertIsArray([]);
    }
    public function testBool()
    {
        $this->assertIsBool(true);
    }
    public function testInt()
    {
        $this->assertIsInt(10);
    }
    public function testString()
    {
        $this->assertIsString("Test");
    }
    public function testEmpty()
    {
        $this->assertEmpty([]);
    }
    public function testCount()
    {
        $this->assertCount(2,['AAA','BBB']);
    }
    public function testHasKey()
    {
        $this->assertArrayHasKey('color',['color' => 'BBB']);
    }
}
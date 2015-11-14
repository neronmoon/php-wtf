<?php
use WTF\Test;

class TestTest extends PHPUnit_Framework_TestCase
{
   public function testGetName()
   {
       $test = new Test;
       $this->assertEquals($test->a(), 1);
   }
}

<?php

namespace WTF\Strings;

class foo {
   private $bar;
   public function __construct($bar) {
      $this->bar = $bar;
   }
   public function __toString() {
      return $this->bar;
   }
}

class StringsTest extends \PHPUnit_Framework_TestCase
{
   public function testGetName()
   {
     $pos = \WTF\strpos(new foo('abc'), new foo('ab'));
     $this->assertEquals($pos, 0);
   }
}

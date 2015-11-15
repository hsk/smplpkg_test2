<?php
include_once("test1/test1.php");

class test2 {
  function test() {
    $test1 = new test1();
    $test1->test();
  }
}

<?php

require '../functions.php';
use PHPUnit\Framework\TestCase;

class loopsthrougharrayTest extends TestCase {
    // Our success test
    public function testSuccessSum()
    {
        $expected = 6;
        $inputA = 3;
        $inputB = 3;
        $case = sum($inputA, $inputB);
        $this->assertEquals($expected, $case);
    }

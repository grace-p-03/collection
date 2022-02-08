<?php


use PHPUnit\Framework\TestCase;
require_once '../functions.php';

class loopsThroughArrayTest extends TestCase {

    public function testSuccessLoopsThroughArray(): void
    {
        $input = [
            ['name' => 'Maggie Enterrios'],
            ['name' => 'Malika Favre']
        ];
        $expected = '<div>Maggie Enterrios</div><div>Malika Favre</div>';
        $case = loopsthroughArray($input);
        $this->assertEquals($case, $expected);
    }
    public function testFailureLoopsThroughArrayMissingKey(): void
    {
        $input = [];
        $expected = '<div>No items found in the database</div>';
        $case = loopsthroughArray($input);
        $this->assertEquals($case, $expected);
    }
    }

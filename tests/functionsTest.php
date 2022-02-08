<?php


use PHPUnit\Framework\TestCase;
require_once '../functions.php';

class functionsTest extends TestCase {

    public function testSuccessDisplayIllustrators(): void
    {
        $input = [
            [
                'name' => 'Malika Favre',
                'image' => 'test.jpg',
                'instagram' => '@malikafavre',
                'location' => 'Barcelona',
                'website' => 'malikafavre.com'
            ]
        ];
        $expected = '<div>Malika Favre</div><div><img src="test.jpg"alt="Example image of illustrator\'s work"/></div><div>@malikafavre</div><div>Barcelona</div><div>malikafavre.com</div>';
        $case = displayIllustrators($input);
        $this->assertEquals($case, $expected);
    }
    public function testFailureDisplayIllustratorsMissingKey(): void
    {
        $input = [];
        $expected = '<div>No items found in the database</div>';
        $case = displayIllustrators($input);
        $this->assertEquals($case, $expected);
    }
    public function testMalformedDisplayIllustrators()
    {
        $input = true;
        $this->expectException(TypeError::class);
        displayIllustrators($input);
    }
}

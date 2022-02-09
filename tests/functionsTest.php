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
                'website' => 'malikafavre.com',
                'location' => 'Barcelona'
            ]
        ];
        $expected = '<main><section><h2>Malika Favre</h2><div><img src="test.jpg"alt="Example image of illustrator\'s work"/></div><h3>@malikafavre</h3><p>malikafavre.com</p><p>Barcelona</p></section></main>';
        $case = displayIllustrators($input);
        $this->assertEquals($case, $expected);
    }
    public function testFailureDisplayIllustratorsMissingKey(): void
    {
        $input = [];
        $expected = '<div>Error! No items found in the database</div>';
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

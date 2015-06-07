<?php

namespace Excercises\Poly\Tests;

use Excercises\Poly\ShapeInterface;
use Excercises\Poly\SingletonShape;
use Excercises\Poly\Tests\Spy\Stream;

class ShapesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider shapeProvider
     */
    public function testPrintsFormulaForCalculatingAreas($stream, $shape, $expected)
    {
        /** @var ShapeInterface $shape */
        /** @var Stream $stream */
        $shape->printAreaFormula();
        $this->assertSame($expected, $stream->lastWritten());
    }

    /**
     * @return array
     */
    public function shapeProvider()
    {
        $stream = new Stream;
        return [
            ["stream" => $stream, "shape" => new SingletonShape("Rectangle", $stream), "expected" => "a*b"],
            ["stream" => $stream, "shape" => new SingletonShape("Triangle", $stream), "expected" => "(b*h)/2"],
            ["stream" => $stream, "shape" => new SingletonShape("Square", $stream), "expected" => "a^2"]
        ];
    }
}

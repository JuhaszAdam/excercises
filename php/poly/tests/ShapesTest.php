<?php

namespace Excercises\Poly\Tests;

use Excercises\Poly\Rectangle;
use Excercises\Poly\ShapeInterface;
use Excercises\Poly\Square;
use Excercises\Poly\Tests\Spy\Stream;
use Excercises\Poly\Triangle;

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
            ["stream" => $stream, "shape" => new Rectangle($stream), "expected" => "a*b"],
            ["stream" => $stream, "shape" => new Triangle($stream), "expected" => "(b*h)/2"],
            ["stream" => $stream, "shape" => new Square($stream), "expected" => "a^2"]
        ];
    }
}

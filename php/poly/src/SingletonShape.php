<?php

namespace Excercises\Poly;

use Excercises\Poly\Tests\Spy\Stream;
use Prophecy\Exception\InvalidArgumentException;

class SingletonShape implements ShapeInterface
{
    /**
     * @var ShapeInterface
     */
    private $shape;

    /**
     * @param string $shape
     * @param Stream $stream
     */
    public function __construct($shape, Stream $stream)
    {
        switch ($shape) {
            case "Square" :
                $this->shape = new Square($stream);
                break;
            case "Triangle" :
                $this->shape = new Triangle($stream);
                break;
            case "Rectangle" :
                $this->shape = new Rectangle($stream);
                break;
            default :
                throw new InvalidArgumentException("Shape not found!");
        }
    }

    public function printAreaFormula()
    {
        $this->shape->printAreaFormula();
    }
}

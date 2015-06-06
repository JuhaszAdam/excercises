<?php

namespace Excercises\Poly;

class Rectangle extends AbstractShape implements ShapeInterface
{
    public function printAreaFormula()
    {
        $this->stream->write("a*b");
    }
}

<?php

namespace Excercises\Poly;

class Triangle extends AbstractShape implements ShapeInterface
{
    public function printAreaFormula()
    {
        $this->stream->write("(b*h)/2");
    }
}

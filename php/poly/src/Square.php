<?php

namespace Excercises\Poly;

class Square extends AbstractShape implements ShapeInterface
{
    public function printAreaFormula()
    {
        $this->stream->write("a^2");
    }
}

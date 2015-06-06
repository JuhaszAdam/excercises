<?php

namespace Excercises\Poly;

abstract class AbstractShape
{
    /**
     * @var WritableStream
     */
    protected $stream;

    /**
     * @param WritableStream $stream
     */
    public function __construct(WritableStream $stream)
    {
        $this->stream = $stream;
    }
}

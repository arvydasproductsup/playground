<?php

class Flattener implements FlattenerInterface
{
    public function flatten(): flattenedRow
    {
        return new FlattenedRow();
    }
}

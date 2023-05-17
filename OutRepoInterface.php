<?php

interface OutRepoInterface
{
    public function save(FlattenedRow $row): bool;
}

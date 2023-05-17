<?php

class ImportExportService
{
    public function __construct(
        private InRepoInterface $in,
        private OutRepoInterface $out
    ) {

    }

    public function run()
    {
        /** @var FlattenedRow $row */
        foreach ($this->in as $row) {
            $this->out->save($row);
        }
    }
}

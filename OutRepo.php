<?php

// implementation against Container API or custom implementation for Destination
class OutRepo implements OutRepoInterface
{
    public function __construct(
        private ApiClient $client, // container API or 3rd party API/Server
        private Observers $observers // attaching for logging
    )
    {

    }
    public function save(FlattenedRow $row)
    {
        $this->client->save($row->jsonSerialize());
    }

}

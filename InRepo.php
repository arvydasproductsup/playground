<?php
// implementation against Container API or custom implementation for Data source
class InRepo implements Iterator, InRepoInterface
{
    public function __construct(
        private FlattenerInterface $flattener,
        private ApiClient $client, // 3rd party API/Server or Container API
        private Observers $observers // logging
    )
    {

    }
    public function current(): FlattenedRow
    {
        return new FlattenedRow();
    }
}

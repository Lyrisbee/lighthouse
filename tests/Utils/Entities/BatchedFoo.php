<?php

namespace Tests\Utils\Entities;

use Nuwave\Lighthouse\Federation\BatchedEntityResolver;

class BatchedFoo implements BatchedEntityResolver
{
    public function __invoke(array $representations): iterable
    {
        return $representations;
    }
}

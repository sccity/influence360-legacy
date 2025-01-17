<?php

namespace Influence360\Core\Acl;

use Illuminate\Support\Collection;

class AclItem
{
    /**
     * Create a new AclItem instance.
     */
    public function __construct(
        public string $key,
        public string $name,
        public array|string $route,
        public int $sort,
        public Collection $children,
    ) {}
}

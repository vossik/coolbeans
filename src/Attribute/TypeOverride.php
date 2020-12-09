<?php

declare(strict_types = 1);

namespace CoolBeans\Attribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
class TypeOverride
{
    public function __construct(
        public string $type
    )
    {

    }
}
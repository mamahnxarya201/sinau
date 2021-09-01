<?php

declare(strict_types=1);

namespace internal\Models;

class AppEvent
{
    public function __construct(
        public string $name,
        public string $timestamp,
        public string $message,
        public TypeEnum $type,
        public ?array $snapshot,
        public ?array $data,
    ) {}
}

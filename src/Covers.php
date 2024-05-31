<?php
declare(strict_types=1);

namespace Pim\SideEffectsWs;

final readonly class Covers
{
    public function __construct(private array $coverConfiguration)
    {
    }
}
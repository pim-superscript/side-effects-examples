<?php
declare(strict_types=1);

namespace Pim\SideEffectsWs;

use DateTimeImmutable;

final readonly class TermVersion
{
    public function __construct(private DateTimeImmutable $startDate, private Covers $covers, private Premium $premium)
    {
    }
}
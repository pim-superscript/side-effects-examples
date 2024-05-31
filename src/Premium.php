<?php
declare(strict_types=1);

namespace Pim\SideEffectsWs;

final readonly class Premium
{
    public function __construct(private int $amountInclusive, private int $amountTaxes, private int $amountCommission)
    {
    }
}
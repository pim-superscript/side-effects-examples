<?php
declare(strict_types=1);

namespace Pim\SideEffectsWs;

interface RatingEngineClient
{
    public function call(string $productReference, Covers $covers): Premium;
}
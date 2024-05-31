<?php
declare(strict_types=1);

namespace Pim\SideEffectsWs;

use Ramsey\Uuid\UuidInterface;

interface PolicyRepository
{
    public function find(UuidInterface $policyId): Policy;

    public function save(Policy $policy): void;
}
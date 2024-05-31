<?php
declare(strict_types=1);

namespace Pim\SideEffectsWs;

use Ramsey\Uuid\UuidInterface;

final class Policy
{
    /**
     * @param UuidInterface $policyId
     * @param string $productReference
     * @param Term[] $terms
     */
    public function __construct(
        private readonly UuidInterface $policyId,
        private readonly string $productReference,
        private array $terms
    ) {
    }

    /**
     * @return Term
     */
    public function latestTerm(): Term
    {
        return $this->terms[array_key_last($this->terms)];
    }
}
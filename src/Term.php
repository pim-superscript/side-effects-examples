<?php
declare(strict_types=1);

namespace Pim\SideEffectsWs;

final class Term
{
    /**
     * @param TermVersion[] $versions
     */
    public function __construct(private array $versions)
    {
    }

    public function latestVersion(): TermVersion
    {
        return $this->versions[array_key_last($this->versions)];
    }
}
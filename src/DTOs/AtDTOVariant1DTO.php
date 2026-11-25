<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * range_query_specs
 */
final class AtDTOVariant1DTO extends \Dmorenof\SdkRuntime\DTO
{
    public int $gt;
    public int $gte;
    public int $lt;
    public int $lte;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gt' => is_int($value) ? $this->gt = $value : parent::assignMember($name, $value),
            'gte' => is_int($value) ? $this->gte = $value : parent::assignMember($name, $value),
            'lt' => is_int($value) ? $this->lt = $value : parent::assignMember($name, $value),
            'lte' => is_int($value) ? $this->lte = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

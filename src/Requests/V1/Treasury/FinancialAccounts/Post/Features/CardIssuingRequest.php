<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\Features;

/**
 * access
 */
final class CardIssuingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requested',
    ];

    public bool $requested;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requested' => is_bool($value) ? $this->requested = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

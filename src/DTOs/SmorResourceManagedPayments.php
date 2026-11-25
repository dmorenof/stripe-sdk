<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * SmorResourceManagedPayments
 */
final class SmorResourceManagedPayments extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Set to `true` to enable [Managed Payments](https://docs.stripe.com/payments/managed-payments), Stripe's merchant of record solution, for this session.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Customer Portal
 *
 * This hash contains whether the customer portal is enabled.
 */
final class SessionResourceComponentsResourceCustomerPortal extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Whether the customer portal is enabled.
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

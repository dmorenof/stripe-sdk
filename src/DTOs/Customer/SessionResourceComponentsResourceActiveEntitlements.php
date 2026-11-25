<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Active Entitlement
 *
 * This hash contains whether the active entitlements is enabled.
 */
final class SessionResourceComponentsResourceActiveEntitlements extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Whether the active entitlements is enabled.
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

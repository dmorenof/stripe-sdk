<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Buy Button
 *
 * This hash contains whether the buy button is enabled.
 */
final class SessionResourceComponentsResourceBuyButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Whether the buy button is enabled.
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

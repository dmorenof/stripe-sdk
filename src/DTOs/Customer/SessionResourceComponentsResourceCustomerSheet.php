<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Customer Sheet
 *
 * This hash contains whether the customer sheet is enabled and the features it supports.
 */
final class SessionResourceComponentsResourceCustomerSheet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Whether the customer sheet is enabled.
     */
    public bool $enabled;
    /**
     * This hash defines whether the customer sheet supports certain features.
     */
    public ?\StripeSDK\DTOs\Customer\SessionResourceComponentsResourceCustomerSheetResourceFeatures $features;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'features' => $value === null || $value instanceof \stdClass ? $this->features = $value === null ? null : new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceCustomerSheetResourceFeatures($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

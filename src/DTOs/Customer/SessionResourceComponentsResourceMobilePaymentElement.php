<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Mobile Payment Element
 *
 * This hash contains whether the mobile payment element is enabled and the features it supports.
 */
final class SessionResourceComponentsResourceMobilePaymentElement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Whether the mobile payment element is enabled.
     */
    public bool $enabled;
    /**
     * This hash defines whether the mobile payment element supports certain features.
     */
    public ?\StripeSDK\DTOs\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures $features;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'features' => $value === null || $value instanceof \stdClass ? $this->features = $value === null ? null : new \StripeSDK\DTOs\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

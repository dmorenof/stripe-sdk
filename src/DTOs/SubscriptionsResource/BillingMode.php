<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Billing Mode
 *
 * The billing mode of the subscription.
 */
final class BillingMode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Configure behavior for flexible billing mode
     */
    public ?\StripeSDK\DTOs\SubscriptionsResource\BillingModeFlexible $flexible;
    /**
     * Controls how prorations and invoices for subscriptions are calculated and orchestrated.
     */
    public \StripeSDK\Enums\SubscriptionsResource\BillingMode\TypeEnum $type;
    /**
     * Details on when the current billing_mode was adopted.
     * Format: unix-time
     */
    public int $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flexible' => $value === null || $value instanceof \stdClass ? $this->flexible = $value === null ? null : new \StripeSDK\DTOs\SubscriptionsResource\BillingModeFlexible($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\SubscriptionsResource\BillingMode\TypeEnum::from($value) : parent::assignMember($name, $value),
            'updated_at' => is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

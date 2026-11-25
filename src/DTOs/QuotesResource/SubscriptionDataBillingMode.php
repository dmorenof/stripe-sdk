<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\QuotesResource;

/**
 * Billing Mode
 *
 * The billing mode of the quote.
 */
final class SubscriptionDataBillingMode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\SubscriptionsResource\BillingModeFlexible $flexible;
    /**
     * Controls how prorations and invoices for subscriptions are calculated and orchestrated.
     */
    public \StripeSDK\Enums\QuotesResource\SubscriptionDataBillingMode\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flexible' => $value instanceof \stdClass ? $this->flexible = new \StripeSDK\DTOs\SubscriptionsResource\BillingModeFlexible($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\QuotesResource\SubscriptionDataBillingMode\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

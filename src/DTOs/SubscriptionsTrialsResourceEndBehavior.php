<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * End Behavior
 *
 * Defines how a subscription behaves when a free trial ends.
 */
final class SubscriptionsTrialsResourceEndBehavior extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'missing_payment_method',
    ];

    /**
     * Indicates how the subscription should change when the trial ends if the user did not provide a payment method.
     */
    public \StripeSDK\Enums\SubscriptionsTrialsResourceEndBehavior\PaymentMethodEnum $missing_payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'missing_payment_method' => is_string($value) ? $this->missing_payment_method = \StripeSDK\Enums\SubscriptionsTrialsResourceEndBehavior\PaymentMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

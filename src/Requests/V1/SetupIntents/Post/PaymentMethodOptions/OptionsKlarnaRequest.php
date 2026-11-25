<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions;

/**
 * setup_intent_payment_method_options_param
 */
final class OptionsKlarnaRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: currency
     */
    public string $currency;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Klarna\OnDemandRequest $on_demand;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Klarna\PreferredLocaleEnum $preferred_locale;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Klarna\KlarnaSubscriptionsRequest $subscriptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'preferred_locale' => is_string($value) ? $this->preferred_locale = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Klarna\PreferredLocaleEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

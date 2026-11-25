<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post;

/**
 * payment_settings
 *
 * Payment settings to pass to invoices created by the subscription.
 */
final class PaymentSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Subscriptions\Post\PaymentSettings\MethodOptionsRequest $payment_method_options;
    public \StripeSDK\Requests\V1\Subscriptions\Post\PaymentSettings\MethodTypesRequest $payment_method_types;
    public \StripeSDK\Enums\V1\Subscriptions\Post\PaymentSettings\PaymentMethodEnum $save_default_payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'save_default_payment_method' => is_string($value) ? $this->save_default_payment_method = \StripeSDK\Enums\V1\Subscriptions\Post\PaymentSettings\PaymentMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

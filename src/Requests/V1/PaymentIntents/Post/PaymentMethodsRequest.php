<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * automatic_payment_methods_param
 *
 * When you enable this parameter, this PaymentIntent accepts payment methods that you enable in the Dashboard and that are compatible with this PaymentIntent's other parameters.
 */
final class PaymentMethodsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public \StripeSDK\Enums\V1\PaymentIntents\Post\AutomaticPaymentMethods\AllowRedirectsEnum $allow_redirects;
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redirects' => is_string($value) ? $this->allow_redirects = \StripeSDK\Enums\V1\PaymentIntents\Post\AutomaticPaymentMethods\AllowRedirectsEnum::from($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

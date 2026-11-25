<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * payment_method_data_param
 *
 * This parameter allows you to set some attributes on the payment method created during a Checkout session.
 */
final class MethodDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodData\AllowRedisplayEnum $allow_redisplay;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodData\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

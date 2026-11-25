<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post;

/**
 * payment_method_data
 *
 * Hash used to generate the PaymentMethod to be used for this Authentication. This is mutually exclusive with the `payment_method` parameter.
 */
final class MethodDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'card',
        'type',
    ];

    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\PaymentMethodData\BillingDetailsRequest $billing_details;
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\PaymentMethodData\DataCardRequest $card;
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\PaymentMethodData\DataTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\PaymentMethodData\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

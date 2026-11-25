<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PaymentMethodsCardRequestVariant1;

/**
 * networks_params
 */
final class PaymentMethodsCardRequestVariant1NetworksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\PaymentMethodsCardRequestVariant1\Networks\NetworksPreferredEnum $preferred;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred' => is_string($value) ? $this->preferred = \StripeSDK\Enums\PaymentMethodsCardRequestVariant1\Networks\NetworksPreferredEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

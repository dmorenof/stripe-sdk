<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post\Card;

/**
 * networks_update_api_param
 */
final class CardNetworksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\Card\Networks\NetworksPreferredEnum $preferred;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred' => is_string($value) ? $this->preferred = \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\Card\Networks\NetworksPreferredEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails;

/**
 * money_movement_card_additional_data
 */
final class DetailsCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\Card\CustomerPresenceEnum $customer_presence;
    public \StripeSDK\Enums\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\Card\PaymentTypeEnum $payment_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_presence' => is_string($value) ? $this->customer_presence = \StripeSDK\Enums\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\Card\CustomerPresenceEnum::from($value) : parent::assignMember($name, $value),
            'payment_type' => is_string($value) ? $this->payment_type = \StripeSDK\Enums\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\Card\PaymentTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

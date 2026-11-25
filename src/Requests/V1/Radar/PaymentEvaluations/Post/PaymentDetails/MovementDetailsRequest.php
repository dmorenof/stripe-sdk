<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails;

/**
 * money_movement_details
 */
final class MovementDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'money_movement_type',
    ];

    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\DetailsCardRequest $card;
    public \StripeSDK\Enums\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\MovementTypeEnum $money_movement_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'money_movement_type' => is_string($value) ? $this->money_movement_type = \StripeSDK\Enums\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MoneyMovementDetails\MovementTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

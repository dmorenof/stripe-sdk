<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Money Movement Detail
 *
 * Money Movement details attached to this payment.
 */
final class MoneyMovementDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'money_movement_type',
    ];

    /**
     * Describes card money movement details.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\MoneyMovementCard $card;
    /**
     * Describes the type of money movement.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MoneyMovementDetails\MovementTypeEnum $money_movement_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value === null || $value instanceof \stdClass ? $this->card = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\MoneyMovementCard($value) : parent::assignMember($name, $value),
            'money_movement_type' => is_string($value) ? $this->money_movement_type = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MoneyMovementDetails\MovementTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

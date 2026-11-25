<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodCardDetailsResourceInstallmentPlan
 */
final class CardDetailsResourceInstallmentPlan extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * For `fixed_count` installment plans, this is the number of installment payments your customer will make to their credit card.
     */
    public ?int $count;
    /**
     * For `fixed_count` installment plans, this is the interval between installment payments your customer will make to their credit card. One of `month`.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallmentPlan\IntervalEnum $interval;
    /**
     * Type of installment plan, one of `fixed_count`, `revolving`, or `bonus`.
     */
    public \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallmentPlan\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => $value === null || is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'interval' => $value === null || is_string($value) ? $this->interval = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallmentPlan\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallmentPlan\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

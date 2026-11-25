<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card_installments_plan
 */
final class MethodDetailsCardInstallmentsPlan extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * For `fixed_count` installment plans, this is the number of installment payments your customer will make to their credit card.
     */
    public ?int $count;
    /**
     * For `fixed_count` installment plans, this is the interval between installment payments your customer will make to their credit card.
     * One of `month`.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsCardInstallmentsPlan\IntervalEnum $interval;
    /**
     * Type of installment plan, one of `fixed_count`, `bonus`, or `revolving`.
     */
    public \StripeSDK\Enums\Payment\MethodDetailsCardInstallmentsPlan\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => $value === null || is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'interval' => $value === null || is_string($value) ? $this->interval = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsCardInstallmentsPlan\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\MethodDetailsCardInstallmentsPlan\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

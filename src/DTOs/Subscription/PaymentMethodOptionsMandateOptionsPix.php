<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * subscription_payment_method_options_mandate_options_pix
 */
final class PaymentMethodOptionsMandateOptionsPix extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'end_date' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount to be charged for future payments.
     */
    public ?int $amount;
    /**
     * Determines if the amount includes the IOF tax.
     */
    public ?\StripeSDK\Enums\Subscription\PaymentMethodOptionsMandateOptionsPix\IncludesIofEnum $amount_includes_iof;
    /**
     * Date when the mandate expires and no further payments will be charged, in `YYYY-MM-DD`.
     */
    public ?string $end_date {
        set {
            $this->assigning('end_date', $value);
            $this->end_date = $value;
        }
    }
    /**
     * Schedule at which the future payments will be charged.
     */
    public ?\StripeSDK\Enums\Subscription\PaymentMethodOptionsMandateOptionsPix\PaymentScheduleEnum $payment_schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_includes_iof' => $value === null || is_string($value) ? $this->amount_includes_iof = $value === null ? null : \StripeSDK\Enums\Subscription\PaymentMethodOptionsMandateOptionsPix\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'end_date' => $value === null || is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'payment_schedule' => $value === null || is_string($value) ? $this->payment_schedule = $value === null ? null : \StripeSDK\Enums\Subscription\PaymentMethodOptionsMandateOptionsPix\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

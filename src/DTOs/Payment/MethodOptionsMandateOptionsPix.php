<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_mandate_options_pix
 */
final class MethodOptionsMandateOptionsPix extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'end_date' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
        'start_date' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount to be charged for future payments.
     */
    public int $amount;
    /**
     * Determines if the amount includes the IOF tax.
     */
    public \StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix\IncludesIofEnum $amount_includes_iof;
    /**
     * Type of amount.
     */
    public \StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix\AmountTypeEnum $amount_type;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     * Format: currency
     */
    public string $currency;
    /**
     * Date when the mandate expires and no further payments will be charged, in `YYYY-MM-DD`.
     */
    public string $end_date {
        set {
            $this->assigning('end_date', $value);
            $this->end_date = $value;
        }
    }
    /**
     * Schedule at which the future payments will be charged.
     */
    public \StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix\PaymentScheduleEnum $payment_schedule;
    /**
     * Subscription name displayed to buyers in their bank app.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Start date of the mandate, in `YYYY-MM-DD`.
     */
    public string $start_date {
        set {
            $this->assigning('start_date', $value);
            $this->start_date = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_includes_iof' => is_string($value) ? $this->amount_includes_iof = \StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

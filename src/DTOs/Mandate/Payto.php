<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_payto
 */
final class Payto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_type',
        'payment_schedule',
    ];

    protected const array VALIDATION = [
        'end_date' => [
            'maxLength' => 5000,
        ],
        'start_date' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount that will be collected. It is required when `amount_type` is `fixed`.
     */
    public ?int $amount;
    /**
     * The type of amount that will be collected. The amount charged must be exact or up to the value of `amount` param for `fixed` or `maximum` type respectively. Defaults to `maximum`.
     */
    public \StripeSDK\Enums\Mandate\Payto\AmountTypeEnum $amount_type;
    /**
     * Date, in YYYY-MM-DD format, after which payments will not be collected. Defaults to no end date.
     */
    public ?string $end_date {
        set {
            $this->assigning('end_date', $value);
            $this->end_date = $value;
        }
    }
    /**
     * The periodicity at which payments will be collected. Defaults to `adhoc`.
     */
    public \StripeSDK\Enums\Mandate\Payto\PaymentScheduleEnum $payment_schedule;
    /**
     * The number of payments that will be made during a payment period. Defaults to 1 except for when `payment_schedule` is `adhoc`. In that case, it defaults to no limit.
     */
    public ?int $payments_per_period;
    /**
     * The purpose for which payments are made. Has a default value based on your merchant category code.
     */
    public ?\StripeSDK\Enums\Mandate\Payto\PurposeEnum $purpose;
    /**
     * Date, in YYYY-MM-DD format, from which payments will be collected. Defaults to confirmation time.
     */
    public ?string $start_date {
        set {
            $this->assigning('start_date', $value);
            $this->start_date = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\Mandate\Payto\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'end_date' => $value === null || is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\Mandate\Payto\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'payments_per_period' => $value === null || is_int($value) ? $this->payments_per_period = $value : parent::assignMember($name, $value),
            'purpose' => $value === null || is_string($value) ? $this->purpose = $value === null ? null : \StripeSDK\Enums\Mandate\Payto\PurposeEnum::from($value) : parent::assignMember($name, $value),
            'start_date' => $value === null || is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

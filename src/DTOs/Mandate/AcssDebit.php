<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_acss_debit
 */
final class AcssDebit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_schedule',
        'transaction_type',
    ];

    protected const array VALIDATION = [
        'interval_description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * List of Stripe products where this mandate can be selected automatically.
     */
    public \StripeSDK\Collections\Mandate\AcssDebit\DefaultForCollection $default_for;
    /**
     * Description of the interval. Only required if the 'payment_schedule' parameter is 'interval' or 'combined'.
     */
    public ?string $interval_description {
        set {
            $this->assigning('interval_description', $value);
            $this->interval_description = $value;
        }
    }
    /**
     * Payment schedule for the mandate.
     */
    public \StripeSDK\Enums\Mandate\AcssDebit\PaymentScheduleEnum $payment_schedule;
    /**
     * Transaction type of the mandate.
     */
    public \StripeSDK\Enums\Mandate\AcssDebit\TransactionTypeEnum $transaction_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval_description' => $value === null || is_string($value) ? $this->interval_description = $value : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\Mandate\AcssDebit\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'transaction_type' => is_string($value) ? $this->transaction_type = \StripeSDK\Enums\Mandate\AcssDebit\TransactionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

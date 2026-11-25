<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_intent_payment_method_options_mandate_options_acss_debit
 */
final class IntentPaymentMethodOptionsMandateOptionsAcssDebit extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'custom_mandate_url' => [
            'maxLength' => 5000,
        ],
        'interval_description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A URL for custom mandate text
     */
    public string $custom_mandate_url {
        set {
            $this->assigning('custom_mandate_url', $value);
            $this->custom_mandate_url = $value;
        }
    }
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
    public ?\StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsAcssDebit\PaymentScheduleEnum $payment_schedule;
    /**
     * Transaction type of the mandate.
     */
    public ?\StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsAcssDebit\TransactionTypeEnum $transaction_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_mandate_url' => is_string($value) ? $this->custom_mandate_url = $value : parent::assignMember($name, $value),
            'interval_description' => $value === null || is_string($value) ? $this->interval_description = $value : parent::assignMember($name, $value),
            'payment_schedule' => $value === null || is_string($value) ? $this->payment_schedule = $value === null ? null : \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsAcssDebit\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'transaction_type' => $value === null || is_string($value) ? $this->transaction_type = $value === null ? null : \StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsAcssDebit\TransactionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

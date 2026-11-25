<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutAcssDebitMandateOptions
 */
final class AcssDebitMandateOptions extends \Dmorenof\SdkRuntime\DTO
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
     * List of Stripe products where this mandate can be selected automatically. Returned when the Session is in `setup` mode.
     */
    public \StripeSDK\Collections\Checkout\AcssDebitMandateOptions\DefaultForCollection $default_for;
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
    public ?\StripeSDK\Enums\Checkout\AcssDebitMandateOptions\PaymentScheduleEnum $payment_schedule;
    /**
     * Transaction type of the mandate.
     */
    public ?\StripeSDK\Enums\Checkout\AcssDebitMandateOptions\TransactionTypeEnum $transaction_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_mandate_url' => is_string($value) ? $this->custom_mandate_url = $value : parent::assignMember($name, $value),
            'interval_description' => $value === null || is_string($value) ? $this->interval_description = $value : parent::assignMember($name, $value),
            'payment_schedule' => $value === null || is_string($value) ? $this->payment_schedule = $value === null ? null : \StripeSDK\Enums\Checkout\AcssDebitMandateOptions\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'transaction_type' => $value === null || is_string($value) ? $this->transaction_type = $value === null ? null : \StripeSDK\Enums\Checkout\AcssDebitMandateOptions\TransactionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

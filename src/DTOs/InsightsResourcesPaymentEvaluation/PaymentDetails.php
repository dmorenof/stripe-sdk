<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Payment Detail
 *
 * Payment details attached to this payment evaluation.
 */
final class PaymentDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount intended to be collected by this payment. A positive integer representing how much to charge in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or [equivalent in charge currency](https://docs.stripe.com/currencies#minimum-and-maximum-charge-amounts). The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Details about the payment's customer presence and type.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\MoneyMovementDetails $money_movement_details;
    /**
     * Details about the payment method used for the payment.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\PaymentMethodDetails $payment_method_details;
    /**
     * Shipping details for the payment evaluation.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Shipping $shipping_details;
    /**
     * Payment statement descriptor.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'money_movement_details' => $value === null || $value instanceof \stdClass ? $this->money_movement_details = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\MoneyMovementDetails($value) : parent::assignMember($name, $value),
            'payment_method_details' => $value === null || $value instanceof \stdClass ? $this->payment_method_details = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\PaymentMethodDetails($value) : parent::assignMember($name, $value),
            'shipping_details' => $value === null || $value instanceof \stdClass ? $this->shipping_details = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Shipping($value) : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

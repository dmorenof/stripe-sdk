<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post;

/**
 * payment_details
 *
 * Details about the payment.
 */
final class PaymentDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'payment_method_details',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    /**
     * Format: currency
     */
    public string $currency;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MovementDetailsRequest $money_movement_details;
    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails\MethodDetailsRequest $payment_method_details;
    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails\ShippingDetailsRequest $shipping_details;
    public string $statement_descriptor {
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
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails;

/**
 * payment_method_details
 */
final class MethodDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_method',
    ];

    protected const array VALIDATION = [
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetails\PaymentMethodDetails\BillingDetailsRequest $billing_details;
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

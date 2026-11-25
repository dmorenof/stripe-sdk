<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post;

/**
 * payment_method_details
 *
 * Information about the Payment Method debited for this payment.
 */
final class MethodDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\PaymentMethodDetails\BillingDetailsRequest $billing_details;
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\PaymentMethodDetails\DetailsCustomRequest $custom;
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    public \StripeSDK\Enums\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\PaymentMethodDetails\DetailsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\PaymentMethodDetails\DetailsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

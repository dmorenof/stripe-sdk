<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\PaymentMethodDetails;

/**
 * billing_details
 */
final class BillingDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\PaymentMethodDetails\BillingDetails\DetailsAddressRequest $address;
    public string $email;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

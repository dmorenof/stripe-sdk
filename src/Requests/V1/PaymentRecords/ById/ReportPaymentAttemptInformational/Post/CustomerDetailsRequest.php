<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational\Post;

/**
 * customer_details
 *
 * Customer information for this payment.
 */
final class CustomerDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
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
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

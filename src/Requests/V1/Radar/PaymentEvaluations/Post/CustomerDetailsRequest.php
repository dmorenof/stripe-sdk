<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post;

/**
 * customer_details
 *
 * Details about the customer associated with the payment evaluation.
 */
final class CustomerDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
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
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
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
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

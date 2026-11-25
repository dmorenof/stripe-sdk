<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_paypal
 */
final class MethodPaypal extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'payer_email' => [
            'maxLength' => 5000,
        ],
        'payer_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Two-letter ISO code representing the buyer's country. Values are provided by PayPal directly (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Owner's email. Values are provided by PayPal directly
     * (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?string $payer_email {
        set {
            $this->assigning('payer_email', $value);
            $this->payer_email = $value;
        }
    }
    /**
     * PayPal account PayerID. This identifier uniquely identifies the PayPal customer.
     */
    public ?string $payer_id {
        set {
            $this->assigning('payer_id', $value);
            $this->payer_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'payer_email' => $value === null || is_string($value) ? $this->payer_email = $value : parent::assignMember($name, $value),
            'payer_id' => $value === null || is_string($value) ? $this->payer_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card_checks
 */
final class MethodDetailsCardChecks extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'address_line1_check' => [
            'maxLength' => 5000,
        ],
        'address_postal_code_check' => [
            'maxLength' => 5000,
        ],
        'cvc_check' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If a address line1 was provided, results of the check, one of `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?string $address_line1_check {
        set {
            $this->assigning('address_line1_check', $value);
            $this->address_line1_check = $value;
        }
    }
    /**
     * If a address postal code was provided, results of the check, one of `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?string $address_postal_code_check {
        set {
            $this->assigning('address_postal_code_check', $value);
            $this->address_postal_code_check = $value;
        }
    }
    /**
     * If a CVC was provided, results of the check, one of `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?string $cvc_check {
        set {
            $this->assigning('cvc_check', $value);
            $this->cvc_check = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1_check' => $value === null || is_string($value) ? $this->address_line1_check = $value : parent::assignMember($name, $value),
            'address_postal_code_check' => $value === null || is_string($value) ? $this->address_postal_code_check = $value : parent::assignMember($name, $value),
            'cvc_check' => $value === null || is_string($value) ? $this->cvc_check = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

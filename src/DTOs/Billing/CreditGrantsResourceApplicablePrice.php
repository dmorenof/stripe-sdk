<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceApplicablePrice
 */
final class CreditGrantsResourceApplicablePrice extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Unique identifier for the object.
     */
    public ?string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => $value === null || is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

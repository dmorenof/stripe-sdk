<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_attempt_payment_method_details_pix
 */
final class AttemptPaymentMethodDetailsPix extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fingerprint' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Uniquely identifies this particular Pix account. You can use this attribute to check whether two Pix accounts are the same.
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

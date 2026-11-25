<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionDisplayMultibancoDetails
 */
final class IntentNextActionDisplayMultibancoDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'entity' => [
            'maxLength' => 5000,
        ],
        'hosted_voucher_url' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Entity number associated with this Multibanco payment.
     */
    public ?string $entity {
        set {
            $this->assigning('entity', $value);
            $this->entity = $value;
        }
    }
    /**
     * The timestamp at which the Multibanco voucher expires.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * The URL for the hosted Multibanco voucher page, which allows customers to view a Multibanco voucher.
     */
    public ?string $hosted_voucher_url {
        set {
            $this->assigning('hosted_voucher_url', $value);
            $this->hosted_voucher_url = $value;
        }
    }
    /**
     * Reference number associated with this Multibanco payment.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entity' => $value === null || is_string($value) ? $this->entity = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'hosted_voucher_url' => $value === null || is_string($value) ? $this->hosted_voucher_url = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

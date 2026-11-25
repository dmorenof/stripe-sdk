<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_paynow
 */
final class MethodDetailsPaymentRecordPaynow extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'location' => [
            'maxLength' => 5000,
        ],
        'reader' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the [location](https://docs.stripe.com/api/terminal/locations) that this transaction's reader is assigned to.
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }
    /**
     * ID of the [reader](https://docs.stripe.com/api/terminal/readers) this transaction was made on.
     */
    public string $reader {
        set {
            $this->assigning('reader', $value);
            $this->reader = $value;
        }
    }
    /**
     * Reference number associated with this PayNow payment
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
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'reader' => is_string($value) ? $this->reader = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

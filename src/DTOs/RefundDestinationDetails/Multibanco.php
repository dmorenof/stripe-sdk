<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\RefundDestinationDetails;

/**
 * refund_destination_details_multibanco
 */
final class Multibanco extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
        'reference_status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The reference assigned to the refund.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Status of the reference on the refund. This can be `pending`, `available` or `unavailable`.
     */
    public ?string $reference_status {
        set {
            $this->assigning('reference_status', $value);
            $this->reference_status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'reference_status' => $value === null || is_string($value) ? $this->reference_status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

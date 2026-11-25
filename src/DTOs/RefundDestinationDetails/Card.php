<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\RefundDestinationDetails;

/**
 * refund_destination_details_card
 */
final class Card extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
        'reference_status' => [
            'maxLength' => 5000,
        ],
        'reference_type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Value of the reference number assigned to the refund.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Status of the reference number on the refund. This can be `pending`, `available` or `unavailable`.
     */
    public string $reference_status {
        set {
            $this->assigning('reference_status', $value);
            $this->reference_status = $value;
        }
    }
    /**
     * Type of the reference number assigned to the refund.
     */
    public string $reference_type {
        set {
            $this->assigning('reference_type', $value);
            $this->reference_type = $value;
        }
    }
    /**
     * The type of refund. This can be `refund`, `reversal`, or `pending`.
     */
    public \StripeSDK\Enums\RefundDestinationDetails\Card\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'reference_status' => is_string($value) ? $this->reference_status = $value : parent::assignMember($name, $value),
            'reference_type' => is_string($value) ? $this->reference_type = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\RefundDestinationDetails\Card\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

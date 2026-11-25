<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingDisputeServiceNotAsDescribedEvidence
 */
final class DisputeServiceNotAsDescribedEvidence extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'cancellation_reason' => [
            'maxLength' => 5000,
        ],
        'explanation' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Additional documentation supporting the dispute.
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeServiceNotAsDescribedEvidence\AdditionalDocumentationDTO $additional_documentation;
    /**
     * Date when order was canceled.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * Reason for canceling the order.
     */
    public ?string $cancellation_reason {
        set {
            $this->assigning('cancellation_reason', $value);
            $this->cancellation_reason = $value;
        }
    }
    /**
     * Explanation of why the cardholder is disputing this transaction.
     */
    public ?string $explanation {
        set {
            $this->assigning('explanation', $value);
            $this->explanation = $value;
        }
    }
    /**
     * Date when the product was received.
     * Format: unix-time
     */
    public ?int $received_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'cancellation_reason' => $value === null || is_string($value) ? $this->cancellation_reason = $value : parent::assignMember($name, $value),
            'explanation' => $value === null || is_string($value) ? $this->explanation = $value : parent::assignMember($name, $value),
            'received_at' => $value === null || is_int($value) ? $this->received_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingDisputeMerchandiseNotAsDescribedEvidence
 */
final class DisputeMerchandiseNotAsDescribedEvidence extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'explanation' => [
            'maxLength' => 5000,
        ],
        'return_description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Additional documentation supporting the dispute.
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeMerchandiseNotAsDescribedEvidence\AdditionalDocumentationDTO $additional_documentation;
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
    /**
     * Description of the cardholder's attempt to return the product.
     */
    public ?string $return_description {
        set {
            $this->assigning('return_description', $value);
            $this->return_description = $value;
        }
    }
    /**
     * Result of cardholder's attempt to return the product.
     */
    public ?\StripeSDK\Enums\Issuing\DisputeMerchandiseNotAsDescribedEvidence\ReturnStatusEnum $return_status;
    /**
     * Date when the product was returned or attempted to be returned.
     * Format: unix-time
     */
    public ?int $returned_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'explanation' => $value === null || is_string($value) ? $this->explanation = $value : parent::assignMember($name, $value),
            'received_at' => $value === null || is_int($value) ? $this->received_at = $value : parent::assignMember($name, $value),
            'return_description' => $value === null || is_string($value) ? $this->return_description = $value : parent::assignMember($name, $value),
            'return_status' => $value === null || is_string($value) ? $this->return_status = $value === null ? null : \StripeSDK\Enums\Issuing\DisputeMerchandiseNotAsDescribedEvidence\ReturnStatusEnum::from($value) : parent::assignMember($name, $value),
            'returned_at' => $value === null || is_int($value) ? $this->returned_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

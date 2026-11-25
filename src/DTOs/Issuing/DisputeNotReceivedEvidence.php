<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingDisputeNotReceivedEvidence
 */
final class DisputeNotReceivedEvidence extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'explanation' => [
            'maxLength' => 5000,
        ],
        'product_description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Additional documentation supporting the dispute.
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeNotReceivedEvidence\AdditionalDocumentationDTO $additional_documentation;
    /**
     * Date when the cardholder expected to receive the product.
     * Format: unix-time
     */
    public ?int $expected_at;
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
     * Description of the merchandise or service that was purchased.
     */
    public ?string $product_description {
        set {
            $this->assigning('product_description', $value);
            $this->product_description = $value;
        }
    }
    /**
     * Whether the product was a merchandise or service.
     */
    public ?\StripeSDK\Enums\Issuing\DisputeNotReceivedEvidence\ProductTypeEnum $product_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expected_at' => $value === null || is_int($value) ? $this->expected_at = $value : parent::assignMember($name, $value),
            'explanation' => $value === null || is_string($value) ? $this->explanation = $value : parent::assignMember($name, $value),
            'product_description' => $value === null || is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'product_type' => $value === null || is_string($value) ? $this->product_type = $value === null ? null : \StripeSDK\Enums\Issuing\DisputeNotReceivedEvidence\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

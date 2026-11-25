<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingDisputeCanceledEvidence
 */
final class DisputeCanceledEvidence extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'cancellation_reason' => [
            'maxLength' => 5000,
        ],
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
    public ?\StripeSDK\DTOs\Issuing\DisputeCanceledEvidence\AdditionalDocumentationDTO $additional_documentation;
    /**
     * Date when order was canceled.
     * Format: unix-time
     */
    public ?int $canceled_at;
    /**
     * Whether the cardholder was provided with a cancellation policy.
     */
    public ?bool $cancellation_policy_provided;
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
    public ?\StripeSDK\Enums\Issuing\DisputeCanceledEvidence\ProductTypeEnum $product_type;
    /**
     * Result of cardholder's attempt to return the product.
     */
    public ?\StripeSDK\Enums\Issuing\DisputeCanceledEvidence\ReturnStatusEnum $return_status;
    /**
     * Date when the product was returned or attempted to be returned.
     * Format: unix-time
     */
    public ?int $returned_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canceled_at' => $value === null || is_int($value) ? $this->canceled_at = $value : parent::assignMember($name, $value),
            'cancellation_policy_provided' => $value === null || is_bool($value) ? $this->cancellation_policy_provided = $value : parent::assignMember($name, $value),
            'cancellation_reason' => $value === null || is_string($value) ? $this->cancellation_reason = $value : parent::assignMember($name, $value),
            'expected_at' => $value === null || is_int($value) ? $this->expected_at = $value : parent::assignMember($name, $value),
            'explanation' => $value === null || is_string($value) ? $this->explanation = $value : parent::assignMember($name, $value),
            'product_description' => $value === null || is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'product_type' => $value === null || is_string($value) ? $this->product_type = $value === null ? null : \StripeSDK\Enums\Issuing\DisputeCanceledEvidence\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            'return_status' => $value === null || is_string($value) ? $this->return_status = $value === null ? null : \StripeSDK\Enums\Issuing\DisputeCanceledEvidence\ReturnStatusEnum::from($value) : parent::assignMember($name, $value),
            'returned_at' => $value === null || is_int($value) ? $this->returned_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

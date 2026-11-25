<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingDisputeDuplicateEvidence
 */
final class DisputeDuplicateEvidence extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'explanation' => [
            'maxLength' => 5000,
        ],
        'original_transaction' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Additional documentation supporting the dispute.
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeDuplicateEvidence\AdditionalDocumentationDTO $additional_documentation;
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Copy of the card statement showing that the product had already been paid for.
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeDuplicateEvidence\CardStatementDTO $card_statement;
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Copy of the receipt showing that the product had been paid for in cash.
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeDuplicateEvidence\CashReceiptDTO $cash_receipt;
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Image of the front and back of the check that was used to pay for the product.
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeDuplicateEvidence\CheckImageDTO $check_image;
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
     * Transaction (e.g., ipi_...) that the disputed transaction is a duplicate of. Of the two or more transactions that are copies of each other, this is original undisputed one.
     */
    public ?string $original_transaction {
        set {
            $this->assigning('original_transaction', $value);
            $this->original_transaction = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'explanation' => $value === null || is_string($value) ? $this->explanation = $value : parent::assignMember($name, $value),
            'original_transaction' => $value === null || is_string($value) ? $this->original_transaction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

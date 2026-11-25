<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * duplicate
 */
final class DuplicateVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'original_transaction' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\EvidenceDuplicateRequestVariant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\EvidenceDuplicateRequestVariant1\CardStatementRequest $card_statement;
    public \StripeSDK\Requests\EvidenceDuplicateRequestVariant1\CashReceiptRequest $cash_receipt;
    public \StripeSDK\Requests\EvidenceDuplicateRequestVariant1\CheckImageRequest $check_image;
    public \StripeSDK\Requests\EvidenceDuplicateRequestVariant1\EvidenceDuplicateRequestVariant1ExplanationRequest $explanation;
    public string $original_transaction {
        set {
            $this->assigning('original_transaction', $value);
            $this->original_transaction = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'original_transaction' => is_string($value) ? $this->original_transaction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

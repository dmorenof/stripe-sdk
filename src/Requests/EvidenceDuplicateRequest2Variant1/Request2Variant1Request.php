<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EvidenceDuplicateRequest2Variant1;

/**
 * duplicate
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'original_transaction' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\EvidenceDuplicateRequest2Variant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\EvidenceDuplicateRequest2Variant1\CardStatementRequest $card_statement;
    public \StripeSDK\Requests\EvidenceDuplicateRequest2Variant1\CashReceiptRequest $cash_receipt;
    public \StripeSDK\Requests\EvidenceDuplicateRequest2Variant1\CheckImageRequest $check_image;
    public \StripeSDK\Requests\EvidenceDuplicateRequest2Variant1\EvidenceDuplicateRequest2Variant1ExplanationRequest $explanation;
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

<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LegalEntity;

/**
 * LegalEntityPersonVerificationDocument
 */
final class PersonVerificationDocument extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'details' => [
            'maxLength' => 5000,
        ],
        'details_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The back of an ID returned by a [file upload](https://docs.stripe.com/api#create_file) with a `purpose` value of `identity_document`.
     */
    public ?\StripeSDK\DTOs\LegalEntity\PersonVerificationDocument\BackDTO $back;
    /**
     * A user-displayable string describing the verification state of this document. For example, if a document is uploaded and the picture is too fuzzy, this may say "Identity document is too unclear to read".
     */
    public ?string $details {
        set {
            $this->assigning('details', $value);
            $this->details = $value;
        }
    }
    /**
     * One of `document_corrupt`, `document_country_not_supported`, `document_expired`, `document_failed_copy`, `document_failed_other`, `document_failed_test_mode`, `document_fraudulent`, `document_failed_greyscale`, `document_incomplete`, `document_invalid`, `document_manipulated`, `document_missing_back`, `document_missing_front`, `document_not_readable`, `document_not_uploaded`, `document_photo_mismatch`, `document_too_large`, or `document_type_not_supported`. A machine-readable code specifying the verification state for this document.
     */
    public ?string $details_code {
        set {
            $this->assigning('details_code', $value);
            $this->details_code = $value;
        }
    }
    /**
     * The front of an ID returned by a [file upload](https://docs.stripe.com/api#create_file) with a `purpose` value of `identity_document`.
     */
    public ?\StripeSDK\DTOs\LegalEntity\PersonVerificationDocument\FrontDTO $front;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'details' => $value === null || is_string($value) ? $this->details = $value : parent::assignMember($name, $value),
            'details_code' => $value === null || is_string($value) ? $this->details_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LegalEntity;

/**
 * LegalEntityCompanyVerificationDocument
 */
final class CompanyVerificationDocument extends \Dmorenof\SdkRuntime\DTO
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
     * The back of a document returned by a [file upload](https://docs.stripe.com/api#create_file) with a `purpose` value of `additional_verification`. Note that `additional_verification` files are [not downloadable](/file-upload#uploading-a-file).
     */
    public ?\StripeSDK\DTOs\LegalEntity\CompanyVerificationDocument\BackDTO $back;
    /**
     * A user-displayable string describing the verification state of this document.
     */
    public ?string $details {
        set {
            $this->assigning('details', $value);
            $this->details = $value;
        }
    }
    /**
     * One of `document_corrupt`, `document_expired`, `document_failed_copy`, `document_failed_greyscale`, `document_failed_other`, `document_failed_test_mode`, `document_fraudulent`, `document_incomplete`, `document_invalid`, `document_manipulated`, `document_not_readable`, `document_not_uploaded`, `document_type_not_supported`, or `document_too_large`. A machine-readable code specifying the verification state for this document.
     */
    public ?string $details_code {
        set {
            $this->assigning('details_code', $value);
            $this->details_code = $value;
        }
    }
    /**
     * The front of a document returned by a [file upload](https://docs.stripe.com/api#create_file) with a `purpose` value of `additional_verification`. Note that `additional_verification` files are [not downloadable](/file-upload#uploading-a-file).
     */
    public ?\StripeSDK\DTOs\LegalEntity\CompanyVerificationDocument\FrontDTO $front;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'details' => $value === null || is_string($value) ? $this->details = $value : parent::assignMember($name, $value),
            'details_code' => $value === null || is_string($value) ? $this->details_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

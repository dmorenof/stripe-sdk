<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LegalEntity;

/**
 * LegalEntityPersonVerification
 */
final class PersonVerification extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'details' => [
            'maxLength' => 5000,
        ],
        'details_code' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A document showing address, either a passport, local ID card, or utility bill from a well-known utility company.
     */
    public ?\StripeSDK\DTOs\LegalEntity\PersonVerificationDocument $additional_document;
    /**
     * A user-displayable string describing the verification state for the person. For example, this may say "Provided identity information could not be verified".
     */
    public ?string $details {
        set {
            $this->assigning('details', $value);
            $this->details = $value;
        }
    }
    /**
     * One of `document_address_mismatch`, `document_dob_mismatch`, `document_duplicate_type`, `document_id_number_mismatch`, `document_name_mismatch`, `document_nationality_mismatch`, `failed_keyed_identity`, or `failed_other`. A machine-readable code specifying the verification state for the person.
     */
    public ?string $details_code {
        set {
            $this->assigning('details_code', $value);
            $this->details_code = $value;
        }
    }
    public \StripeSDK\DTOs\LegalEntity\PersonVerificationDocument $document;
    /**
     * The state of verification for the person. Possible values are `unverified`, `pending`, or `verified`. Please refer [guide](https://docs.stripe.com/connect/handling-api-verification) to handle verification updates.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additional_document' => $value === null || $value instanceof \stdClass ? $this->additional_document = $value === null ? null : new \StripeSDK\DTOs\LegalEntity\PersonVerificationDocument($value) : parent::assignMember($name, $value),
            'details' => $value === null || is_string($value) ? $this->details = $value : parent::assignMember($name, $value),
            'details_code' => $value === null || is_string($value) ? $this->details_code = $value : parent::assignMember($name, $value),
            'document' => $value instanceof \stdClass ? $this->document = new \StripeSDK\DTOs\LegalEntity\PersonVerificationDocument($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

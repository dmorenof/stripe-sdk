<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * DocumentCheckResult
 *
 * Result from a document check
 */
final class DocumentReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'first_name' => [
            'maxLength' => 5000,
        ],
        'issuing_country' => [
            'maxLength' => 5000,
        ],
        'last_name' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
        'unparsed_place_of_birth' => [
            'maxLength' => 5000,
        ],
        'unparsed_sex' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Address as it appears in the document.
     */
    public ?\StripeSDK\DTOs\Address $address;
    /**
     * Date of birth as it appears in the document.
     */
    public ?\StripeSDK\DTOs\Gelato\DataDocumentReportDateOfBirth $dob;
    /**
     * Details on the verification error. Present when status is `unverified`.
     */
    public ?\StripeSDK\DTOs\Gelato\DocumentReportError $error;
    /**
     * Expiration date of the document.
     */
    public ?\StripeSDK\DTOs\Gelato\DataDocumentReportExpirationDate $expiration_date;
    /**
     * Array of [File](https://docs.stripe.com/api/files) ids containing images for this document.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $files;
    /**
     * First name as it appears in the document.
     */
    public ?string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * Issued date of the document.
     */
    public ?\StripeSDK\DTOs\Gelato\DataDocumentReportIssuedDate $issued_date;
    /**
     * Issuing country of the document.
     */
    public ?string $issuing_country {
        set {
            $this->assigning('issuing_country', $value);
            $this->issuing_country = $value;
        }
    }
    /**
     * Last name as it appears in the document.
     */
    public ?string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * Document ID number.
     */
    public ?string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }
    /**
     * Sex of the person in the document.
     */
    public ?\StripeSDK\Enums\Gelato\DocumentReport\SexEnum $sex;
    /**
     * Status of this `document` check.
     */
    public \StripeSDK\Enums\Gelato\DocumentReport\StatusEnum $status;
    /**
     * Type of the document.
     */
    public ?\StripeSDK\Enums\Gelato\DocumentReport\TypeEnum $type;
    /**
     * Place of birth as it appears in the document.
     */
    public ?string $unparsed_place_of_birth {
        set {
            $this->assigning('unparsed_place_of_birth', $value);
            $this->unparsed_place_of_birth = $value;
        }
    }
    /**
     * Sex as it appears in the document.
     */
    public ?string $unparsed_sex {
        set {
            $this->assigning('unparsed_sex', $value);
            $this->unparsed_sex = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'dob' => $value === null || $value instanceof \stdClass ? $this->dob = $value === null ? null : new \StripeSDK\DTOs\Gelato\DataDocumentReportDateOfBirth($value) : parent::assignMember($name, $value),
            'error' => $value === null || $value instanceof \stdClass ? $this->error = $value === null ? null : new \StripeSDK\DTOs\Gelato\DocumentReportError($value) : parent::assignMember($name, $value),
            'expiration_date' => $value === null || $value instanceof \stdClass ? $this->expiration_date = $value === null ? null : new \StripeSDK\DTOs\Gelato\DataDocumentReportExpirationDate($value) : parent::assignMember($name, $value),
            'files' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->files = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'first_name' => $value === null || is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'issued_date' => $value === null || $value instanceof \stdClass ? $this->issued_date = $value === null ? null : new \StripeSDK\DTOs\Gelato\DataDocumentReportIssuedDate($value) : parent::assignMember($name, $value),
            'issuing_country' => $value === null || is_string($value) ? $this->issuing_country = $value : parent::assignMember($name, $value),
            'last_name' => $value === null || is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'number' => $value === null || is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'sex' => $value === null || is_string($value) ? $this->sex = $value === null ? null : \StripeSDK\Enums\Gelato\DocumentReport\SexEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Gelato\DocumentReport\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Gelato\DocumentReport\TypeEnum::from($value) : parent::assignMember($name, $value),
            'unparsed_place_of_birth' => $value === null || is_string($value) ? $this->unparsed_place_of_birth = $value : parent::assignMember($name, $value),
            'unparsed_sex' => $value === null || is_string($value) ? $this->unparsed_sex = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

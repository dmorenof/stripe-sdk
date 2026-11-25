<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * IdNumberCheckResult
 *
 * Result from an id_number check
 */
final class IdNumberReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'first_name' => [
            'maxLength' => 5000,
        ],
        'id_number' => [
            'maxLength' => 5000,
        ],
        'last_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Date of birth.
     */
    public ?\StripeSDK\DTOs\Gelato\DataIdNumberReportDate $dob;
    /**
     * Details on the verification error. Present when status is `unverified`.
     */
    public ?\StripeSDK\DTOs\Gelato\IdNumberReportError $error;
    /**
     * First name.
     */
    public ?string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * ID number. When `id_number_type` is `us_ssn`, only the last 4 digits are present.
     */
    public ?string $id_number {
        set {
            $this->assigning('id_number', $value);
            $this->id_number = $value;
        }
    }
    /**
     * Type of ID number.
     */
    public ?\StripeSDK\Enums\Gelato\IdNumberReport\NumberTypeEnum $id_number_type;
    /**
     * Last name.
     */
    public ?string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * Status of this `id_number` check.
     */
    public \StripeSDK\Enums\Gelato\IdNumberReport\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dob' => $value === null || $value instanceof \stdClass ? $this->dob = $value === null ? null : new \StripeSDK\DTOs\Gelato\DataIdNumberReportDate($value) : parent::assignMember($name, $value),
            'error' => $value === null || $value instanceof \stdClass ? $this->error = $value === null ? null : new \StripeSDK\DTOs\Gelato\IdNumberReportError($value) : parent::assignMember($name, $value),
            'first_name' => $value === null || is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'id_number' => $value === null || is_string($value) ? $this->id_number = $value : parent::assignMember($name, $value),
            'id_number_type' => $value === null || is_string($value) ? $this->id_number_type = $value === null ? null : \StripeSDK\Enums\Gelato\IdNumberReport\NumberTypeEnum::from($value) : parent::assignMember($name, $value),
            'last_name' => $value === null || is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Gelato\IdNumberReport\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

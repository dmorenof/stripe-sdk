<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoVerifiedOutputs
 */
final class VerifiedOutputs extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
        'first_name' => [
            'maxLength' => 5000,
        ],
        'id_number' => [
            'maxLength' => 5000,
        ],
        'last_name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
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
     * The user's verified address.
     */
    public ?\StripeSDK\DTOs\Address $address;
    /**
     * The user’s verified date of birth.
     */
    public ?\StripeSDK\DTOs\Gelato\DataVerifiedOutputsDate $dob;
    /**
     * The user's verified email address
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * The user's verified first name.
     */
    public ?string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * The user's verified id number.
     */
    public ?string $id_number {
        set {
            $this->assigning('id_number', $value);
            $this->id_number = $value;
        }
    }
    /**
     * The user's verified id number type.
     */
    public ?\StripeSDK\Enums\Gelato\VerifiedOutputs\NumberTypeEnum $id_number_type;
    /**
     * The user's verified last name.
     */
    public ?string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * The user's verified phone number
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * The user's verified sex.
     */
    public ?\StripeSDK\Enums\Gelato\VerifiedOutputs\SexEnum $sex;
    /**
     * The user's verified place of birth as it appears in the document.
     */
    public ?string $unparsed_place_of_birth {
        set {
            $this->assigning('unparsed_place_of_birth', $value);
            $this->unparsed_place_of_birth = $value;
        }
    }
    /**
     * The user's verified sex as it appears in the document.
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
            'dob' => $value === null || $value instanceof \stdClass ? $this->dob = $value === null ? null : new \StripeSDK\DTOs\Gelato\DataVerifiedOutputsDate($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => $value === null || is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'id_number' => $value === null || is_string($value) ? $this->id_number = $value : parent::assignMember($name, $value),
            'id_number_type' => $value === null || is_string($value) ? $this->id_number_type = $value === null ? null : \StripeSDK\Enums\Gelato\VerifiedOutputs\NumberTypeEnum::from($value) : parent::assignMember($name, $value),
            'last_name' => $value === null || is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'sex' => $value === null || is_string($value) ? $this->sex = $value === null ? null : \StripeSDK\Enums\Gelato\VerifiedOutputs\SexEnum::from($value) : parent::assignMember($name, $value),
            'unparsed_place_of_birth' => $value === null || is_string($value) ? $this->unparsed_place_of_birth = $value : parent::assignMember($name, $value),
            'unparsed_sex' => $value === null || is_string($value) ? $this->unparsed_sex = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

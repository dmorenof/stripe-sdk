<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceOwner
 */
final class Owner extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
        'verified_email' => [
            'maxLength' => 5000,
        ],
        'verified_name' => [
            'maxLength' => 5000,
        ],
        'verified_phone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Owner's address.
     */
    public ?\StripeSDK\DTOs\Address $address;
    /**
     * Owner's email address.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Owner's full name.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Owner's phone number (including extension).
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * Verified owner's address. Verified values are verified or provided by the payment method directly (and if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?\StripeSDK\DTOs\Address $verified_address;
    /**
     * Verified owner's email address. Verified values are verified or provided by the payment method directly (and if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?string $verified_email {
        set {
            $this->assigning('verified_email', $value);
            $this->verified_email = $value;
        }
    }
    /**
     * Verified owner's full name. Verified values are verified or provided by the payment method directly (and if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?string $verified_name {
        set {
            $this->assigning('verified_name', $value);
            $this->verified_name = $value;
        }
    }
    /**
     * Verified owner's phone number (including extension). Verified values are verified or provided by the payment method directly (and if supported) at the time of authorization or settlement. They cannot be set or mutated.
     */
    public ?string $verified_phone {
        set {
            $this->assigning('verified_phone', $value);
            $this->verified_phone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'verified_address' => $value === null || $value instanceof \stdClass ? $this->verified_address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'verified_email' => $value === null || is_string($value) ? $this->verified_email = $value : parent::assignMember($name, $value),
            'verified_name' => $value === null || is_string($value) ? $this->verified_name = $value : parent::assignMember($name, $value),
            'verified_phone' => $value === null || is_string($value) ? $this->verified_phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

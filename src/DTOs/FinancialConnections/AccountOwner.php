<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FinancialConnections;

/**
 * Account Owner
 *
 * Describes an owner of an account.
 */
final class AccountOwner extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
        'object_',
        'ownership',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'ownership' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
        'raw_address' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The email address of the owner.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The full name of the owner.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\FinancialConnections\AccountOwner\ObjectEnum $object_;
    /**
     * The ownership object that this owner belongs to.
     */
    public string $ownership {
        set {
            $this->assigning('ownership', $value);
            $this->ownership = $value;
        }
    }
    /**
     * The raw phone number of the owner.
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * The raw physical address of the owner.
     */
    public ?string $raw_address {
        set {
            $this->assigning('raw_address', $value);
            $this->raw_address = $value;
        }
    }
    /**
     * The timestamp of the refresh that updated this owner.
     * Format: unix-time
     */
    public ?int $refreshed_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\FinancialConnections\AccountOwner\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'ownership' => is_string($value) ? $this->ownership = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'raw_address' => $value === null || is_string($value) ? $this->raw_address = $value : parent::assignMember($name, $value),
            'refreshed_at' => $value === null || is_int($value) ? $this->refreshed_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

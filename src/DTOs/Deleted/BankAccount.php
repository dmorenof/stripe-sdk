<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Deleted;

/**
 * DeletedBankAccount
 */
final class BankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'deleted',
        'id',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
        'deleted' => [
            'jsonSchema' => '{"enum":[true]}',
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/payouts) paid out to the bank account.
     */
    public ?string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * Always true for a deleted object
     */
    public bool $deleted {
        set {
            $this->assigning('deleted', $value);
            $this->deleted = $value;
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
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Deleted\BankAccount\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'deleted' => is_bool($value) ? $this->deleted = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Deleted\BankAccount\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

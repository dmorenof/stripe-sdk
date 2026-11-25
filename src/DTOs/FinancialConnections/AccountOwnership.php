<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FinancialConnections;

/**
 * Account Ownership
 *
 * Describes a snapshot of the owners of an account at a particular point in time.
 */
final class AccountOwnership extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'object_',
        'owners',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
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
    public \StripeSDK\Enums\FinancialConnections\AccountOwnership\ObjectEnum $object_;
    /**
     * A paginated list of owners for this account.
     */
    public \StripeSDK\DTOs\FinancialConnections\AccountOwnership\OwnersDTO $owners;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\FinancialConnections\AccountOwnership\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Credit Balance Transaction
 *
 * A credit balance transaction is a resource representing a transaction (either a credit or a debit) against an existing credit grant.
 */
final class CreditBalanceTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'credit_grant',
        'effective_at',
        'id',
        'livemode',
        'object_',
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
     * Credit details for this credit balance transaction. Only present if type is `credit`.
     */
    public ?\StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceCredit $credit;
    /**
     * The credit grant associated with this credit balance transaction.
     */
    public \StripeSDK\DTOs\Billing\CreditBalanceTransaction\CreditGrantDTO $credit_grant;
    /**
     * Debit details for this credit balance transaction. Only present if type is `debit`.
     */
    public ?\StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceDebit $debit;
    /**
     * The effective time of this credit balance transaction.
     * Format: unix-time
     */
    public int $effective_at;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Billing\CreditBalanceTransaction\ObjectEnum $object_;
    /**
     * ID of the test clock this credit balance transaction belongs to.
     */
    public ?\StripeSDK\DTOs\Billing\CreditBalanceTransaction\TestClockDTO $test_clock;
    /**
     * The type of credit balance transaction (credit or debit).
     */
    public ?\StripeSDK\Enums\Billing\CreditBalanceTransaction\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'credit' => $value === null || $value instanceof \stdClass ? $this->credit = $value === null ? null : new \StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceCredit($value) : parent::assignMember($name, $value),
            'debit' => $value === null || $value instanceof \stdClass ? $this->debit = $value === null ? null : new \StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceDebit($value) : parent::assignMember($name, $value),
            'effective_at' => is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\CreditBalanceTransaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Billing\CreditBalanceTransaction\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

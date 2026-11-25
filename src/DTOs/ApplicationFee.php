<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * PlatformFee
 */
final class ApplicationFee extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'amount',
        'amount_refunded',
        'application',
        'charge',
        'created',
        'currency',
        'id',
        'livemode',
        'object_',
        'refunded',
        'refunds',
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
     * ID of the Stripe account this fee was taken from.
     */
    public \StripeSDK\DTOs\ApplicationFee\AccountDTO $account;
    /**
     * Amount earned, in cents (or local equivalent).
     */
    public int $amount;
    /**
     * Amount in cents (or local equivalent) refunded (can be less than the amount attribute on the fee if a partial refund was issued)
     */
    public int $amount_refunded;
    /**
     * ID of the Connect application that earned the fee.
     */
    public \StripeSDK\DTOs\ApplicationFee\ApplicationDTO $application;
    /**
     * Balance transaction that describes the impact of this collected application fee on your account balance (not including refunds).
     */
    public ?\StripeSDK\DTOs\ApplicationFee\BalanceTransactionDTO $balance_transaction;
    /**
     * ID of the charge that the application fee was taken from.
     */
    public \StripeSDK\DTOs\ApplicationFee\ChargeDTO $charge;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Polymorphic source of the application fee. Includes the ID of the object the application fee was created from.
     */
    public ?\StripeSDK\DTOs\PlatformEarningFeeSource $fee_source;
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
    public \StripeSDK\Enums\ApplicationFee\ObjectEnum $object_;
    /**
     * ID of the corresponding charge on the platform account, if this fee was the result of a charge using the `destination` parameter.
     */
    public ?\StripeSDK\DTOs\ApplicationFee\OriginatingTransactionDTO $originating_transaction;
    /**
     * Whether the fee has been fully refunded. If the fee is only partially refunded, this attribute will still be false.
     */
    public bool $refunded;
    /**
     * A list of refunds that have been applied to the fee.
     */
    public \StripeSDK\DTOs\ApplicationFee\RefundsDTO $refunds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_refunded' => is_int($value) ? $this->amount_refunded = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'fee_source' => $value === null || $value instanceof \stdClass ? $this->fee_source = $value === null ? null : new \StripeSDK\DTOs\PlatformEarningFeeSource($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ApplicationFee\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'refunded' => is_bool($value) ? $this->refunded = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

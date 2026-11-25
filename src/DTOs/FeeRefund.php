<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Application Fee Refund
 *
 * `Application Fee Refund` objects allow you to refund an application fee that
 * has previously been created but not yet refunded. Funds will be refunded to
 * the Stripe account from which the fee was originally collected.
 *
 * Related guide: [Refunding application fees](https://docs.stripe.com/connect/destination-charges#refunding-app-fee)
 */
final class FeeRefund extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'fee',
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
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount, in cents (or local equivalent).
     */
    public int $amount;
    /**
     * Balance transaction that describes the impact on your account balance.
     */
    public ?\StripeSDK\DTOs\FeeRefund\BalanceTransactionDTO $balance_transaction;
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
     * ID of the application fee that was refunded.
     */
    public \StripeSDK\DTOs\FeeRefund\FeeDTO $fee;
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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\FeeRefund\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\FeeRefund\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\FeeRefund\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

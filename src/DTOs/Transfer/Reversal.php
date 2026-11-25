<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Transfer;

/**
 * Transfer Reversal
 *
 * [Stripe Connect](https://docs.stripe.com/connect) platforms can reverse transfers made to a
 * connected account, either entirely or partially, and can also specify whether
 * to refund any related application fees. Transfer reversals add to the
 * platform's balance and subtract from the destination account's balance.
 *
 * Reversing a transfer that was made for a [destination
 * charge](/docs/connect/destination-charges) is allowed only up to the amount of
 * the charge. It is possible to reverse a
 * [transfer_group](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-options)
 * transfer only if the destination account has enough balance to cover the
 * reversal.
 *
 * Related guide: [Reverse transfers](https://docs.stripe.com/connect/separate-charges-and-transfers#reverse-transfers)
 */
final class Reversal extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'id',
        'object_',
        'transfer',
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
    public ?\StripeSDK\DTOs\Transfer\Reversal\BalanceTransactionDTO $balance_transaction;
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
     * Linked payment refund for the transfer reversal.
     */
    public ?\StripeSDK\DTOs\Transfer\Reversal\PaymentRefundDTO $destination_payment_refund;
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
    public ?\StripeSDK\DTOs\Transfer\Reversal\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Transfer\Reversal\ObjectEnum $object_;
    /**
     * ID of the refund responsible for the transfer reversal.
     */
    public ?\StripeSDK\DTOs\Transfer\Reversal\SourceRefundDTO $source_refund;
    /**
     * ID of the transfer that was reversed.
     */
    public \StripeSDK\DTOs\Transfer\Reversal\TransferDTO $transfer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Transfer\Reversal\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

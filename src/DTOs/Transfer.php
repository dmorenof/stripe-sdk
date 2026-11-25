<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Transfer
 *
 * A `Transfer` object is created when you move funds between Stripe accounts as
 * part of Connect.
 *
 * Before April 6, 2017, transfers also represented movement of funds from a
 * Stripe account to a card or bank account. This behavior has since been split
 * out into a [Payout](https://docs.stripe.com/api#payout_object) object, with corresponding payout endpoints. For more
 * information, read about the
 * [transfer/payout split](https://docs.stripe.com/transfer-payout-split).
 *
 * Related guide: [Creating separate charges and transfers](https://docs.stripe.com/connect/separate-charges-and-transfers)
 */
final class Transfer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_reversed',
        'created',
        'currency',
        'id',
        'livemode',
        'metadata',
        'object_',
        'reversals',
        'reversed',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'source_type' => [
            'maxLength' => 5000,
        ],
        'transfer_group' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount in cents (or local equivalent) to be transferred.
     */
    public int $amount;
    /**
     * Amount in cents (or local equivalent) reversed (can be less than the amount attribute on the transfer if a partial reversal was issued).
     */
    public int $amount_reversed;
    /**
     * Balance transaction that describes the impact of this transfer on your account balance.
     */
    public ?\StripeSDK\DTOs\Transfer\BalanceTransactionDTO $balance_transaction;
    /**
     * Time that this record of the transfer was first created.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * ID of the Stripe account the transfer was sent to.
     */
    public ?\StripeSDK\DTOs\Transfer\DestinationDTO $destination;
    /**
     * If the destination is a Stripe account, this will be the ID of the payment that the destination account received for the transfer.
     */
    public \StripeSDK\DTOs\Transfer\DestinationPaymentDTO $destination_payment;
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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Transfer\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Transfer\ObjectEnum $object_;
    /**
     * A list of reversals that have been applied to the transfer.
     */
    public \StripeSDK\DTOs\Transfer\ReversalsDTO $reversals;
    /**
     * Whether the transfer has been fully reversed. If the transfer is only partially reversed, this attribute will still be false.
     */
    public bool $reversed;
    /**
     * ID of the charge that was used to fund the transfer. If null, the transfer was funded from the available balance.
     */
    public ?\StripeSDK\DTOs\Transfer\SourceTransactionDTO $source_transaction;
    /**
     * The source balance this transfer came from. One of `card`, `fpx`, or `bank_account`.
     */
    public string $source_type {
        set {
            $this->assigning('source_type', $value);
            $this->source_type = $value;
        }
    }
    /**
     * A string that identifies this transaction as part of a group. See the [Connect documentation](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-options) for details.
     */
    public ?string $transfer_group {
        set {
            $this->assigning('transfer_group', $value);
            $this->transfer_group = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_reversed' => is_int($value) ? $this->amount_reversed = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Transfer\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'reversed' => is_bool($value) ? $this->reversed = $value : parent::assignMember($name, $value),
            'source_type' => is_string($value) ? $this->source_type = $value : parent::assignMember($name, $value),
            'transfer_group' => $value === null || is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

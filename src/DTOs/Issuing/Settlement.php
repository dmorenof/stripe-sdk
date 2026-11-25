<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Settlement
 *
 * When a non-stripe BIN is used, any use of an [issued card](https://docs.stripe.com/issuing) must be settled directly with the card network. The net amount owed is represented by an Issuing `Settlement` object.
 */
final class Settlement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bin',
        'clearing_date',
        'created',
        'currency',
        'id',
        'interchange_fees_amount',
        'livemode',
        'metadata',
        'net_total_amount',
        'network',
        'network_fees_amount',
        'network_settlement_identifier',
        'object_',
        'settlement_service',
        'status',
        'transaction_amount',
        'transaction_count',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'bin' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'network_settlement_identifier' => [
            'maxLength' => 5000,
        ],
        'settlement_service' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Bank Identification Number reflecting this settlement record.
     */
    public string $bin {
        set {
            $this->assigning('bin', $value);
            $this->bin = $value;
        }
    }
    /**
     * The date that the transactions are cleared and posted to user's accounts.
     * Format: unix-time
     */
    public int $clearing_date;
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
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The total interchange received as reimbursement for the transactions.
     */
    public int $interchange_fees_amount;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Issuing\Settlement\MetadataMap $metadata;
    /**
     * The total net amount required to settle with the network.
     */
    public int $net_total_amount;
    /**
     * The card network for this settlement report. One of ["visa", "maestro", "mastercard"]
     */
    public \StripeSDK\Enums\Issuing\Settlement\NetworkEnum $network;
    /**
     * The total amount of fees owed to the network.
     */
    public int $network_fees_amount;
    /**
     * The Settlement Identification Number assigned by the network.
     */
    public string $network_settlement_identifier {
        set {
            $this->assigning('network_settlement_identifier', $value);
            $this->network_settlement_identifier = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Issuing\Settlement\ObjectEnum $object_;
    /**
     * One of `international` or `uk_national_net`.
     */
    public string $settlement_service {
        set {
            $this->assigning('settlement_service', $value);
            $this->settlement_service = $value;
        }
    }
    /**
     * The current processing status of this settlement.
     */
    public \StripeSDK\Enums\Issuing\Settlement\StatusEnum $status;
    /**
     * The total transaction amount reflected in this settlement.
     */
    public int $transaction_amount;
    /**
     * The total number of transactions reflected in this settlement.
     */
    public int $transaction_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bin' => is_string($value) ? $this->bin = $value : parent::assignMember($name, $value),
            'clearing_date' => is_int($value) ? $this->clearing_date = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'interchange_fees_amount' => is_int($value) ? $this->interchange_fees_amount = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'net_total_amount' => is_int($value) ? $this->net_total_amount = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\Issuing\Settlement\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'network_fees_amount' => is_int($value) ? $this->network_fees_amount = $value : parent::assignMember($name, $value),
            'network_settlement_identifier' => is_string($value) ? $this->network_settlement_identifier = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\Settlement\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'settlement_service' => is_string($value) ? $this->settlement_service = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\Settlement\StatusEnum::from($value) : parent::assignMember($name, $value),
            'transaction_amount' => is_int($value) ? $this->transaction_amount = $value : parent::assignMember($name, $value),
            'transaction_count' => is_int($value) ? $this->transaction_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

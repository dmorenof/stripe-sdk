<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * Source Transaction
 *
 * Some payment methods have no required amount that a customer must send.
 * Customers can be instructed to send any amount, and it can be made up of
 * multiple transactions. As such, sources can have multiple associated
 * transactions.
 */
final class Transaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'id',
        'livemode',
        'object_',
        'source',
        'status',
        'type',
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
        'source' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Source\TransactionAchCreditTransferData $ach_credit_transfer;
    /**
     * A positive integer in the smallest currency unit (that is, 100 cents for $1.00, or 1 for ¥1, Japanese Yen being a zero-decimal currency) representing the amount your customer has pushed to the receiver.
     */
    public int $amount;
    public \StripeSDK\DTOs\Source\TransactionChfCreditTransferData $chf_credit_transfer;
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
    public \StripeSDK\DTOs\Source\TransactionGbpCreditTransferData $gbp_credit_transfer;
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
    public \StripeSDK\Enums\Source\Transaction\ObjectEnum $object_;
    public \StripeSDK\DTOs\Source\TransactionPaperCheckData $paper_check;
    public \StripeSDK\DTOs\Source\TransactionSepaCreditTransferData $sepa_credit_transfer;
    /**
     * The ID of the source this transaction is attached to.
     */
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    /**
     * The status of the transaction, one of `succeeded`, `pending`, or `failed`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * The type of source this transaction is attached to.
     */
    public \StripeSDK\Enums\Source\Transaction\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach_credit_transfer' => $value instanceof \stdClass ? $this->ach_credit_transfer = new \StripeSDK\DTOs\Source\TransactionAchCreditTransferData($value) : parent::assignMember($name, $value),
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'chf_credit_transfer' => $value instanceof \stdClass ? $this->chf_credit_transfer = new \StripeSDK\DTOs\Source\TransactionChfCreditTransferData($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'gbp_credit_transfer' => $value instanceof \stdClass ? $this->gbp_credit_transfer = new \StripeSDK\DTOs\Source\TransactionGbpCreditTransferData($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Source\Transaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'paper_check' => $value instanceof \stdClass ? $this->paper_check = new \StripeSDK\DTOs\Source\TransactionPaperCheckData($value) : parent::assignMember($name, $value),
            'sepa_credit_transfer' => $value instanceof \stdClass ? $this->sepa_credit_transfer = new \StripeSDK\DTOs\Source\TransactionSepaCreditTransferData($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Source\Transaction\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

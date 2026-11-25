<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * DebitReversal
 *
 * You can reverse some [ReceivedDebits](https://docs.stripe.com/api#received_debits) depending on their network and source flow. Reversing a ReceivedDebit leads to the creation of a new object known as a DebitReversal.
 */
final class DebitReversal extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'id',
        'livemode',
        'metadata',
        'network',
        'object_',
        'received_debit',
        'status',
        'status_transitions',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'financial_account' => [
            'maxLength' => 5000,
        ],
        'hosted_regulatory_receipt_url' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'received_debit' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount (in cents) transferred.
     */
    public int $amount;
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
     * The FinancialAccount to reverse funds from.
     */
    public ?string $financial_account {
        set {
            $this->assigning('financial_account', $value);
            $this->financial_account = $value;
        }
    }
    /**
     * A [hosted transaction receipt](https://docs.stripe.com/treasury/moving-money/regulatory-receipts) URL that is provided when money movement is considered regulated under Stripe's money transmission licenses.
     */
    public ?string $hosted_regulatory_receipt_url {
        set {
            $this->assigning('hosted_regulatory_receipt_url', $value);
            $this->hosted_regulatory_receipt_url = $value;
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
     * Other flows linked to a DebitReversal.
     */
    public ?\StripeSDK\DTOs\Treasury\ReceivedDebitsResourceDebitReversalLinkedFlows $linked_flows;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Treasury\DebitReversal\MetadataMap $metadata;
    /**
     * The rails used to reverse the funds.
     */
    public \StripeSDK\Enums\Treasury\DebitReversal\NetworkEnum $network;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Treasury\DebitReversal\ObjectEnum $object_;
    /**
     * The ReceivedDebit being reversed.
     */
    public string $received_debit {
        set {
            $this->assigning('received_debit', $value);
            $this->received_debit = $value;
        }
    }
    /**
     * Status of the DebitReversal
     */
    public \StripeSDK\Enums\Treasury\DebitReversal\StatusEnum $status;
    public \StripeSDK\DTOs\Treasury\ReceivedDebitsResourceStatusTransitions $status_transitions;
    /**
     * The Transaction associated with this object.
     */
    public ?\StripeSDK\DTOs\Treasury\DebitReversal\TransactionDTO $transaction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'financial_account' => $value === null || is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'hosted_regulatory_receipt_url' => $value === null || is_string($value) ? $this->hosted_regulatory_receipt_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'linked_flows' => $value === null || $value instanceof \stdClass ? $this->linked_flows = $value === null ? null : new \StripeSDK\DTOs\Treasury\ReceivedDebitsResourceDebitReversalLinkedFlows($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\Treasury\DebitReversal\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\DebitReversal\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'received_debit' => is_string($value) ? $this->received_debit = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\DebitReversal\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\Treasury\ReceivedDebitsResourceStatusTransitions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

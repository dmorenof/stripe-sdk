<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * Transaction
 *
 * Transactions represent changes to a [FinancialAccount's](https://docs.stripe.com/api#financial_accounts) balance.
 */
final class Transaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'balance_impact',
        'created',
        'currency',
        'description',
        'financial_account',
        'flow_type',
        'id',
        'livemode',
        'object_',
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
        'description' => [
            'maxLength' => 5000,
        ],
        'financial_account' => [
            'maxLength' => 5000,
        ],
        'flow' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount (in cents) transferred.
     */
    public int $amount;
    public \StripeSDK\DTOs\Treasury\TransactionsResourceBalanceImpact $balance_impact;
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
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * A list of TransactionEntries that are part of this Transaction. This cannot be expanded in any list endpoints.
     */
    public ?\StripeSDK\DTOs\Treasury\Transaction\EntriesDTO $entries;
    /**
     * The FinancialAccount associated with this object.
     */
    public string $financial_account {
        set {
            $this->assigning('financial_account', $value);
            $this->financial_account = $value;
        }
    }
    /**
     * ID of the flow that created the Transaction.
     */
    public ?string $flow {
        set {
            $this->assigning('flow', $value);
            $this->flow = $value;
        }
    }
    /**
     * Details of the flow that created the Transaction.
     */
    public ?\StripeSDK\DTOs\Treasury\TransactionsResourceFlowDetails $flow_details;
    /**
     * Type of the flow that created the Transaction.
     */
    public \StripeSDK\Enums\Treasury\Transaction\FlowTypeEnum $flow_type;
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
    public \StripeSDK\Enums\Treasury\Transaction\ObjectEnum $object_;
    /**
     * Status of the Transaction.
     */
    public \StripeSDK\Enums\Treasury\Transaction\StatusEnum $status;
    public \StripeSDK\DTOs\Treasury\TransactionsResourceAbstractTransactionResourceStatusTransitions $status_transitions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'balance_impact' => $value instanceof \stdClass ? $this->balance_impact = new \StripeSDK\DTOs\Treasury\TransactionsResourceBalanceImpact($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'flow' => $value === null || is_string($value) ? $this->flow = $value : parent::assignMember($name, $value),
            'flow_details' => $value === null || $value instanceof \stdClass ? $this->flow_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\TransactionsResourceFlowDetails($value) : parent::assignMember($name, $value),
            'flow_type' => is_string($value) ? $this->flow_type = \StripeSDK\Enums\Treasury\Transaction\FlowTypeEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\Transaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\Transaction\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\Treasury\TransactionsResourceAbstractTransactionResourceStatusTransitions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

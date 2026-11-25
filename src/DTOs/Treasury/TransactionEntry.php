<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TransactionEntry
 *
 * TransactionEntries represent individual units of money movements within a single [Transaction](https://docs.stripe.com/api#transactions).
 */
final class TransactionEntry extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'balance_impact',
        'created',
        'currency',
        'effective_at',
        'financial_account',
        'flow_type',
        'id',
        'livemode',
        'object_',
        'transaction',
        'type',
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
        'flow' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

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
     * When the TransactionEntry will impact the FinancialAccount's balance.
     * Format: unix-time
     */
    public int $effective_at;
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
     * Token of the flow associated with the TransactionEntry.
     */
    public ?string $flow {
        set {
            $this->assigning('flow', $value);
            $this->flow = $value;
        }
    }
    /**
     * Details of the flow associated with the TransactionEntry.
     */
    public ?\StripeSDK\DTOs\Treasury\TransactionsResourceFlowDetails $flow_details;
    /**
     * Type of the flow associated with the TransactionEntry.
     */
    public \StripeSDK\Enums\Treasury\TransactionEntry\FlowTypeEnum $flow_type;
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
    public \StripeSDK\Enums\Treasury\TransactionEntry\ObjectEnum $object_;
    /**
     * The Transaction associated with this object.
     */
    public \StripeSDK\DTOs\Treasury\TransactionEntry\TransactionDTO $transaction;
    /**
     * The specific money movement that generated the TransactionEntry.
     */
    public \StripeSDK\Enums\Treasury\TransactionEntry\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balance_impact' => $value instanceof \stdClass ? $this->balance_impact = new \StripeSDK\DTOs\Treasury\TransactionsResourceBalanceImpact($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'effective_at' => is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'flow' => $value === null || is_string($value) ? $this->flow = $value : parent::assignMember($name, $value),
            'flow_details' => $value === null || $value instanceof \stdClass ? $this->flow_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\TransactionsResourceFlowDetails($value) : parent::assignMember($name, $value),
            'flow_type' => is_string($value) ? $this->flow_type = \StripeSDK\Enums\Treasury\TransactionEntry\FlowTypeEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\TransactionEntry\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Treasury\TransactionEntry\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

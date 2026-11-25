<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FinancialConnections;

/**
 * Transaction
 *
 * A Transaction represents a real transaction that affects a Financial Connections Account balance.
 */
final class Transaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'amount',
        'currency',
        'description',
        'id',
        'livemode',
        'object_',
        'status',
        'status_transitions',
        'transacted_at',
        'transaction_refresh',
        'updated',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'currency' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'transaction_refresh' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the Financial Connections Account this transaction belongs to.
     */
    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    /**
     * The amount of this transaction, in cents (or local equivalent).
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * The description of this transaction.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\FinancialConnections\Transaction\ObjectEnum $object_;
    /**
     * The status of the transaction.
     */
    public \StripeSDK\Enums\FinancialConnections\Transaction\StatusEnum $status;
    public \StripeSDK\DTOs\BankConnectionsResource\TransactionResourceStatusTransitions $status_transitions;
    /**
     * Time at which the transaction was transacted. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $transacted_at;
    /**
     * The token of the transaction refresh that last updated or created this transaction.
     */
    public string $transaction_refresh {
        set {
            $this->assigning('transaction_refresh', $value);
            $this->transaction_refresh = $value;
        }
    }
    /**
     * Time at which the object was last updated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $updated;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\FinancialConnections\Transaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\FinancialConnections\Transaction\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\BankConnectionsResource\TransactionResourceStatusTransitions($value) : parent::assignMember($name, $value),
            'transacted_at' => is_int($value) ? $this->transacted_at = $value : parent::assignMember($name, $value),
            'transaction_refresh' => is_string($value) ? $this->transaction_refresh = $value : parent::assignMember($name, $value),
            'updated' => is_int($value) ? $this->updated = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

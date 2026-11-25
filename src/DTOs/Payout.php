<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Payout
 *
 * A `Payout` object is created when you receive funds from Stripe, or when you
 * initiate a payout to either a bank account or debit card of a [connected
 * Stripe account](/docs/connect/bank-debit-card-payouts). You can retrieve individual payouts,
 * and list all payouts. Payouts are made on [varying
 * schedules](/docs/connect/manage-payout-schedule), depending on your country and
 * industry.
 *
 * Related guide: [Receiving payouts](https://docs.stripe.com/payouts)
 */
final class Payout extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'arrival_date',
        'automatic',
        'created',
        'currency',
        'id',
        'livemode',
        'method',
        'object_',
        'reconciliation_status',
        'source_type',
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
        'description' => [
            'maxLength' => 5000,
        ],
        'failure_code' => [
            'maxLength' => 5000,
        ],
        'failure_message' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'method' => [
            'maxLength' => 5000,
        ],
        'payout_method' => [
            'maxLength' => 5000,
        ],
        'source_type' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount (in cents (or local equivalent)) that transfers to your bank account or debit card.
     */
    public int $amount;
    /**
     * The application fee (if any) for the payout. [See the Connect documentation](https://docs.stripe.com/connect/instant-payouts#monetization-and-fees) for details.
     */
    public ?\StripeSDK\DTOs\Payout\ApplicationFeeDTO $application_fee;
    /**
     * The amount of the application fee (if any) requested for the payout. [See the Connect documentation](https://docs.stripe.com/connect/instant-payouts#monetization-and-fees) for details.
     */
    public ?int $application_fee_amount;
    /**
     * Date that you can expect the payout to arrive in the bank. This factors in delays to account for weekends or bank holidays.
     * Format: unix-time
     */
    public int $arrival_date;
    /**
     * Returns `true` if the payout is created by an [automated payout schedule](https://docs.stripe.com/payouts#payout-schedule) and `false` if it's [requested manually](https://stripe.com/docs/payouts#manual-payouts).
     */
    public bool $automatic;
    /**
     * ID of the balance transaction that describes the impact of this payout on your account balance.
     */
    public ?\StripeSDK\DTOs\Payout\BalanceTransactionDTO $balance_transaction;
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
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * ID of the bank account or card the payout is sent to.
     */
    public ?\StripeSDK\DTOs\Payout\DestinationDTO $destination;
    /**
     * If the payout fails or cancels, this is the ID of the balance transaction that reverses the initial balance transaction and returns the funds from the failed payout back in your balance.
     */
    public ?\StripeSDK\DTOs\Payout\AnyOfFailureBalanceTransaction\BalanceTransactionDTO $failure_balance_transaction;
    /**
     * Error code that provides a reason for a payout failure, if available. View our [list of failure codes](https://docs.stripe.com/api#payout_failures).
     */
    public ?string $failure_code {
        set {
            $this->assigning('failure_code', $value);
            $this->failure_code = $value;
        }
    }
    /**
     * Message that provides the reason for a payout failure, if available.
     */
    public ?string $failure_message {
        set {
            $this->assigning('failure_message', $value);
            $this->failure_message = $value;
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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Payout\MetadataMap $metadata;
    /**
     * The method used to send this payout, which can be `standard` or `instant`. `instant` is supported for payouts to debit cards and bank accounts in certain countries. Learn more about [bank support for Instant Payouts](https://stripe.com/docs/payouts/instant-payouts-banks).
     */
    public string $method {
        set {
            $this->assigning('method', $value);
            $this->method = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Payout\ObjectEnum $object_;
    /**
     * If the payout reverses another, this is the ID of the original payout.
     */
    public ?\StripeSDK\DTOs\Payout\OriginalPayoutDTO $original_payout;
    /**
     * ID of the v2 FinancialAccount the funds are sent to.
     */
    public ?string $payout_method {
        set {
            $this->assigning('payout_method', $value);
            $this->payout_method = $value;
        }
    }
    /**
     * If `completed`, you can use the [Balance Transactions API](https://docs.stripe.com/api/balance_transactions/list#balance_transaction_list-payout) to list all balance transactions that are paid out in this payout.
     */
    public \StripeSDK\Enums\Payout\ReconciliationStatusEnum $reconciliation_status;
    /**
     * If the payout reverses, this is the ID of the payout that reverses this payout.
     */
    public ?\StripeSDK\DTOs\Payout\ReversedByDTO $reversed_by;
    /**
     * The source balance this payout came from, which can be one of the following: `card`, `fpx`, or `bank_account`.
     */
    public string $source_type {
        set {
            $this->assigning('source_type', $value);
            $this->source_type = $value;
        }
    }
    /**
     * Extra information about a payout that displays on the user's bank statement.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Current status of the payout: `paid`, `pending`, `in_transit`, `canceled` or `failed`. A payout is `pending` until it's submitted to the bank, when it becomes `in_transit`. The status changes to `paid` if the transaction succeeds, or to `failed` or `canceled` (within 5 business days). Some payouts that fail might initially show as `paid`, then change to `failed`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * A value that generates from the beneficiary's bank that allows users to track payouts with their bank. Banks might call this a "reference number" or something similar.
     */
    public ?\StripeSDK\DTOs\PayoutsTraceId $trace_id;
    /**
     * Can be `bank_account` or `card`.
     */
    public \StripeSDK\Enums\Payout\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'application_fee_amount' => $value === null || is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'arrival_date' => is_int($value) ? $this->arrival_date = $value : parent::assignMember($name, $value),
            'automatic' => is_bool($value) ? $this->automatic = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'failure_code' => $value === null || is_string($value) ? $this->failure_code = $value : parent::assignMember($name, $value),
            'failure_message' => $value === null || is_string($value) ? $this->failure_message = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Payout\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payout_method' => $value === null || is_string($value) ? $this->payout_method = $value : parent::assignMember($name, $value),
            'reconciliation_status' => is_string($value) ? $this->reconciliation_status = \StripeSDK\Enums\Payout\ReconciliationStatusEnum::from($value) : parent::assignMember($name, $value),
            'source_type' => is_string($value) ? $this->source_type = $value : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'trace_id' => $value === null || $value instanceof \stdClass ? $this->trace_id = $value === null ? null : new \StripeSDK\DTOs\PayoutsTraceId($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payout\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

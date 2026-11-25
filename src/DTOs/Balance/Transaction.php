<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * Balance Transaction
 *
 * Balance transactions represent funds moving through your Stripe account.
 * Stripe creates them for every type of transaction that enters or leaves your Stripe account balance.
 *
 * Related guide: [Balance transaction types](https://docs.stripe.com/reports/balance-transaction-types)
 */
final class Transaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'available_on',
        'balance_type',
        'created',
        'currency',
        'fee',
        'fee_details',
        'id',
        'net',
        'object_',
        'reporting_category',
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
        'id' => [
            'maxLength' => 5000,
        ],
        'reporting_category' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Gross amount of this transaction (in cents (or local equivalent)). A positive value represents funds charged to another party, and a negative value represents funds sent to another party.
     */
    public int $amount;
    /**
     * The date that the transaction's net funds become available in the Stripe balance.
     * Format: unix-time
     */
    public int $available_on;
    /**
     * The balance that this transaction impacts.
     */
    public \StripeSDK\Enums\Balance\Transaction\BalanceTypeEnum $balance_type;
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
     * If applicable, this transaction uses an exchange rate. If money converts from currency A to currency B, then the `amount` in currency A, multiplied by the `exchange_rate`, equals the `amount` in currency B. For example, if you charge a customer 10.00 EUR, the PaymentIntent's `amount` is `1000` and `currency` is `eur`. If this converts to 12.34 USD in your Stripe account, the BalanceTransaction's `amount` is `1234`, its `currency` is `usd`, and the `exchange_rate` is `1.234`.
     */
    public ?float $exchange_rate;
    /**
     * Fees (in cents (or local equivalent)) paid for this transaction. Represented as a positive integer when assessed.
     */
    public int $fee;
    /**
     * Detailed breakdown of fees (in cents (or local equivalent)) paid for this transaction.
     */
    public \StripeSDK\Collections\Balance\Transaction\FeeDetailsCollection $fee_details;
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
     * Net impact to a Stripe balance (in cents (or local equivalent)). A positive value represents incrementing a Stripe balance, and a negative value decrementing a Stripe balance. You can calculate the net impact of a transaction on a balance by `amount` - `fee`
     */
    public int $net;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Balance\Transaction\ObjectEnum $object_;
    /**
     * Learn more about how [reporting categories](https://stripe.com/docs/reports/reporting-categories) can help you understand balance transactions from an accounting perspective.
     */
    public string $reporting_category {
        set {
            $this->assigning('reporting_category', $value);
            $this->reporting_category = $value;
        }
    }
    /**
     * This transaction relates to the Stripe object.
     */
    public ?\StripeSDK\DTOs\Balance\Transaction\SourceDTO $source;
    /**
     * The transaction's net funds status in the Stripe balance, which are either `available` or `pending`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * Transaction type: `tax_fund`, `adjustment`, `advance`, `advance_funding`, `anticipation_repayment`, `application_fee`, `application_fee_refund`, `charge`, `climate_order_purchase`, `climate_order_refund`, `connect_collection_transfer`, `contribution`, `inbound_transfer`, `inbound_transfer_reversal`, `issuing_authorization_hold`, `issuing_authorization_release`, `issuing_dispute`, `issuing_dispute_provisional_credit`, `issuing_dispute_provisional_credit_reversal`, `issuing_transaction`, `obligation_outbound`, `obligation_reversal_inbound`, `payment`, `payment_failure_refund`, `payment_network_reserve_hold`, `payment_network_reserve_release`, `payment_refund`, `payment_reversal`, `payment_unreconciled`, `payout`, `payout_cancel`, `payout_failure`, `payout_minimum_balance_hold`, `payout_minimum_balance_release`, `refund`, `refund_failure`, `reserve_transaction`, `reserved_funds`, `reserve_hold`, `reserve_release`, `stripe_fee`, `stripe_fx_fee`, `stripe_balance_payment_debit`, `stripe_balance_payment_debit_reversal`, `tax_fee`, `topup`, `topup_reversal`, `transfer`, `transfer_cancel`, `transfer_failure`, `transfer_refund`, or `fee_credit_funding`. Learn more about [balance transaction types and what they represent](https://stripe.com/docs/reports/balance-transaction-types). To classify transactions for accounting purposes, consider `reporting_category` instead.
     */
    public \StripeSDK\Enums\Balance\Transaction\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'available_on' => is_int($value) ? $this->available_on = $value : parent::assignMember($name, $value),
            'balance_type' => is_string($value) ? $this->balance_type = \StripeSDK\Enums\Balance\Transaction\BalanceTypeEnum::from($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'exchange_rate' => $value === null || is_float($value) ? $this->exchange_rate = $value : parent::assignMember($name, $value),
            'fee' => is_int($value) ? $this->fee = $value : parent::assignMember($name, $value),
            'fee_details' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fee_details = new \StripeSDK\Collections\Balance\Transaction\FeeDetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Fee::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'net' => is_int($value) ? $this->net = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Balance\Transaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'reporting_category' => is_string($value) ? $this->reporting_category = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Balance\Transaction\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

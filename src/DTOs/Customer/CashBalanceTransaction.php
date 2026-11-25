<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Cash Balance Transaction
 *
 * Customers with certain payments enabled have a cash balance, representing funds that were paid
 * by the customer to a merchant, but have not yet been allocated to a payment. Cash Balance Transactions
 * represent when funds are moved into or out of this balance. This includes funding by the customer, allocation
 * to payments, and refunds to the customer.
 */
final class CashBalanceTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'currency',
        'customer',
        'ending_balance',
        'id',
        'livemode',
        'net_amount',
        'object_',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceAdjustedForOverdraft $adjusted_for_overdraft;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceAppliedToPaymentTransaction $applied_to_payment;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
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
     * The customer whose available cash balance changed as a result of this transaction.
     */
    public \StripeSDK\DTOs\Customer\CashBalanceTransaction\CustomerDTO $customer;
    /**
     * The ID of an Account representing a customer whose available cash balance changed as a result of this transaction.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The total available cash balance for the specified currency after this transaction was applied. Represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $ending_balance;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransaction $funded;
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
     * The amount by which the cash balance changed, represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). A positive value represents funds being added to the cash balance, a negative value represents funds being removed from the cash balance.
     */
    public int $net_amount;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Customer\CashBalanceTransaction\ObjectEnum $object_;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceRefundedFromPaymentTransaction $refunded_from_payment;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceTransferredToBalance $transferred_to_balance;
    /**
     * The type of the cash balance transaction. New types may be added in future. See [Customer Balance](https://docs.stripe.com/payments/customer-balance#types) to learn more about these types.
     */
    public \StripeSDK\Enums\Customer\CashBalanceTransaction\TypeEnum $type;
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceUnappliedFromPaymentTransaction $unapplied_from_payment;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adjusted_for_overdraft' => $value instanceof \stdClass ? $this->adjusted_for_overdraft = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceAdjustedForOverdraft($value) : parent::assignMember($name, $value),
            'applied_to_payment' => $value instanceof \stdClass ? $this->applied_to_payment = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceAppliedToPaymentTransaction($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'ending_balance' => is_int($value) ? $this->ending_balance = $value : parent::assignMember($name, $value),
            'funded' => $value instanceof \stdClass ? $this->funded = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransaction($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'net_amount' => is_int($value) ? $this->net_amount = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Customer\CashBalanceTransaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'refunded_from_payment' => $value instanceof \stdClass ? $this->refunded_from_payment = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceRefundedFromPaymentTransaction($value) : parent::assignMember($name, $value),
            'transferred_to_balance' => $value instanceof \stdClass ? $this->transferred_to_balance = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceTransferredToBalance($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Customer\CashBalanceTransaction\TypeEnum::from($value) : parent::assignMember($name, $value),
            'unapplied_from_payment' => $value instanceof \stdClass ? $this->unapplied_from_payment = new \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceUnappliedFromPaymentTransaction($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

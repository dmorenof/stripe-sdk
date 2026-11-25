<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Transaction
 *
 * Any use of an [issued card](https://docs.stripe.com/issuing) that results in funds entering or leaving
 * your Stripe account, such as a completed purchase or refund, is represented by an Issuing
 * `Transaction` object.
 *
 * Related guide: [Issued card transactions](https://docs.stripe.com/issuing/purchases/transactions)
 */
final class Transaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'card',
        'created',
        'currency',
        'id',
        'livemode',
        'merchant_amount',
        'merchant_currency',
        'merchant_data',
        'metadata',
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
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The transaction amount, which will be reflected in your balance. This amount is in your currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $amount;
    /**
     * Detailed breakdown of amount components. These amounts are denominated in `currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionAmountDetails $amount_details;
    /**
     * The `Authorization` object that led to this transaction.
     */
    public ?\StripeSDK\DTOs\Issuing\Transaction\AuthorizationDTO $authorization;
    /**
     * ID of the [balance transaction](https://docs.stripe.com/api/balance_transactions) associated with this transaction.
     */
    public ?\StripeSDK\DTOs\Issuing\Transaction\BalanceTransactionDTO $balance_transaction;
    /**
     * The card used to make this transaction.
     */
    public \StripeSDK\DTOs\Issuing\Transaction\CardDTO $card;
    /**
     * The cardholder to whom this transaction belongs.
     */
    public ?\StripeSDK\DTOs\Issuing\Transaction\CardholderDTO $cardholder;
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
     * If you've disputed the transaction, the ID of the dispute.
     */
    public ?\StripeSDK\DTOs\Issuing\Transaction\DisputeDTO $dispute;
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
     * The amount that the merchant will receive, denominated in `merchant_currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). It will be different from `amount` if the merchant is taking payment in a different currency.
     */
    public int $merchant_amount;
    /**
     * The currency with which the merchant is taking payment.
     * Format: currency
     */
    public string $merchant_currency;
    public \StripeSDK\DTOs\Issuing\AuthorizationMerchantData $merchant_data;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Issuing\Transaction\MetadataMap $metadata;
    /**
     * Details about the transaction, such as processing dates, set by the card network.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionNetworkData $network_data;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Issuing\Transaction\ObjectEnum $object_;
    /**
     * Additional purchase information that is optionally provided by the merchant.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionPurchaseDetails $purchase_details;
    /**
     * [Token](https://docs.stripe.com/api/issuing/tokens/object) object used for this transaction. If a network token was not used for this transaction, this field will be null.
     */
    public ?\StripeSDK\DTOs\Issuing\Transaction\TokenDTO $token;
    /**
     * [Treasury](https://docs.stripe.com/api/treasury) details related to this transaction if it was created on a [FinancialAccount](/docs/api/treasury/financial_accounts
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionTreasury $treasury;
    /**
     * The nature of the transaction.
     */
    public \StripeSDK\Enums\Issuing\Transaction\TypeEnum $type;
    /**
     * The digital wallet used for this transaction. One of `apple_pay`, `google_pay`, or `samsung_pay`.
     */
    public ?\StripeSDK\Enums\Issuing\Transaction\WalletEnum $wallet;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_details' => $value === null || $value instanceof \stdClass ? $this->amount_details = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionAmountDetails($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'merchant_amount' => is_int($value) ? $this->merchant_amount = $value : parent::assignMember($name, $value),
            'merchant_currency' => is_string($value) ? $this->merchant_currency = $value : parent::assignMember($name, $value),
            'merchant_data' => $value instanceof \stdClass ? $this->merchant_data = new \StripeSDK\DTOs\Issuing\AuthorizationMerchantData($value) : parent::assignMember($name, $value),
            'network_data' => $value === null || $value instanceof \stdClass ? $this->network_data = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionNetworkData($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\Transaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'purchase_details' => $value === null || $value instanceof \stdClass ? $this->purchase_details = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionPurchaseDetails($value) : parent::assignMember($name, $value),
            'treasury' => $value === null || $value instanceof \stdClass ? $this->treasury = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionTreasury($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\Transaction\TypeEnum::from($value) : parent::assignMember($name, $value),
            'wallet' => $value === null || is_string($value) ? $this->wallet = $value === null ? null : \StripeSDK\Enums\Issuing\Transaction\WalletEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

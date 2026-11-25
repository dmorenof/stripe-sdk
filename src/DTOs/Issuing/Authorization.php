<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Authorization
 *
 * When an [issued card](https://docs.stripe.com/issuing) is used to make a purchase, an Issuing `Authorization`
 * object is created. [Authorizations](https://docs.stripe.com/issuing/purchases/authorizations) must be approved for the
 * purchase to be completed successfully.
 *
 * Related guide: [Issued card authorizations](https://docs.stripe.com/issuing/purchases/authorizations)
 */
final class Authorization extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'approved',
        'authorization_method',
        'balance_transactions',
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
        'request_history',
        'status',
        'transactions',
        'verification_data',
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
        'wallet' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The total amount that was authorized or rejected. This amount is in `currency` and in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal). `amount` should be the same as `merchant_amount`, unless `currency` and `merchant_currency` are different.
     */
    public int $amount;
    /**
     * Detailed breakdown of amount components. These amounts are denominated in `currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationAmountDetails $amount_details;
    /**
     * Whether the authorization has been approved.
     */
    public bool $approved;
    /**
     * How the card details were provided.
     */
    public \StripeSDK\Enums\Issuing\Authorization\AuthorizationMethodEnum $authorization_method;
    /**
     * List of balance transactions associated with this authorization.
     */
    public \StripeSDK\Collections\Dispute\BalanceTransactionsCollection $balance_transactions;
    public \StripeSDK\DTOs\Issuing\Card $card;
    /**
     * Whether the card was present at the point of sale for the authorization.
     */
    public ?\StripeSDK\Enums\Issuing\Authorization\CardPresenceEnum $card_presence;
    /**
     * The cardholder to whom this authorization belongs.
     */
    public ?\StripeSDK\DTOs\Issuing\Authorization\CardholderDTO $cardholder;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The currency of the cardholder. This currency can be different from the currency presented at authorization and the `merchant_currency` field on this authorization. Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Fleet-specific information for authorizations using Fleet cards.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationFleetData $fleet;
    /**
     * Fraud challenges sent to the cardholder, if this authorization was declined for fraud risk reasons.
     */
    public ?\StripeSDK\Collections\Issuing\Authorization\FraudChallengesCollection $fraud_challenges;
    /**
     * Information about fuel that was purchased with this transaction. Typically this information is received from the merchant after the authorization has been approved and the fuel dispensed.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationFuelData $fuel;
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
     * The total amount that was authorized or rejected. This amount is in the `merchant_currency` and in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal). `merchant_amount` should be the same as `amount`, unless `merchant_currency` and `currency` are different.
     */
    public int $merchant_amount;
    /**
     * The local currency that was presented to the cardholder for the authorization. This currency can be different from the cardholder currency and the `currency` field on this authorization. Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $merchant_currency;
    public \StripeSDK\DTOs\Issuing\AuthorizationMerchantData $merchant_data;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Issuing\Authorization\MetadataMap $metadata;
    /**
     * Details about the authorization, such as identifiers, set by the card network.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationNetworkData $network_data;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Issuing\Authorization\ObjectEnum $object_;
    /**
     * The pending authorization request. This field will only be non-null during an `issuing_authorization.request` webhook.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationPending\Request $pending_request;
    /**
     * History of every time a `pending_request` authorization was approved/declined, either by you directly or by Stripe (e.g. based on your spending_controls). If the merchant changes the authorization by performing an incremental authorization, you can look at this field to see the previous requests for the authorization. This field can be helpful in determining why a given authorization was approved/declined.
     */
    public \StripeSDK\Collections\Issuing\Authorization\HistoryCollection $request_history;
    /**
     * The current status of the authorization in its lifecycle.
     */
    public \StripeSDK\Enums\Issuing\Authorization\StatusEnum $status;
    /**
     * [Token](https://docs.stripe.com/api/issuing/tokens/object) object used for this authorization. If a network token was not used for this authorization, this field will be null.
     */
    public ?\StripeSDK\DTOs\Issuing\Authorization\TokenDTO $token;
    /**
     * List of [transactions](https://docs.stripe.com/api/issuing/transactions) associated with this authorization.
     */
    public \StripeSDK\Collections\Issuing\Authorization\TransactionsCollection $transactions;
    /**
     * [Treasury](https://docs.stripe.com/api/treasury) details related to this authorization if it was created on a [FinancialAccount](https://docs.stripe.com/api/treasury/financial_accounts).
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationTreasury $treasury;
    public \StripeSDK\DTOs\Issuing\AuthorizationVerificationData $verification_data;
    /**
     * Whether the authorization bypassed fraud risk checks because the cardholder has previously completed a fraud challenge on a similar high-risk authorization from the same merchant.
     */
    public ?bool $verified_by_fraud_challenge;
    /**
     * The digital wallet used for this transaction. One of `apple_pay`, `google_pay`, or `samsung_pay`. Will populate as `null` when no digital wallet was utilized.
     */
    public ?string $wallet {
        set {
            $this->assigning('wallet', $value);
            $this->wallet = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_details' => $value === null || $value instanceof \stdClass ? $this->amount_details = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationAmountDetails($value) : parent::assignMember($name, $value),
            'approved' => is_bool($value) ? $this->approved = $value : parent::assignMember($name, $value),
            'authorization_method' => is_string($value) ? $this->authorization_method = \StripeSDK\Enums\Issuing\Authorization\AuthorizationMethodEnum::from($value) : parent::assignMember($name, $value),
            'balance_transactions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->balance_transactions = new \StripeSDK\Collections\Dispute\BalanceTransactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\Transaction::class)) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Issuing\Card($value) : parent::assignMember($name, $value),
            'card_presence' => $value === null || is_string($value) ? $this->card_presence = $value === null ? null : \StripeSDK\Enums\Issuing\Authorization\CardPresenceEnum::from($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'fleet' => $value === null || $value instanceof \stdClass ? $this->fleet = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationFleetData($value) : parent::assignMember($name, $value),
            'fraud_challenges' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->fraud_challenges = $value === null ? null : new \StripeSDK\Collections\Issuing\Authorization\FraudChallengesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Issuing\AuthorizationFraudChallenge::class)) : parent::assignMember($name, $value),
            'fuel' => $value === null || $value instanceof \stdClass ? $this->fuel = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationFuelData($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'merchant_amount' => is_int($value) ? $this->merchant_amount = $value : parent::assignMember($name, $value),
            'merchant_currency' => is_string($value) ? $this->merchant_currency = $value : parent::assignMember($name, $value),
            'merchant_data' => $value instanceof \stdClass ? $this->merchant_data = new \StripeSDK\DTOs\Issuing\AuthorizationMerchantData($value) : parent::assignMember($name, $value),
            'network_data' => $value === null || $value instanceof \stdClass ? $this->network_data = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationNetworkData($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\Authorization\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'pending_request' => $value === null || $value instanceof \stdClass ? $this->pending_request = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationPending\Request($value) : parent::assignMember($name, $value),
            'request_history' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->request_history = new \StripeSDK\Collections\Issuing\Authorization\HistoryCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Issuing\Authorization\Request::class)) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\Authorization\StatusEnum::from($value) : parent::assignMember($name, $value),
            'transactions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->transactions = new \StripeSDK\Collections\Issuing\Authorization\TransactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Issuing\Transaction::class)) : parent::assignMember($name, $value),
            'treasury' => $value === null || $value instanceof \stdClass ? $this->treasury = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationTreasury($value) : parent::assignMember($name, $value),
            'verification_data' => $value instanceof \stdClass ? $this->verification_data = new \StripeSDK\DTOs\Issuing\AuthorizationVerificationData($value) : parent::assignMember($name, $value),
            'verified_by_fraud_challenge' => $value === null || is_bool($value) ? $this->verified_by_fraud_challenge = $value : parent::assignMember($name, $value),
            'wallet' => $value === null || is_string($value) ? $this->wallet = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

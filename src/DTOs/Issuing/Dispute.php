<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Dispute
 *
 * As a [card issuer](https://docs.stripe.com/issuing), you can dispute transactions that the cardholder does not recognize, suspects to be fraudulent, or has other issues with.
 *
 * Related guide: [Issuing disputes](https://docs.stripe.com/issuing/purchases/disputes)
 */
final class Dispute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'evidence',
        'id',
        'livemode',
        'metadata',
        'object_',
        'status',
        'transaction',
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
     * Disputed amount in the card's currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). Usually the amount of the `transaction`, but can differ (usually because of currency fluctuation).
     */
    public int $amount;
    /**
     * List of balance transactions associated with the dispute.
     */
    public ?\StripeSDK\Collections\Dispute\BalanceTransactionsCollection $balance_transactions;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The currency the `transaction` was made in.
     * Format: currency
     */
    public string $currency;
    public \StripeSDK\DTOs\Issuing\DisputeEvidence $evidence;
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
     * The enum that describes the dispute loss outcome. If the dispute is not lost, this field will be absent. New enum values may be added in the future, so be sure to handle unknown values.
     */
    public \StripeSDK\Enums\Issuing\Dispute\LossReasonEnum $loss_reason;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Issuing\Dispute\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Issuing\Dispute\ObjectEnum $object_;
    /**
     * Current status of the dispute.
     */
    public \StripeSDK\Enums\Issuing\Dispute\StatusEnum $status;
    /**
     * The transaction being disputed.
     */
    public \StripeSDK\DTOs\Issuing\Dispute\TransactionDTO $transaction;
    /**
     * [Treasury](https://docs.stripe.com/api/treasury) details related to this dispute if it was created on a [FinancialAccount](https://docs.stripe.com/api/treasury/financial_accounts)
     */
    public ?\StripeSDK\DTOs\Issuing\DisputeTreasury $treasury;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'balance_transactions' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->balance_transactions = $value === null ? null : new \StripeSDK\Collections\Dispute\BalanceTransactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\Transaction::class)) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'evidence' => $value instanceof \stdClass ? $this->evidence = new \StripeSDK\DTOs\Issuing\DisputeEvidence($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'loss_reason' => is_string($value) ? $this->loss_reason = \StripeSDK\Enums\Issuing\Dispute\LossReasonEnum::from($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\Dispute\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\Dispute\StatusEnum::from($value) : parent::assignMember($name, $value),
            'treasury' => $value === null || $value instanceof \stdClass ? $this->treasury = $value === null ? null : new \StripeSDK\DTOs\Issuing\DisputeTreasury($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

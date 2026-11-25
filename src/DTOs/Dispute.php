<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Dispute
 *
 * A dispute occurs when a customer questions your charge with their card issuer.
 * When this happens, you have the opportunity to respond to the dispute with
 * evidence that shows that the charge is legitimate.
 *
 * Related guide: [Disputes and fraud](https://docs.stripe.com/disputes)
 */
final class Dispute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'balance_transactions',
        'charge',
        'created',
        'currency',
        'enhanced_eligibility_types',
        'evidence',
        'evidence_details',
        'id',
        'is_charge_refundable',
        'livemode',
        'metadata',
        'object_',
        'reason',
        'status',
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
        'reason' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Disputed amount. Usually the amount of the charge, but it can differ (usually because of currency fluctuation or because only part of the order is disputed).
     */
    public int $amount;
    /**
     * List of zero, one, or two balance transactions that show funds withdrawn and reinstated to your Stripe account as a result of this dispute.
     */
    public \StripeSDK\Collections\Dispute\BalanceTransactionsCollection $balance_transactions;
    /**
     * ID of the charge that's disputed.
     */
    public \StripeSDK\DTOs\Dispute\ChargeDTO $charge;
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
     * List of eligibility types that are included in `enhanced_evidence`.
     */
    public \StripeSDK\Collections\Dispute\EligibilityTypesCollection $enhanced_eligibility_types;
    public \StripeSDK\DTOs\Dispute\Evidence $evidence;
    public \StripeSDK\DTOs\Dispute\EvidenceDetails $evidence_details;
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
     * If true, it's still possible to refund the disputed payment. After the payment has been fully refunded, no further funds are withdrawn from your Stripe account as a result of this dispute.
     */
    public bool $is_charge_refundable;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Dispute\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Dispute\ObjectEnum $object_;
    /**
     * ID of the PaymentIntent that's disputed.
     */
    public ?\StripeSDK\DTOs\Dispute\PaymentIntentDTO $payment_intent;
    public \StripeSDK\DTOs\Dispute\PaymentMethodDetails $payment_method_details;
    /**
     * Reason given by cardholder for dispute. Possible values are `bank_cannot_process`, `check_returned`, `credit_not_processed`, `customer_initiated`, `debit_not_authorized`, `duplicate`, `fraudulent`, `general`, `incorrect_account_details`, `insufficient_funds`, `noncompliant`, `product_not_received`, `product_unacceptable`, `subscription_canceled`, or `unrecognized`. Learn more about [dispute reasons](https://docs.stripe.com/disputes/categories).
     */
    public string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }
    /**
     * The current status of a dispute. Possible values include:`warning_needs_response`, `warning_under_review`, `warning_closed`, `needs_response`, `under_review`, `won`, `lost`, or `prevented`.
     */
    public \StripeSDK\Enums\Dispute\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'balance_transactions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->balance_transactions = new \StripeSDK\Collections\Dispute\BalanceTransactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\Transaction::class)) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'evidence' => $value instanceof \stdClass ? $this->evidence = new \StripeSDK\DTOs\Dispute\Evidence($value) : parent::assignMember($name, $value),
            'evidence_details' => $value instanceof \stdClass ? $this->evidence_details = new \StripeSDK\DTOs\Dispute\EvidenceDetails($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_charge_refundable' => is_bool($value) ? $this->is_charge_refundable = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Dispute\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_details' => $value instanceof \stdClass ? $this->payment_method_details = new \StripeSDK\DTOs\Dispute\PaymentMethodDetails($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Dispute\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Charge
 *
 * The `Charge` object represents a single attempt to move money into your Stripe account.
 * PaymentIntent confirmation is the most common way to create Charges, but [Account Debits](https://docs.stripe.com/connect/account-debits) may also create Charges.
 * The create and capture methods are deprecated and will be deleted soon. If your integration uses either of them, you need to update it to use a different payment flow, such as [the Payment Intents API](https://docs.stripe.com/payments/payment-intents).
 */
final class Charge extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_captured',
        'amount_refunded',
        'billing_details',
        'captured',
        'created',
        'currency',
        'disputed',
        'id',
        'livemode',
        'metadata',
        'object_',
        'paid',
        'refunded',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'calculated_statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 40000,
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
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'receipt_email' => [
            'maxLength' => 5000,
        ],
        'receipt_number' => [
            'maxLength' => 5000,
        ],
        'receipt_url' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor_suffix' => [
            'maxLength' => 5000,
        ],
        'transfer_group' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount intended to be collected by this payment. A positive integer representing how much to charge in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or [equivalent in charge currency](https://docs.stripe.com/currencies#minimum-and-maximum-charge-amounts). The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     */
    public int $amount;
    /**
     * Amount in cents (or local equivalent) captured (can be less than the amount attribute on the charge if a partial capture was made).
     */
    public int $amount_captured;
    /**
     * Amount in cents (or local equivalent) refunded (can be less than the amount attribute on the charge if a partial refund was issued).
     */
    public int $amount_refunded;
    /**
     * ID of the Connect application that created the charge.
     */
    public ?\StripeSDK\DTOs\Charge\ApplicationDTO $application;
    /**
     * The application fee (if any) for the charge. [See the Connect documentation](https://docs.stripe.com/connect/direct-charges#collect-fees) for details.
     */
    public ?\StripeSDK\DTOs\Charge\ApplicationFeeDTO $application_fee;
    /**
     * The amount of the application fee (if any) requested for the charge. [See the Connect documentation](https://docs.stripe.com/connect/direct-charges#collect-fees) for details.
     */
    public ?int $application_fee_amount;
    /**
     * ID of the balance transaction that describes the impact of this charge on your account balance (not including refunds or disputes).
     */
    public ?\StripeSDK\DTOs\Charge\BalanceTransactionDTO $balance_transaction;
    public \StripeSDK\DTOs\Billing\Details $billing_details;
    /**
     * The full statement descriptor that is passed to card networks, and that is displayed on your customers' credit card and bank statements. Allows you to see what the statement descriptor looks like after the static and dynamic portions are combined. This value only exists for card payments.
     */
    public ?string $calculated_statement_descriptor {
        set {
            $this->assigning('calculated_statement_descriptor', $value);
            $this->calculated_statement_descriptor = $value;
        }
    }
    /**
     * If the charge was created without capturing, this Boolean represents whether it is still uncaptured or has since been captured.
     */
    public bool $captured;
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
     * ID of the customer this charge is for if one exists.
     */
    public ?\StripeSDK\DTOs\Charge\CustomerDTO $customer;
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
     * Whether the charge has been disputed.
     */
    public bool $disputed;
    /**
     * ID of the balance transaction that describes the reversal of the balance on your account due to payment failure.
     */
    public ?\StripeSDK\DTOs\Charge\AnyOfFailureBalanceTransaction\BalanceTransactionDTO $failure_balance_transaction;
    /**
     * Error code explaining reason for charge failure if available (see [the errors section](https://docs.stripe.com/error-codes) for a list of codes).
     */
    public ?string $failure_code {
        set {
            $this->assigning('failure_code', $value);
            $this->failure_code = $value;
        }
    }
    /**
     * Message to user further explaining reason for charge failure if available.
     */
    public ?string $failure_message {
        set {
            $this->assigning('failure_message', $value);
            $this->failure_message = $value;
        }
    }
    /**
     * Information on fraud assessments for the charge.
     */
    public ?\StripeSDK\DTOs\Charge\FraudDetails $fraud_details;
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
    public \StripeSDK\DTOs\Charge\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Charge\ObjectEnum $object_;
    /**
     * The account (if any) the charge was made on behalf of without triggering an automatic transfer. See the [Connect documentation](https://docs.stripe.com/connect/separate-charges-and-transfers) for details.
     */
    public ?\StripeSDK\DTOs\Charge\OnBehalfDTO $on_behalf_of;
    /**
     * Details about whether the payment was accepted, and why. See [understanding declines](https://docs.stripe.com/declines) for details.
     */
    public ?\StripeSDK\DTOs\Charge\Outcome $outcome;
    /**
     * `true` if the charge succeeded, or was successfully authorized for later capture.
     */
    public bool $paid;
    /**
     * ID of the PaymentIntent associated with this charge, if one exists.
     */
    public ?\StripeSDK\DTOs\Charge\PaymentIntentDTO $payment_intent;
    /**
     * ID of the payment method used in this charge.
     */
    public ?string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * Details about the payment method at the time of the transaction.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetails $payment_method_details;
    public \StripeSDK\DTOs\Payment\FlowsPaymentIntentPresentmentDetails $presentment_details;
    public \StripeSDK\DTOs\Radar\RadarOptions $radar_options;
    /**
     * This is the email address that the receipt for this charge was sent to.
     */
    public ?string $receipt_email {
        set {
            $this->assigning('receipt_email', $value);
            $this->receipt_email = $value;
        }
    }
    /**
     * This is the transaction number that appears on email receipts sent for this charge. This attribute will be `null` until a receipt has been sent.
     */
    public ?string $receipt_number {
        set {
            $this->assigning('receipt_number', $value);
            $this->receipt_number = $value;
        }
    }
    /**
     * This is the URL to view the receipt for this charge. The receipt is kept up-to-date to the latest state of the charge, including any refunds. If the charge is for an Invoice, the receipt will be stylized as an Invoice receipt.
     */
    public ?string $receipt_url {
        set {
            $this->assigning('receipt_url', $value);
            $this->receipt_url = $value;
        }
    }
    /**
     * Whether the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
     */
    public bool $refunded;
    /**
     * A list of refunds that have been applied to the charge.
     */
    public ?\StripeSDK\DTOs\Charge\RefundsDTO $refunds;
    /**
     * ID of the review associated with this charge if one exists.
     */
    public ?\StripeSDK\DTOs\Charge\ReviewDTO $review;
    /**
     * Shipping information for the charge.
     */
    public ?\StripeSDK\DTOs\Shipping $shipping;
    /**
     * The transfer ID which created this charge. Only present if the charge came from another Stripe account. [See the Connect documentation](https://docs.stripe.com/connect/destination-charges) for details.
     */
    public ?\StripeSDK\DTOs\Charge\SourceTransferDTO $source_transfer;
    /**
     * For a non-card charge, text that appears on the customer's statement as the statement descriptor. This value overrides the account's default statement descriptor. For information about requirements, including the 22-character limit, see [the Statement Descriptor docs](https://docs.stripe.com/get-started/account/statement-descriptors).
     *
     * For a card charge, this value is ignored unless you don't specify a `statement_descriptor_suffix`, in which case this value is used as the suffix.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Provides information about a card charge. Concatenated to the account's [statement descriptor prefix](https://docs.stripe.com/get-started/account/statement-descriptors#static) to form the complete statement descriptor that appears on the customer's statement. If the account has no prefix value, the suffix is concatenated to the account's statement descriptor.
     */
    public ?string $statement_descriptor_suffix {
        set {
            $this->assigning('statement_descriptor_suffix', $value);
            $this->statement_descriptor_suffix = $value;
        }
    }
    /**
     * The status of the payment is either `succeeded`, `pending`, or `failed`.
     */
    public \StripeSDK\Enums\Charge\StatusEnum $status;
    /**
     * ID of the transfer to the `destination` account (only applicable if the charge was created using the `destination` parameter).
     */
    public \StripeSDK\DTOs\Charge\TransferDTO $transfer;
    /**
     * An optional dictionary including the account to automatically transfer to as part of a destination charge. [See the Connect documentation](https://docs.stripe.com/connect/destination-charges) for details.
     */
    public ?\StripeSDK\DTOs\Charge\TransferData $transfer_data;
    /**
     * A string that identifies this transaction as part of a group. See the [Connect documentation](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-options) for details.
     */
    public ?string $transfer_group {
        set {
            $this->assigning('transfer_group', $value);
            $this->transfer_group = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_captured' => is_int($value) ? $this->amount_captured = $value : parent::assignMember($name, $value),
            'amount_refunded' => is_int($value) ? $this->amount_refunded = $value : parent::assignMember($name, $value),
            'application_fee_amount' => $value === null || is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'billing_details' => $value instanceof \stdClass ? $this->billing_details = new \StripeSDK\DTOs\Billing\Details($value) : parent::assignMember($name, $value),
            'calculated_statement_descriptor' => $value === null || is_string($value) ? $this->calculated_statement_descriptor = $value : parent::assignMember($name, $value),
            'captured' => is_bool($value) ? $this->captured = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'disputed' => is_bool($value) ? $this->disputed = $value : parent::assignMember($name, $value),
            'failure_code' => $value === null || is_string($value) ? $this->failure_code = $value : parent::assignMember($name, $value),
            'failure_message' => $value === null || is_string($value) ? $this->failure_message = $value : parent::assignMember($name, $value),
            'fraud_details' => $value === null || $value instanceof \stdClass ? $this->fraud_details = $value === null ? null : new \StripeSDK\DTOs\Charge\FraudDetails($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Charge\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'outcome' => $value === null || $value instanceof \stdClass ? $this->outcome = $value === null ? null : new \StripeSDK\DTOs\Charge\Outcome($value) : parent::assignMember($name, $value),
            'paid' => is_bool($value) ? $this->paid = $value : parent::assignMember($name, $value),
            'payment_method' => $value === null || is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'payment_method_details' => $value === null || $value instanceof \stdClass ? $this->payment_method_details = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetails($value) : parent::assignMember($name, $value),
            'presentment_details' => $value instanceof \stdClass ? $this->presentment_details = new \StripeSDK\DTOs\Payment\FlowsPaymentIntentPresentmentDetails($value) : parent::assignMember($name, $value),
            'radar_options' => $value instanceof \stdClass ? $this->radar_options = new \StripeSDK\DTOs\Radar\RadarOptions($value) : parent::assignMember($name, $value),
            'receipt_email' => $value === null || is_string($value) ? $this->receipt_email = $value : parent::assignMember($name, $value),
            'receipt_number' => $value === null || is_string($value) ? $this->receipt_number = $value : parent::assignMember($name, $value),
            'receipt_url' => $value === null || is_string($value) ? $this->receipt_url = $value : parent::assignMember($name, $value),
            'refunded' => is_bool($value) ? $this->refunded = $value : parent::assignMember($name, $value),
            'shipping' => $value === null || $value instanceof \stdClass ? $this->shipping = $value === null ? null : new \StripeSDK\DTOs\Shipping($value) : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => $value === null || is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Charge\StatusEnum::from($value) : parent::assignMember($name, $value),
            'transfer_data' => $value === null || $value instanceof \stdClass ? $this->transfer_data = $value === null ? null : new \StripeSDK\DTOs\Charge\TransferData($value) : parent::assignMember($name, $value),
            'transfer_group' => $value === null || is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

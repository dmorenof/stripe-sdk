<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Refund
 *
 * Refund objects allow you to refund a previously created charge that isn't
 * refunded yet. Funds are refunded to the credit or debit card that's
 * initially charged.
 *
 * Related guide: [Refunds](https://docs.stripe.com/refunds)
 */
final class Refund extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'id',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'failure_reason' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'instructions_email' => [
            'maxLength' => 5000,
        ],
        'receipt_number' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount, in cents (or local equivalent).
     */
    public int $amount;
    /**
     * Balance transaction that describes the impact on your account balance.
     */
    public ?\StripeSDK\DTOs\Refund\BalanceTransactionDTO $balance_transaction;
    /**
     * ID of the charge that's refunded.
     */
    public ?\StripeSDK\DTOs\Refund\ChargeDTO $charge;
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
     * ID of the customer of this refund.
     */
    public ?\StripeSDK\DTOs\Refund\CustomerDTO $customer;
    /**
     * ID of the account of this refund.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * An arbitrary string attached to the object. You can use this for displaying to users (available on non-card refunds only).
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\DTOs\RefundDestinationDetails $destination_details;
    /**
     * After the refund fails, this balance transaction describes the adjustment made on your account balance that reverses the initial balance transaction.
     */
    public \StripeSDK\DTOs\Refund\AnyOfFailureBalanceTransaction\BalanceTransactionDTO $failure_balance_transaction;
    /**
     * Provides the reason for the refund failure. Possible values are: `lost_or_stolen_card`, `expired_or_canceled_card`, `charge_for_pending_refund_disputed`, `insufficient_funds`, `declined`, `merchant_request`, or `unknown`.
     */
    public string $failure_reason {
        set {
            $this->assigning('failure_reason', $value);
            $this->failure_reason = $value;
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
     * For payment methods without native refund support (for example, Konbini, PromptPay), provide an email address for the customer to receive refund instructions.
     */
    public string $instructions_email {
        set {
            $this->assigning('instructions_email', $value);
            $this->instructions_email = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Refund\MetadataMap $metadata;
    public \StripeSDK\DTOs\RefundNextAction $next_action;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Refund\ObjectEnum $object_;
    /**
     * ID of the PaymentIntent that's refunded.
     */
    public ?\StripeSDK\DTOs\Refund\PaymentIntentDTO $payment_intent;
    /**
     * ID of the payment method associated with this refund.
     */
    public ?\StripeSDK\DTOs\Refund\PaymentMethodDTO $payment_method;
    /**
     * Provides the reason for why the refund is pending. Possible values are: `processing`, `insufficient_funds`, or `charge_pending`.
     */
    public \StripeSDK\Enums\Refund\PendingReasonEnum $pending_reason;
    public \StripeSDK\DTOs\Payment\FlowsPaymentIntentPresentmentDetails $presentment_details;
    /**
     * Reason for the refund, which is either user-provided (`duplicate`, `fraudulent`, or `requested_by_customer`) or generated by Stripe internally (`expired_uncaptured_charge`).
     */
    public ?\StripeSDK\Enums\Refund\ReasonEnum $reason;
    /**
     * This is the transaction number that appears on email receipts sent for this refund.
     */
    public ?string $receipt_number {
        set {
            $this->assigning('receipt_number', $value);
            $this->receipt_number = $value;
        }
    }
    /**
     * The transfer reversal that's associated with the refund. Only present if the charge came from another Stripe account.
     */
    public ?\StripeSDK\DTOs\Refund\TransferReversalDTO $source_transfer_reversal;
    /**
     * Status of the refund. This can be `pending`, `requires_action`, `succeeded`, `failed`, or `canceled`. Learn more about [failed refunds](https://docs.stripe.com/refunds#failed-refunds).
     */
    public ?string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * This refers to the transfer reversal object if the accompanying transfer reverses. This is only applicable if the charge was created using the destination parameter.
     */
    public ?\StripeSDK\DTOs\Refund\AnyOfTransferReversal\TransferReversalDTO $transfer_reversal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination_details' => $value instanceof \stdClass ? $this->destination_details = new \StripeSDK\DTOs\RefundDestinationDetails($value) : parent::assignMember($name, $value),
            'failure_reason' => is_string($value) ? $this->failure_reason = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'instructions_email' => is_string($value) ? $this->instructions_email = $value : parent::assignMember($name, $value),
            'next_action' => $value instanceof \stdClass ? $this->next_action = new \StripeSDK\DTOs\RefundNextAction($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Refund\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'pending_reason' => is_string($value) ? $this->pending_reason = \StripeSDK\Enums\Refund\PendingReasonEnum::from($value) : parent::assignMember($name, $value),
            'presentment_details' => $value instanceof \stdClass ? $this->presentment_details = new \StripeSDK\DTOs\Payment\FlowsPaymentIntentPresentmentDetails($value) : parent::assignMember($name, $value),
            'reason' => $value === null || is_string($value) ? $this->reason = $value === null ? null : \StripeSDK\Enums\Refund\ReasonEnum::from($value) : parent::assignMember($name, $value),
            'receipt_number' => $value === null || is_string($value) ? $this->receipt_number = $value : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

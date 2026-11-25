<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * Outbound Payment
 *
 * Use [OutboundPayments](https://docs.stripe.com/docs/treasury/moving-money/financial-accounts/out-of/outbound-payments) to send funds to another party's external bank account or [FinancialAccount](https://docs.stripe.com/api#financial_accounts). To send money to an account belonging to the same user, use an [OutboundTransfer](https://docs.stripe.com/api#outbound_transfers).
 *
 * Simulate OutboundPayment state changes with the `/v1/test_helpers/treasury/outbound_payments` endpoints. These methods can only be called on test mode objects.
 *
 * Related guide: [Moving money with Treasury using OutboundPayment objects](https://docs.stripe.com/docs/treasury/moving-money/financial-accounts/out-of/outbound-payments)
 */
final class OutboundPayment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'cancelable',
        'created',
        'currency',
        'expected_arrival_date',
        'financial_account',
        'id',
        'livemode',
        'metadata',
        'object_',
        'statement_descriptor',
        'status',
        'status_transitions',
        'transaction',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'destination_payment_method' => [
            'maxLength' => 5000,
        ],
        'financial_account' => [
            'maxLength' => 5000,
        ],
        'hosted_regulatory_receipt_url' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount (in cents) transferred.
     */
    public int $amount;
    /**
     * Returns `true` if the object can be canceled, and `false` otherwise.
     */
    public bool $cancelable;
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
     * ID of the [customer](https://docs.stripe.com/api/customers) to whom an OutboundPayment is sent.
     */
    public ?string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
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
     * The PaymentMethod via which an OutboundPayment is sent. This field can be empty if the OutboundPayment was created using `destination_payment_method_data`.
     */
    public ?string $destination_payment_method {
        set {
            $this->assigning('destination_payment_method', $value);
            $this->destination_payment_method = $value;
        }
    }
    /**
     * Details about the PaymentMethod for an OutboundPayment.
     */
    public ?\StripeSDK\DTOs\Outbound\PaymentsPaymentMethodDetails $destination_payment_method_details;
    /**
     * Details about the end user.
     */
    public ?\StripeSDK\DTOs\Treasury\OutboundPaymentsResourceOutboundPaymentResourceEndUserDetails $end_user_details;
    /**
     * The date when funds are expected to arrive in the destination account.
     * Format: unix-time
     */
    public int $expected_arrival_date;
    /**
     * The FinancialAccount that funds were pulled from.
     */
    public string $financial_account {
        set {
            $this->assigning('financial_account', $value);
            $this->financial_account = $value;
        }
    }
    /**
     * A [hosted transaction receipt](https://docs.stripe.com/treasury/moving-money/regulatory-receipts) URL that is provided when money movement is considered regulated under Stripe's money transmission licenses.
     */
    public ?string $hosted_regulatory_receipt_url {
        set {
            $this->assigning('hosted_regulatory_receipt_url', $value);
            $this->hosted_regulatory_receipt_url = $value;
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
    public \StripeSDK\DTOs\Treasury\OutboundPayment\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Treasury\OutboundPayment\ObjectEnum $object_;
    /**
     * Details about a returned OutboundPayment. Only set when the status is `returned`.
     */
    public ?\StripeSDK\DTOs\Treasury\OutboundPaymentsResourceReturnedStatus $returned_details;
    /**
     * The description that appears on the receiving end for an OutboundPayment (for example, bank statement for external bank transfer).
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Current status of the OutboundPayment: `processing`, `failed`, `posted`, `returned`, `canceled`. An OutboundPayment is `processing` if it has been created and is pending. The status changes to `posted` once the OutboundPayment has been "confirmed" and funds have left the account, or to `failed` or `canceled`. If an OutboundPayment fails to arrive at its destination, its status will change to `returned`.
     */
    public \StripeSDK\Enums\Treasury\OutboundPayment\StatusEnum $status;
    public \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceOutboundPaymentResourceStatusTransitions $status_transitions;
    /**
     * Details about network-specific tracking information if available.
     */
    public ?\StripeSDK\DTOs\Treasury\OutboundPaymentsResourceOutboundPaymentResourceTrackingDetails $tracking_details;
    /**
     * The Transaction associated with this object.
     */
    public \StripeSDK\DTOs\Treasury\OutboundPayment\TransactionDTO $transaction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'cancelable' => is_bool($value) ? $this->cancelable = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => $value === null || is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination_payment_method' => $value === null || is_string($value) ? $this->destination_payment_method = $value : parent::assignMember($name, $value),
            'destination_payment_method_details' => $value === null || $value instanceof \stdClass ? $this->destination_payment_method_details = $value === null ? null : new \StripeSDK\DTOs\Outbound\PaymentsPaymentMethodDetails($value) : parent::assignMember($name, $value),
            'end_user_details' => $value === null || $value instanceof \stdClass ? $this->end_user_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceOutboundPaymentResourceEndUserDetails($value) : parent::assignMember($name, $value),
            'expected_arrival_date' => is_int($value) ? $this->expected_arrival_date = $value : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'hosted_regulatory_receipt_url' => $value === null || is_string($value) ? $this->hosted_regulatory_receipt_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\OutboundPayment\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'returned_details' => $value === null || $value instanceof \stdClass ? $this->returned_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceReturnedStatus($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\OutboundPayment\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceOutboundPaymentResourceStatusTransitions($value) : parent::assignMember($name, $value),
            'tracking_details' => $value === null || $value instanceof \stdClass ? $this->tracking_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceOutboundPaymentResourceTrackingDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

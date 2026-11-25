<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * OutboundTransfer
 *
 * Use [OutboundTransfers](https://docs.stripe.com/docs/treasury/moving-money/financial-accounts/out-of/outbound-transfers) to transfer funds from a [FinancialAccount](https://docs.stripe.com/api#financial_accounts) to a PaymentMethod belonging to the same entity. To send funds to a different party, use [OutboundPayments](https://docs.stripe.com/api#outbound_payments) instead. You can send funds over ACH rails or through a domestic wire transfer to a user's own external bank account.
 *
 * Simulate OutboundTransfer state changes with the `/v1/test_helpers/treasury/outbound_transfers` endpoints. These methods can only be called on test mode objects.
 *
 * Related guide: [Moving money with Treasury using OutboundTransfer objects](https://docs.stripe.com/docs/treasury/moving-money/financial-accounts/out-of/outbound-transfers)
 */
final class OutboundTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'cancelable',
        'created',
        'currency',
        'destination_payment_method_details',
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
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The PaymentMethod used as the payment instrument for an OutboundTransfer.
     */
    public ?string $destination_payment_method {
        set {
            $this->assigning('destination_payment_method', $value);
            $this->destination_payment_method = $value;
        }
    }
    public \StripeSDK\DTOs\Outbound\TransfersPaymentMethodDetails $destination_payment_method_details;
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
    public \StripeSDK\DTOs\Treasury\OutboundTransfer\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Treasury\OutboundTransfer\ObjectEnum $object_;
    /**
     * Details about a returned OutboundTransfer. Only set when the status is `returned`.
     */
    public ?\StripeSDK\DTOs\Treasury\OutboundTransfersResourceReturnedDetails $returned_details;
    /**
     * Information about the OutboundTransfer to be sent to the recipient account.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Current status of the OutboundTransfer: `processing`, `failed`, `canceled`, `posted`, `returned`. An OutboundTransfer is `processing` if it has been created and is pending. The status changes to `posted` once the OutboundTransfer has been "confirmed" and funds have left the account, or to `failed` or `canceled`. If an OutboundTransfer fails to arrive at its destination, its status will change to `returned`.
     */
    public \StripeSDK\Enums\Treasury\OutboundTransfer\StatusEnum $status;
    public \StripeSDK\DTOs\Treasury\OutboundTransfersResourceStatusTransitions $status_transitions;
    /**
     * Details about network-specific tracking information if available.
     */
    public ?\StripeSDK\DTOs\Treasury\OutboundTransfersResourceOutboundTransferResourceTrackingDetails $tracking_details;
    /**
     * The Transaction associated with this object.
     */
    public \StripeSDK\DTOs\Treasury\OutboundTransfer\TransactionDTO $transaction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'cancelable' => is_bool($value) ? $this->cancelable = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination_payment_method' => $value === null || is_string($value) ? $this->destination_payment_method = $value : parent::assignMember($name, $value),
            'destination_payment_method_details' => $value instanceof \stdClass ? $this->destination_payment_method_details = new \StripeSDK\DTOs\Outbound\TransfersPaymentMethodDetails($value) : parent::assignMember($name, $value),
            'expected_arrival_date' => is_int($value) ? $this->expected_arrival_date = $value : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'hosted_regulatory_receipt_url' => $value === null || is_string($value) ? $this->hosted_regulatory_receipt_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\OutboundTransfer\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'returned_details' => $value === null || $value instanceof \stdClass ? $this->returned_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\OutboundTransfersResourceReturnedDetails($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\OutboundTransfer\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\Treasury\OutboundTransfersResourceStatusTransitions($value) : parent::assignMember($name, $value),
            'tracking_details' => $value === null || $value instanceof \stdClass ? $this->tracking_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\OutboundTransfersResourceOutboundTransferResourceTrackingDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

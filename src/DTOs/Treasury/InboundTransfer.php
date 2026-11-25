<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * InboundTransfer
 *
 * Use [InboundTransfers](https://docs.stripe.com/docs/treasury/moving-money/financial-accounts/into/inbound-transfers) to add funds to your [FinancialAccount](https://docs.stripe.com/api#financial_accounts) via a PaymentMethod that is owned by you. The funds will be transferred via an ACH debit.
 *
 * Related guide: [Moving money with Treasury using InboundTransfer objects](https://docs.stripe.com/docs/treasury/moving-money/financial-accounts/into/inbound-transfers)
 */
final class InboundTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'cancelable',
        'created',
        'currency',
        'financial_account',
        'id',
        'linked_flows',
        'livemode',
        'metadata',
        'object_',
        'statement_descriptor',
        'status',
        'status_transitions',
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
        'financial_account' => [
            'maxLength' => 5000,
        ],
        'hosted_regulatory_receipt_url' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'origin_payment_method' => [
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
     * Returns `true` if the InboundTransfer is able to be canceled.
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
     * Details about this InboundTransfer's failure. Will be set when `status=failed` or `returned=true`.
     */
    public ?\StripeSDK\DTOs\Treasury\InboundTransfersResourceFailureDetails $failure_details;
    /**
     * The FinancialAccount that received the funds.
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
    public \StripeSDK\DTOs\Treasury\InboundTransfersResourceInboundTransferResourceLinkedFlows $linked_flows;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Treasury\InboundTransfer\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Treasury\InboundTransfer\ObjectEnum $object_;
    /**
     * The origin payment method to be debited for an InboundTransfer.
     */
    public ?string $origin_payment_method {
        set {
            $this->assigning('origin_payment_method', $value);
            $this->origin_payment_method = $value;
        }
    }
    /**
     * Details about the PaymentMethod for an InboundTransfer.
     */
    public ?\StripeSDK\DTOs\InboundTransfers $origin_payment_method_details;
    /**
     * Returns `true` if the funds for an InboundTransfer were returned after the InboundTransfer went to the `succeeded` state.
     */
    public ?bool $returned;
    /**
     * Statement descriptor shown when funds are debited from the source. Not all payment networks support `statement_descriptor`.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Status of the InboundTransfer: `processing`, `succeeded`, `failed`, and `canceled`. An InboundTransfer is `processing` if it is created and pending. The status changes to `succeeded` once the funds have been "confirmed" and a `transaction` is created and posted. The status changes to `failed` if the transfer fails.
     */
    public \StripeSDK\Enums\Treasury\InboundTransfer\StatusEnum $status;
    public \StripeSDK\DTOs\Treasury\InboundTransfersResourceInboundTransferResourceStatusTransitions $status_transitions;
    /**
     * The Transaction associated with this object.
     */
    public ?\StripeSDK\DTOs\Treasury\InboundTransfer\TransactionDTO $transaction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'cancelable' => is_bool($value) ? $this->cancelable = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'failure_details' => $value === null || $value instanceof \stdClass ? $this->failure_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\InboundTransfersResourceFailureDetails($value) : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'hosted_regulatory_receipt_url' => $value === null || is_string($value) ? $this->hosted_regulatory_receipt_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'linked_flows' => $value instanceof \stdClass ? $this->linked_flows = new \StripeSDK\DTOs\Treasury\InboundTransfersResourceInboundTransferResourceLinkedFlows($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\InboundTransfer\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'origin_payment_method' => $value === null || is_string($value) ? $this->origin_payment_method = $value : parent::assignMember($name, $value),
            'origin_payment_method_details' => $value === null || $value instanceof \stdClass ? $this->origin_payment_method_details = $value === null ? null : new \StripeSDK\DTOs\InboundTransfers($value) : parent::assignMember($name, $value),
            'returned' => $value === null || is_bool($value) ? $this->returned = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\InboundTransfer\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\Treasury\InboundTransfersResourceInboundTransferResourceStatusTransitions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

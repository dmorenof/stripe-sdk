<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * ReceivedDebit
 *
 * ReceivedDebits represent funds pulled from a [FinancialAccount](https://docs.stripe.com/api#financial_accounts). These are not initiated from the FinancialAccount.
 */
final class ReceivedDebit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'description',
        'id',
        'linked_flows',
        'livemode',
        'network',
        'object_',
        'status',
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
    ];

    /**
     * Amount (in cents) transferred.
     */
    public int $amount;
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
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Reason for the failure. A ReceivedDebit might fail because the FinancialAccount doesn't have sufficient funds, is closed, or is frozen.
     */
    public ?\StripeSDK\Enums\Treasury\ReceivedDebit\FailureCodeEnum $failure_code;
    /**
     * The FinancialAccount that funds were pulled from.
     */
    public ?string $financial_account {
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
    public \StripeSDK\DTOs\Treasury\SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails $initiating_payment_method_details;
    public \StripeSDK\DTOs\Treasury\ReceivedDebitsResourceLinkedFlows $linked_flows;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * The network used for the ReceivedDebit.
     */
    public \StripeSDK\Enums\Treasury\ReceivedDebit\NetworkEnum $network;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Treasury\ReceivedDebit\ObjectEnum $object_;
    /**
     * Details describing when a ReceivedDebit might be reversed.
     */
    public ?\StripeSDK\DTOs\Treasury\ReceivedDebitsResourceReversalDetails $reversal_details;
    /**
     * Status of the ReceivedDebit. ReceivedDebits are created with a status of either `succeeded` (approved) or `failed` (declined). The failure reason can be found under the `failure_code`.
     */
    public \StripeSDK\Enums\Treasury\ReceivedDebit\StatusEnum $status;
    /**
     * The Transaction associated with this object.
     */
    public ?\StripeSDK\DTOs\Treasury\ReceivedDebit\TransactionDTO $transaction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'failure_code' => $value === null || is_string($value) ? $this->failure_code = $value === null ? null : \StripeSDK\Enums\Treasury\ReceivedDebit\FailureCodeEnum::from($value) : parent::assignMember($name, $value),
            'financial_account' => $value === null || is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'hosted_regulatory_receipt_url' => $value === null || is_string($value) ? $this->hosted_regulatory_receipt_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'initiating_payment_method_details' => $value instanceof \stdClass ? $this->initiating_payment_method_details = new \StripeSDK\DTOs\Treasury\SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails($value) : parent::assignMember($name, $value),
            'linked_flows' => $value instanceof \stdClass ? $this->linked_flows = new \StripeSDK\DTOs\Treasury\ReceivedDebitsResourceLinkedFlows($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\Treasury\ReceivedDebit\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Treasury\ReceivedDebit\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'reversal_details' => $value === null || $value instanceof \stdClass ? $this->reversal_details = $value === null ? null : new \StripeSDK\DTOs\Treasury\ReceivedDebitsResourceReversalDetails($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\ReceivedDebit\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

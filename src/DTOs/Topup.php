<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Top-up
 *
 * To top up your Stripe balance, you create a top-up object. You can retrieve
 * individual top-ups, as well as list all top-ups. Top-ups are identified by a
 * unique, random ID.
 *
 * Related guide: [Topping up your platform account](https://docs.stripe.com/connect/top-ups)
 */
final class Topup extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'id',
        'livemode',
        'metadata',
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
        'currency' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
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
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'transfer_group' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount transferred.
     */
    public int $amount;
    /**
     * ID of the balance transaction that describes the impact of this top-up on your account balance. May not be specified depending on status of top-up.
     */
    public ?\StripeSDK\DTOs\Topup\BalanceTransactionDTO $balance_transaction;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
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
     * Date the funds are expected to arrive in your Stripe account for payouts. This factors in delays like weekends or bank holidays. May not be specified depending on status of top-up.
     */
    public ?int $expected_availability_date;
    /**
     * Error code explaining reason for top-up failure if available (see [the errors section](/api/errors) for a list of codes).
     */
    public ?string $failure_code {
        set {
            $this->assigning('failure_code', $value);
            $this->failure_code = $value;
        }
    }
    /**
     * Message to user further explaining reason for top-up failure if available.
     */
    public ?string $failure_message {
        set {
            $this->assigning('failure_message', $value);
            $this->failure_message = $value;
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
     * Indicates whether the top-up was initiated by Stripe or by the user.
     */
    public ?\StripeSDK\Enums\Topup\InitiatedByEnum $initiated_by;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Topup\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Topup\ObjectEnum $object_;
    /**
     * The ID of a PaymentMethod representing the payment method used for the top-up. A PaymentMethod of type `us_bank_account` can be used.
     */
    public ?\StripeSDK\DTOs\Topup\PaymentMethodDTO $payment_method;
    /**
     * Payment-method-specific configuration for this top-up.
     */
    public ?\StripeSDK\DTOs\TopupResourcePaymentMethodOptions $payment_method_options;
    /**
     * The source field is deprecated. It might not always be present in the API response.
     */
    public ?\StripeSDK\DTOs\Source $source;
    /**
     * Extra information about a top-up. This will appear on your source's bank statement. It must contain at least one letter.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * The status of the top-up is either `canceled`, `failed`, `pending`, `reversed`, or `succeeded`.
     */
    public \StripeSDK\Enums\Topup\StatusEnum $status;
    /**
     * A string that identifies this top-up as part of a group.
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
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expected_availability_date' => $value === null || is_int($value) ? $this->expected_availability_date = $value : parent::assignMember($name, $value),
            'failure_code' => $value === null || is_string($value) ? $this->failure_code = $value : parent::assignMember($name, $value),
            'failure_message' => $value === null || is_string($value) ? $this->failure_message = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'initiated_by' => $value === null || is_string($value) ? $this->initiated_by = $value === null ? null : \StripeSDK\Enums\Topup\InitiatedByEnum::from($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Topup\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\TopupResourcePaymentMethodOptions($value) : parent::assignMember($name, $value),
            'source' => $value === null || $value instanceof \stdClass ? $this->source = $value === null ? null : new \StripeSDK\DTOs\Source($value) : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Topup\StatusEnum::from($value) : parent::assignMember($name, $value),
            'transfer_group' => $value === null || is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

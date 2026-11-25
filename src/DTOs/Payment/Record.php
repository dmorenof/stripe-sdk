<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * Payment Record
 *
 * A Payment Record is a resource that allows you to represent payments that occur on- or off-Stripe.
 * For example, you can create a Payment Record to model a payment made on a different payment processor,
 * in order to mark an Invoice as paid and a Subscription as active. Payment Records consist of one or
 * more Payment Attempt Records, which represent individual attempts made on a payment network.
 */
final class Record extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_authorized',
        'amount_canceled',
        'amount_failed',
        'amount_guaranteed',
        'amount_refunded',
        'amount_requested',
        'created',
        'id',
        'livemode',
        'metadata',
        'object_',
        'processor_details',
        'reported_by',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'application' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'latest_payment_attempt_record' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount $amount;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount $amount_authorized;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount $amount_canceled;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount $amount_failed;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount $amount_guaranteed;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount $amount_refunded;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount $amount_requested;
    /**
     * ID of the Connect application that created the PaymentRecord.
     */
    public ?string $application {
        set {
            $this->assigning('application', $value);
            $this->application = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Customer information for this payment.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceCustomerDetails $customer_details;
    /**
     * Indicates whether the customer was present in your checkout flow during this payment.
     */
    public ?\StripeSDK\Enums\Payment\Record\CustomerPresenceEnum $customer_presence;
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
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * ID of the latest Payment Attempt Record attached to this Payment Record.
     */
    public ?string $latest_payment_attempt_record {
        set {
            $this->assigning('latest_payment_attempt_record', $value);
            $this->latest_payment_attempt_record = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Payment\Record\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Payment\Record\ObjectEnum $object_;
    /**
     * Information about the Payment Method debited for this payment.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\Details $payment_method_details;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceProcessorDetails $processor_details;
    /**
     * Indicates who reported the payment.
     */
    public \StripeSDK\Enums\Payment\Record\ReportedByEnum $reported_by;
    /**
     * Shipping information for this payment.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceShippingDetails $shipping_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value instanceof \stdClass ? $this->amount = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount($value) : parent::assignMember($name, $value),
            'amount_authorized' => $value instanceof \stdClass ? $this->amount_authorized = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount($value) : parent::assignMember($name, $value),
            'amount_canceled' => $value instanceof \stdClass ? $this->amount_canceled = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount($value) : parent::assignMember($name, $value),
            'amount_failed' => $value instanceof \stdClass ? $this->amount_failed = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount($value) : parent::assignMember($name, $value),
            'amount_guaranteed' => $value instanceof \stdClass ? $this->amount_guaranteed = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount($value) : parent::assignMember($name, $value),
            'amount_refunded' => $value instanceof \stdClass ? $this->amount_refunded = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount($value) : parent::assignMember($name, $value),
            'amount_requested' => $value instanceof \stdClass ? $this->amount_requested = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceAmount($value) : parent::assignMember($name, $value),
            'application' => $value === null || is_string($value) ? $this->application = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_details' => $value === null || $value instanceof \stdClass ? $this->customer_details = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceCustomerDetails($value) : parent::assignMember($name, $value),
            'customer_presence' => $value === null || is_string($value) ? $this->customer_presence = $value === null ? null : \StripeSDK\Enums\Payment\Record\CustomerPresenceEnum::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'latest_payment_attempt_record' => $value === null || is_string($value) ? $this->latest_payment_attempt_record = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Payment\Record\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_details' => $value === null || $value instanceof \stdClass ? $this->payment_method_details = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\Details($value) : parent::assignMember($name, $value),
            'processor_details' => $value instanceof \stdClass ? $this->processor_details = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceProcessorDetails($value) : parent::assignMember($name, $value),
            'reported_by' => is_string($value) ? $this->reported_by = \StripeSDK\Enums\Payment\Record\ReportedByEnum::from($value) : parent::assignMember($name, $value),
            'shipping_details' => $value === null || $value instanceof \stdClass ? $this->shipping_details = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceShippingDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

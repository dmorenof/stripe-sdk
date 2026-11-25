<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ReportPayment;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_requested',
        'initiated_at',
        'payment_method_details',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount you initially requested for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\AmountRequestedRequest $amount_requested;
    /**
     * Information about the payment attempt cancelation.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\ReportPaymentCanceledRequest $canceled;
    /**
     * Customer information for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\CustomerDetailsRequest $customer_details;
    /**
     * Indicates whether the customer was present in your checkout flow during this payment.
     */
    public \StripeSDK\Enums\V1\PaymentRecords\ReportPayment\Post\CustomerPresenceEnum $customer_presence;
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
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Information about the payment attempt failure.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\ReportPaymentFailedRequest $failed;
    /**
     * Information about the payment attempt guarantee.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\ReportPaymentGuaranteedRequest $guaranteed;
    /**
     * When the reported payment was initiated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $initiated_at;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\ReportPaymentMetadataRequest $metadata;
    /**
     * The outcome of the reported payment.
     */
    public \StripeSDK\Enums\V1\PaymentRecords\ReportPayment\Post\ReportPaymentOutcomeEnum $outcome;
    /**
     * Information about the Payment Method debited for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\MethodDetailsRequest $payment_method_details;
    /**
     * Processor information for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\ProcessorDetailsRequest $processor_details;
    /**
     * Shipping information for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post\ShippingDetailsRequest $shipping_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_presence' => is_string($value) ? $this->customer_presence = \StripeSDK\Enums\V1\PaymentRecords\ReportPayment\Post\CustomerPresenceEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'initiated_at' => is_int($value) ? $this->initiated_at = $value : parent::assignMember($name, $value),
            'outcome' => is_string($value) ? $this->outcome = \StripeSDK\Enums\V1\PaymentRecords\ReportPayment\Post\ReportPaymentOutcomeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

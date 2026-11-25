<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'initiated_at',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Information about the payment attempt cancelation.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\ReportPaymentAttemptCanceledRequest $canceled;
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
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\ReportPaymentAttemptFailedRequest $failed;
    /**
     * Information about the payment attempt guarantee.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\ReportPaymentAttemptGuaranteedRequest $guaranteed;
    /**
     * When the reported payment was initiated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $initiated_at;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\ReportPaymentAttemptMetadataRequest $metadata;
    /**
     * The outcome of the reported payment.
     */
    public \StripeSDK\Enums\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\ReportPaymentAttemptOutcomeEnum $outcome;
    /**
     * Information about the Payment Method debited for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\MethodDetailsRequest $payment_method_details;
    /**
     * Shipping information for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\ShippingDetailsRequest $shipping_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'initiated_at' => is_int($value) ? $this->initiated_at = $value : parent::assignMember($name, $value),
            'outcome' => is_string($value) ? $this->outcome = \StripeSDK\Enums\V1\PaymentRecords\ById\ReportPaymentAttempt\Post\ReportPaymentAttemptOutcomeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'outcome',
        'processor_details',
    ];

    /**
     * A positive integer in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal) representing how much of this payment to refund. Can refund only up to the remaining, unrefunded amount of the payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post\ReportRefundAmountRequest $amount;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * When the reported refund was initiated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $initiated_at;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post\ReportRefundMetadataRequest $metadata;
    /**
     * The outcome of the reported refund.
     */
    public \StripeSDK\Enums\V1\PaymentRecords\ById\ReportRefund\Post\ReportRefundOutcomeEnum $outcome;
    /**
     * Processor information for this refund.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post\ProcessorDetailsRequest $processor_details;
    /**
     * Information about the payment attempt refund.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post\ReportRefundRefundedRequest $refunded;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'initiated_at' => is_int($value) ? $this->initiated_at = $value : parent::assignMember($name, $value),
            'outcome' => is_string($value) ? $this->outcome = \StripeSDK\Enums\V1\PaymentRecords\ById\ReportRefund\Post\ReportRefundOutcomeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

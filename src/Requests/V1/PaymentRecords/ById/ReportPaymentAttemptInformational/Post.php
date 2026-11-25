<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Customer information for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational\Post\CustomerDetailsRequest $customer_details;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational\Post\ReportPaymentAttemptInformationalDescriptionRequest $description;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational\Post\ReportPaymentAttemptInformationalMetadataRequest $metadata;
    /**
     * Shipping information for this payment.
     */
    public \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational\Post\ShippingDetailsRequest $shipping_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\PaymentEvaluations;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_details',
        'payment_details',
    ];

    /**
     * Details about the Client Device Metadata to associate with the payment evaluation.
     */
    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\MetadataDetailsRequest $client_device_metadata_details;
    /**
     * Details about the customer associated with the payment evaluation.
     */
    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\CustomerDetailsRequest $customer_details;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\MetadataMapRequest $metadata;
    /**
     * Details about the payment.
     */
    public \StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post\PaymentDetailsRequest $payment_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

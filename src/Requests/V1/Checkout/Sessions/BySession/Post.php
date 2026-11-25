<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\BySession;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Information about the customer collected within the Checkout Session. Can only be set when updating `embedded_page` or `elements` sessions.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\CollectedInformationRequest $collected_information;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A list of items the customer is purchasing.
     *
     * When updating line items, you must retransmit the entire array of line items.
     *
     * To retain an existing line item, specify its `id`.
     *
     * To update an existing line item, specify its `id` along with the new values of the fields to update.
     *
     * To add a new line item, specify one of `price` or `price_data` and `quantity`.
     *
     * To remove an existing line item, omit the line item's ID from the retransmitted array.
     *
     * To reorder a line item, specify it at the desired position in the retransmitted array.
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\BySession\Post\LineItemsCollection $line_items;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\BySessionMetadataRequest $metadata;
    /**
     * The shipping rate options to apply to this Session. Up to a maximum of 5.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\ShippingOptionsRequest $shipping_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

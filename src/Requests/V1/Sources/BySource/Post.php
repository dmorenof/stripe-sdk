<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\BySource;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Amount associated with the source.
     */
    public int $amount;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Information about a mandate possibility attached to a source object (generally for bank debits) as well as its acceptance status.
     */
    public \StripeSDK\Requests\V1\Sources\BySource\Post\BySourceMandateRequest $mandate;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Sources\BySource\Post\BySourceMetadataRequest $metadata;
    /**
     * Information about the owner of the payment instrument that may be used or required by particular source types.
     */
    public \StripeSDK\Requests\V1\Sources\BySource\Post\BySourceOwnerRequest $owner;
    /**
     * Information about the items and shipping associated with the source. Required for transactional credit (for example Klarna) sources before you can charge it.
     */
    public \StripeSDK\Requests\V1\Sources\BySource\Post\SourceOrderRequest $source_order;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

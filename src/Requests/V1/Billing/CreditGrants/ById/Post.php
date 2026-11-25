<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\CreditGrants\ById;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The time when the billing credits created by this credit grant expire. If set to empty, the billing credits never expire.
     */
    public \StripeSDK\Requests\V1\Billing\CreditGrants\ById\Post\ExpiresAtRequest $expires_at;
    /**
     * Set of key-value pairs you can attach to an object. You can use this to store additional information about the object (for example, cost basis) in a structured format.
     */
    public \StripeSDK\Requests\V1\Billing\CreditGrants\ById\Post\MetadataMapRequest $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

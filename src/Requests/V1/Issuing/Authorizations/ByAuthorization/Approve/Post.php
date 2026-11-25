<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Approve;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If the authorization's `pending_request.is_amount_controllable` property is `true`, you may provide this value to control how much to hold for the authorization. Must be positive (use [`decline`](https://docs.stripe.com/api/issuing/authorizations/decline) to decline an authorization request).
     */
    public int $amount;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Approve\Post\ApproveMetadataRequest $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Capabilities\ByCapability;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * To request a new capability for an account, pass true. There can be a delay before the requested capability becomes active. If the capability has any activation requirements, the response includes them in the `requirements` arrays.
     *
     * If a capability isn't permanent, you can remove it from the account by passing false. Some capabilities are permanent after they've been requested. Attempting to remove a permanent capability returns an error.
     */
    public bool $requested;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'requested' => is_bool($value) ? $this->requested = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

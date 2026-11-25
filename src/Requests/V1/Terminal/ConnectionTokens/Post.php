<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\ConnectionTokens;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'location' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The id of the location that this connection token is scoped to. If specified the connection token will only be usable with readers assigned to that location, otherwise the connection token will be usable with all readers. Note that location scoping only applies to internet-connected readers. For more details, see [the docs on scoping connection tokens](https://docs.stripe.com/terminal/fleet/locations-and-zones?dashboard-or-api=api#connection-tokens).
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tracking_details',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Details about network-specific tracking information.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Post\TrackingDetailsRequest $tracking_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Post;

/**
 * tracking_details_params
 *
 * Details about network-specific tracking information.
 */
final class TrackingDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Post\TrackingDetails\DetailsAchRequest $ach;
    public \StripeSDK\Enums\V1\TestHelpers\Treasury\OutboundPayments\ById\Post\TrackingDetails\DetailsTypeEnum $type;
    public \StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Post\TrackingDetails\DomesticWireRequest $us_domestic_wire;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\TestHelpers\Treasury\OutboundPayments\ById\Post\TrackingDetails\DetailsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Calculations\Post;

/**
 * ship_from_details
 *
 * Details about the address from which the goods are being shipped.
 */
final class FromDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    public \StripeSDK\Requests\V1\Tax\Calculations\Post\ShipFromDetails\DetailsAddressRequest $address;
}

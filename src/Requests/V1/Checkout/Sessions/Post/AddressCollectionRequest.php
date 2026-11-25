<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * shipping_address_collection_params
 *
 * When set, provides configuration for Checkout to collect a shipping address from a customer.
 */
final class AddressCollectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allowed_countries',
    ];

    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\ShippingAddressCollection\AllowedCountriesCollection $allowed_countries;
}

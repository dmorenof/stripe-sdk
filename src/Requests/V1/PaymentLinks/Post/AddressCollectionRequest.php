<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * shipping_address_collection_params
 *
 * Configuration for collecting the customer's shipping address.
 */
final class AddressCollectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allowed_countries',
    ];

    public \StripeSDK\Collections\V1\PaymentLinks\Post\ShippingAddressCollection\AllowedCountriesCollection $allowed_countries;
}

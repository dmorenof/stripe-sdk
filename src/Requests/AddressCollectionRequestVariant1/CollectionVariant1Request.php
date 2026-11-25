<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AddressCollectionRequestVariant1;

/**
 * shipping_address_collection_params
 */
final class CollectionVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allowed_countries',
    ];

    public \StripeSDK\Collections\AddressCollectionRequestVariant1\AllowedCountriesCollection $allowed_countries;
}

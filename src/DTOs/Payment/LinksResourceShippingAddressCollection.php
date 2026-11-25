<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceShippingAddressCollection
 */
final class LinksResourceShippingAddressCollection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allowed_countries',
    ];

    /**
     * An array of two-letter ISO country codes representing which countries Checkout should provide as options for shipping locations. Unsupported country codes: `AS, CX, CC, CU, HM, IR, KP, MH, FM, NF, MP, PW, SD, SY, UM, VI`.
     */
    public \StripeSDK\Collections\Payment\LinksResourceShippingAddressCollection\AllowedCountriesCollection $allowed_countries;
}

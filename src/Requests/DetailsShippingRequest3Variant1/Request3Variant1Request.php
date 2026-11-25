<?php

declare(strict_types=1);

namespace StripeSDK\Requests\DetailsShippingRequest3Variant1;

/**
 * amount_details_shipping_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\DetailsShippingRequest3Variant1\DetailsShippingRequest3Variant1AmountRequest $amount;
    public \StripeSDK\Requests\DetailsShippingRequest3Variant1\PostalCodeRequest $from_postal_code;
    public \StripeSDK\Requests\DetailsShippingRequest3Variant1\AnyOfToPostalCode\PostalCodeRequest $to_postal_code;
}

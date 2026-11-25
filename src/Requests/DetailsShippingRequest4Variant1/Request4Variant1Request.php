<?php

declare(strict_types=1);

namespace StripeSDK\Requests\DetailsShippingRequest4Variant1;

/**
 * amount_details_shipping_param
 */
final class Request4Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\DetailsShippingRequest4Variant1\DetailsShippingRequest4Variant1AmountRequest $amount;
    public \StripeSDK\Requests\DetailsShippingRequest4Variant1\PostalCodeRequest $from_postal_code;
    public \StripeSDK\Requests\DetailsShippingRequest4Variant1\AnyOfToPostalCode\PostalCodeRequest $to_postal_code;
}

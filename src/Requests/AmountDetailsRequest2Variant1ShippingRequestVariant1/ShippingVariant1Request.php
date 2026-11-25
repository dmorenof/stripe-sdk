<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequest2Variant1ShippingRequestVariant1;

/**
 * amount_details_shipping_param
 */
final class ShippingVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AmountDetailsRequest2Variant1ShippingRequestVariant1\AmountDetailsRequest2Variant1ShippingRequestVariant1AmountRequest $amount;
    public \StripeSDK\Requests\AmountDetailsRequest2Variant1ShippingRequestVariant1\PostalCodeRequest $from_postal_code;
    public \StripeSDK\Requests\AmountDetailsRequest2Variant1ShippingRequestVariant1\AnyOfToPostalCode\PostalCodeRequest $to_postal_code;
}

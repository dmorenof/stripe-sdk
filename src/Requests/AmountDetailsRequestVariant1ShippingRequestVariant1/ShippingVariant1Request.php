<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequestVariant1ShippingRequestVariant1;

/**
 * amount_details_shipping_param
 */
final class ShippingVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AmountDetailsRequestVariant1ShippingRequestVariant1\AmountDetailsRequestVariant1ShippingRequestVariant1AmountRequest $amount;
    public \StripeSDK\Requests\AmountDetailsRequestVariant1ShippingRequestVariant1\PostalCodeRequest $from_postal_code;
    public \StripeSDK\Requests\AmountDetailsRequestVariant1ShippingRequestVariant1\AnyOfToPostalCode\PostalCodeRequest $to_postal_code;
}

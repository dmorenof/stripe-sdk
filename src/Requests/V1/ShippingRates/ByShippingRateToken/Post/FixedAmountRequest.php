<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken\Post;

/**
 * fixed_amount_update
 *
 * Describes a fixed amount to charge for shipping. Must be present if type is `fixed_amount`.
 */
final class FixedAmountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken\Post\FixedAmount\OptionsMapRequest $currency_options;
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Meal vouchers in France, or “titres-restaurant”, is a local benefits program commonly offered by employers for their employees to purchase prepared food and beverages on working days. Check this [page](https://docs.stripe.com/payments/meal-vouchers/fr-meal-vouchers) for more details.
 */
final class VoucherConecsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\FrMealVoucherConecs\DisplayPreferenceRequest $display_preference;
}

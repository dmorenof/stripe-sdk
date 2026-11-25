<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Klarna gives customers a range of [payment options](https://docs.stripe.com/payments/klarna#payment-options) during checkout. Available payment options vary depending on the customer's billing address and the transaction amount. These payment options make it convenient for customers to purchase items in all price ranges. Check this [page](https://docs.stripe.com/payments/klarna) for more details.
 */
final class ByConfigurationKlarnaRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Klarna\DisplayPreferenceRequest $display_preference;
}

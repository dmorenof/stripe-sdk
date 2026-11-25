<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Przelewy24 is a Poland-based payment method aggregator that allows customers to complete transactions online using bank transfers and other methods. Bank transfers account for 30% of online payments in Poland and Przelewy24 provides a way for customers to pay with over 165 banks. Check this [page](https://docs.stripe.com/payments/p24) for more details.
 */
final class ByConfigurationP24Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\P24\DisplayPreferenceRequest $display_preference;
}

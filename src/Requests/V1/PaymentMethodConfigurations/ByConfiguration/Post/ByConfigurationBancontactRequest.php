<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Bancontact is the most popular online payment method in Belgium, with over 15 million cards in circulation. [Customers](https://docs.stripe.com/api/customers) use a Bancontact card or mobile app linked to a Belgian bank account to make online payments that are secure, guaranteed, and confirmed immediately. Check this [page](https://docs.stripe.com/payments/bancontact) for more details.
 */
final class ByConfigurationBancontactRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Bancontact\DisplayPreferenceRequest $display_preference;
}

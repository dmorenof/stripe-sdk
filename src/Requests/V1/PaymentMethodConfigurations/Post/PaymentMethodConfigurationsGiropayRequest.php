<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * giropay is a German payment method based on online banking, introduced in 2006. It allows customers to complete transactions online using their online banking environment, with funds debited from their bank account. Depending on their bank, customers confirm payments on giropay using a second factor of authentication or a PIN. giropay accounts for 10% of online checkouts in Germany. Check this [page](https://docs.stripe.com/payments/giropay) for more details.
 */
final class PaymentMethodConfigurationsGiropayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Giropay\DisplayPreferenceRequest $display_preference;
}

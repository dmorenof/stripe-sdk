<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * GrabPay is a payment method developed by [Grab](https://www.grab.com/sg/consumer/finance/pay/). GrabPay is a digital wallet - customers maintain a balance in their wallets that they pay out with. Check this [page](https://docs.stripe.com/payments/grabpay) for more details.
 */
final class ByConfigurationGrabpayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Grabpay\DisplayPreferenceRequest $display_preference;
}

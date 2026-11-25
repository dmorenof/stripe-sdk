<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * JCB is a credit card company based in Japan. JCB is currently available in Japan to businesses approved by JCB, and available to all businesses in Australia, Canada, Hong Kong, Japan, New Zealand, Singapore, Switzerland, United Kingdom, United States, and all countries in the European Economic Area except Iceland. Check this [page](https://support.stripe.com/questions/accepting-japan-credit-bureau-%28jcb%29-payments) for more details.
 */
final class PaymentMethodConfigurationsJcbRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Jcb\DisplayPreferenceRequest $display_preference;
}

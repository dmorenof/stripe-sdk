<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Afterpay gives your customers a way to pay for purchases in installments, check this [page](https://docs.stripe.com/payments/afterpay-clearpay) for more details like country availability. Afterpay is particularly popular among businesses selling fashion, beauty, and sports products.
 */
final class AfterpayClearpayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\AfterpayClearpay\DisplayPreferenceRequest $display_preference;
}

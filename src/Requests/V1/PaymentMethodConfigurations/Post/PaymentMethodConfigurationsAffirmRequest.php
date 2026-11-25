<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * [Affirm](https://www.affirm.com/) gives your customers a way to split purchases over a series of payments. Depending on the purchase, they can pay with four interest-free payments (Split Pay) or pay over a longer term (Installments), which might include interest. Check this [page](https://docs.stripe.com/payments/affirm) for more details like country availability.
 */
final class PaymentMethodConfigurationsAffirmRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Affirm\DisplayPreferenceRequest $display_preference;
}

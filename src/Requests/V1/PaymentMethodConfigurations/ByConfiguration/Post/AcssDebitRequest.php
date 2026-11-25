<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Canadian pre-authorized debit payments, check this [page](https://docs.stripe.com/payments/acss-debit) for more details like country availability.
 */
final class AcssDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\AcssDebit\DisplayPreferenceRequest $display_preference;
}

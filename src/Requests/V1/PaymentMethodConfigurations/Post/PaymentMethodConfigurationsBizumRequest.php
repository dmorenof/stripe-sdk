<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * To enable Bizum, buyers need a Spanish IBAN from a bank connected to Bizum. Within their banking app, they can enable Bizum and link their mobile number to their IBAN.
 */
final class PaymentMethodConfigurationsBizumRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Bizum\DisplayPreferenceRequest $display_preference;
}

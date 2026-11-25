<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Pay by bank is a redirect payment method backed by bank transfers. A customer is redirected to their bank to authorize a bank transfer for a given amount. This removes a lot of the error risks inherent in waiting for the customer to initiate a transfer themselves, and is less expensive than card payments.
 */
final class ByBankRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\PayByBank\DisplayPreferenceRequest $display_preference;
}

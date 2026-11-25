<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Apple Pay Later, a payment method for customers to buy now and pay later, gives your customers a way to split purchases into four installments across six weeks.
 */
final class PayLaterRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\ApplePayLater\DisplayPreferenceRequest $display_preference;
}

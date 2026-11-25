<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\Post;

/**
 * param
 *
 * If this is a `upi` PaymentMethod, this hash contains details about the UPI payment method.
 */
final class PaymentMethodsUpiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethods\Post\Upi\MandateOptionsRequest $mandate_options;
}

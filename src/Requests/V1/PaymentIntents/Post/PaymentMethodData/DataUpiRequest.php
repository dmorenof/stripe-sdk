<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData;

/**
 * param
 */
final class DataUpiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\Upi\MandateOptionsRequest $mandate_options;
}

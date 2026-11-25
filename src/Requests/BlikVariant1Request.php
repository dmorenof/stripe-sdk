<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * subscription_payment_method_options_param
 */
final class BlikVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsBlikRequestVariant1\MandateOptionsRequest $mandate_options;
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * invoice_payment_method_options_param
 */
final class UpiVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsUpiRequestVariant1\MandateOptionsRequest $mandate_options;
}

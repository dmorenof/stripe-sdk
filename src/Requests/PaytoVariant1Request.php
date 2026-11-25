<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * invoice_payment_method_options_param
 */
final class PaytoVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsPaytoRequestVariant1\MandateOptionsRequest $mandate_options;
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions;

/**
 * setup_intent_payment_method_options_param
 */
final class BacsDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\BacsDebit\MandateOptionsRequest $mandate_options;
}

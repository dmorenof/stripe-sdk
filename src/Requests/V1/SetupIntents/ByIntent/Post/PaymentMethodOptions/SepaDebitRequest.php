<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions;

/**
 * setup_intent_payment_method_options_param
 */
final class SepaDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\SepaDebit\MandateOptionsRequest $mandate_options;
}

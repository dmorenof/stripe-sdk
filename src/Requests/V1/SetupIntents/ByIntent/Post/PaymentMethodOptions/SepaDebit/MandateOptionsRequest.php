<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\SepaDebit;

/**
 * payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\SepaDebit\MandateOptions\ReferencePrefixRequest $reference_prefix;
}

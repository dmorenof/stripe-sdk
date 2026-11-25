<?php

declare(strict_types=1);

namespace StripeSDK\Requests\SepaDebitRequest6Variant1;

/**
 * payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\SepaDebitRequest6Variant1\MandateOptions\ReferencePrefixRequest $reference_prefix;
}

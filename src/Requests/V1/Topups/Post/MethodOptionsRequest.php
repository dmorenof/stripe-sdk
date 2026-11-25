<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Topups\Post;

/**
 * payment_method_options_param
 *
 * Payment method-specific configuration for this top-up.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Topups\Post\PaymentMethodOptions\BankAccountRequest $us_bank_account;
}

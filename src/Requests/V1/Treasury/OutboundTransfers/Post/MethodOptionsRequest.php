<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post;

/**
 * payment_method_options
 *
 * Hash describing payment method configuration details.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post\DestinationPaymentMethodOptions\BankAccountRequest $us_bank_account;
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundPayments\Post;

/**
 * payment_method_options
 *
 * Payment method-specific configuration for this OutboundPayment.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodOptions\BankAccountRequest $us_bank_account;
}

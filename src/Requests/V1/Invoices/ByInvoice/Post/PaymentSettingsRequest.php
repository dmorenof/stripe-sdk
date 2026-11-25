<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Post;

/**
 * payment_settings
 *
 * Configuration settings for the PaymentIntent that is generated when the invoice is finalized.
 */
final class PaymentSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\PaymentSettings\DefaultMandateRequest $default_mandate;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\PaymentSettings\MethodOptionsRequest $payment_method_options;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\PaymentSettings\MethodTypesRequest $payment_method_types;
}

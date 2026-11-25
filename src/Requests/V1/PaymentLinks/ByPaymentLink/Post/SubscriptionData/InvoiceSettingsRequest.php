<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\SubscriptionData;

/**
 * subscription_data_invoice_settings_params
 */
final class InvoiceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\SubscriptionData\InvoiceSettings\SettingsIssuerRequest $issuer;
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData;

/**
 * invoice_settings_params
 */
final class InvoiceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\InvoiceSettings\SettingsIssuerRequest $issuer;
}

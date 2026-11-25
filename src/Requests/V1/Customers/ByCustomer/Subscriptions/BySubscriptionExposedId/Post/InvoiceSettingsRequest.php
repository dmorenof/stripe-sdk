<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post;

/**
 * invoice_settings_update_param
 *
 * All invoices will be billed using the specified settings.
 */
final class InvoiceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\InvoiceSettings\TaxIdsRequest $account_tax_ids;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\InvoiceSettings\CustomFieldsRequest $custom_fields;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\InvoiceSettings\SettingsDescriptionRequest $description;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\InvoiceSettings\SettingsFooterRequest $footer;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\InvoiceSettings\SettingsIssuerRequest $issuer;
}

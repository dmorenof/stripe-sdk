<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post;

/**
 * features_creation_param
 *
 * Information about the features available in the portal.
 */
final class ConfigurationsFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\CustomerUpdateRequest $customer_update;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\InvoiceHistoryRequest $invoice_history;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\MethodUpdateRequest $payment_method_update;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancelRequest $subscription_cancel;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionUpdateRequest $subscription_update;
}

<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post;

/**
 * features_updating_param
 *
 * Information about the features available in the portal.
 */
final class ByConfigurationFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\CustomerUpdateRequest $customer_update;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\InvoiceHistoryRequest $invoice_history;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\MethodUpdateRequest $payment_method_update;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionCancelRequest $subscription_cancel;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdateRequest $subscription_update;
}

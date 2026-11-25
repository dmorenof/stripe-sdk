<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

/**
 * subscription_data_update_params
 *
 * When creating a subscription, the specified configuration data will be used. There must be at least one line item with a recurring price to use `subscription_data`.
 */
final class SubscriptionDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\SubscriptionData\InvoiceSettingsRequest $invoice_settings;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\SubscriptionData\DataMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\SubscriptionData\PeriodDaysRequest $trial_period_days;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\SubscriptionData\TrialSettingsRequest $trial_settings;
}

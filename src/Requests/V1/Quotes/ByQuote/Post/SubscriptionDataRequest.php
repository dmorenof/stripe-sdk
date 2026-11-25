<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\ByQuote\Post;

/**
 * subscription_data_update_params
 *
 * When creating a subscription or subscription schedule, the specified configuration data will be used. There must be at least one line item with a recurring price for a subscription or subscription schedule to be created. A subscription schedule is created if `subscription_data[effective_date]` is present and in the future, otherwise a subscription is created.
 */
final class SubscriptionDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\SubscriptionData\DataDescriptionRequest $description;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\SubscriptionData\EffectiveDateRequest $effective_date;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\SubscriptionData\MetadataMapRequest $metadata;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\SubscriptionData\PeriodDaysRequest $trial_period_days;
}

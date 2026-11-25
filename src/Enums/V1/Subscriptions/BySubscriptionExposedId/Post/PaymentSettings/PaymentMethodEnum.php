<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Post\PaymentSettings;

enum PaymentMethodEnum: string
{
    case Off = 'off';
    case OnSubscription = 'on_subscription';
}

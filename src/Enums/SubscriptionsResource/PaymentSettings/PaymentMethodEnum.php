<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\PaymentSettings;

enum PaymentMethodEnum: string
{
    case Off = 'off';
    case OnSubscription = 'on_subscription';
}

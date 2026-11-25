<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptions;

enum DefaultForEnum: string
{
    case Invoice = 'invoice';
    case Subscription = 'subscription';
}

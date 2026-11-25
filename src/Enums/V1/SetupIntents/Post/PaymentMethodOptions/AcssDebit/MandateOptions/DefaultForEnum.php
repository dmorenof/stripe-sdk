<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit\MandateOptions;

enum DefaultForEnum: string
{
    case Invoice = 'invoice';
    case Subscription = 'subscription';
}

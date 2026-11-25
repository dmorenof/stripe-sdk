<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\AcssDebit\MandateOptions;

enum DefaultForEnum: string
{
    case Invoice = 'invoice';
    case Subscription = 'subscription';
}

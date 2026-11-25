<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\AcssDebitMandateOptions;

enum DefaultForEnum: string
{
    case Invoice = 'invoice';
    case Subscription = 'subscription';
}

<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\IntentPaymentMethodOptionsMandateOptionsAcssDebit;

enum DefaultForEnum: string
{
    case Invoice = 'invoice';
    case Subscription = 'subscription';
}

<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\TrialSettingsEndBehavior;

enum PaymentMethodEnum: string
{
    case Cancel = 'cancel';
    case CreateInvoice = 'create_invoice';
    case Pause = 'pause';
}

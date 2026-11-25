<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TrialSettingsRequestVariant1\EndBehavior;

enum PaymentMethodEnum: string
{
    case Cancel = 'cancel';
    case CreateInvoice = 'create_invoice';
    case Pause = 'pause';
}

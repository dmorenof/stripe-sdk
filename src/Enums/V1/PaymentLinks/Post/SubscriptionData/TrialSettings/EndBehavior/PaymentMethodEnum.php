<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\SubscriptionData\TrialSettings\EndBehavior;

enum PaymentMethodEnum: string
{
    case Cancel = 'cancel';
    case CreateInvoice = 'create_invoice';
    case Pause = 'pause';
}

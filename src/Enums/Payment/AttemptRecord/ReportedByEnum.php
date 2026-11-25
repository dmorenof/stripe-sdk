<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\AttemptRecord;

enum ReportedByEnum: string
{
    case Self_ = 'self';
    case Stripe = 'stripe';
}

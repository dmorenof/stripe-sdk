<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\PagesCheckoutSessionConsent;

enum PromotionsEnum: string
{
    case OptIn = 'opt_in';
    case OptOut = 'opt_out';
}

<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\ByInvoice\Post\AutomaticTax\Liability;

enum LiabilityTypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}

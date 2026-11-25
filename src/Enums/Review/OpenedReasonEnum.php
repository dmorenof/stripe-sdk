<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Review;

enum OpenedReasonEnum: string
{
    case Manual = 'manual';
    case Rule = 'rule';
}

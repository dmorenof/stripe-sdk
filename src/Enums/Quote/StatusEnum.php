<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Quote;

enum StatusEnum: string
{
    case Accepted = 'accepted';
    case Canceled = 'canceled';
    case Draft = 'draft';
    case Open = 'open';
}

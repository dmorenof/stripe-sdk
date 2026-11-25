<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Dispute;

enum StatusEnum: string
{
    case Expired = 'expired';
    case Lost = 'lost';
    case Submitted = 'submitted';
    case Unsubmitted = 'unsubmitted';
    case Won = 'won';
}

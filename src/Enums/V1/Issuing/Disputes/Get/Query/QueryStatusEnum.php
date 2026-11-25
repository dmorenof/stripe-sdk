<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Disputes\Get\Query;

enum QueryStatusEnum: string
{
    case Expired = 'expired';
    case Lost = 'lost';
    case Submitted = 'submitted';
    case Unsubmitted = 'unsubmitted';
    case Won = 'won';
}

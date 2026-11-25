<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Post;

enum ReplacementReasonEnum: string
{
    case Damaged = 'damaged';
    case Expired = 'expired';
    case Lost = 'lost';
    case Stolen = 'stolen';
}

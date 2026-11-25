<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post;

enum CancellationReasonEnum: string
{
    case Lost = 'lost';
    case Stolen = 'stolen';
}

<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post;

enum DisputabilityLikelihoodEnum: string
{
    case Neutral = 'neutral';
    case Unknown = 'unknown';
    case VeryLikely = 'very_likely';
    case VeryUnlikely = 'very_unlikely';
}

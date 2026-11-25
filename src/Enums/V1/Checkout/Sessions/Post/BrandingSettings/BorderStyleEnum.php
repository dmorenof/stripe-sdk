<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings;

enum BorderStyleEnum: string
{
    case Empty_ = '';
    case Pill = 'pill';
    case Rectangular = 'rectangular';
    case Rounded = 'rounded';
}

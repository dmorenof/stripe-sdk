<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\PhysicalBundle;

enum TypeEnum: string
{
    case Custom = 'custom';
    case Standard = 'standard';
}

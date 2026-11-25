<?php

declare(strict_types=1);

namespace StripeSDK\Enums\NotReceivedRequestVariant1;

enum ProductTypeEnum: string
{
    case Empty_ = '';
    case Merchandise = 'merchandise';
    case Service = 'service';
}

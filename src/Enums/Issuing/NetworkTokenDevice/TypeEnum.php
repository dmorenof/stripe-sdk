<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\NetworkTokenDevice;

enum TypeEnum: string
{
    case Other = 'other';
    case Phone = 'phone';
    case Watch = 'watch';
}

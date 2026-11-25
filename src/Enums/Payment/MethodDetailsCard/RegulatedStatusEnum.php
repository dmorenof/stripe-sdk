<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDetailsCard;

enum RegulatedStatusEnum: string
{
    case Regulated = 'regulated';
    case Unregulated = 'unregulated';
}

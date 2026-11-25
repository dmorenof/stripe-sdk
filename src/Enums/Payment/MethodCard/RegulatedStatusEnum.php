<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodCard;

enum RegulatedStatusEnum: string
{
    case Regulated = 'regulated';
    case Unregulated = 'unregulated';
}

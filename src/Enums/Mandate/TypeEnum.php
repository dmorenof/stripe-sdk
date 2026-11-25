<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate;

enum TypeEnum: string
{
    case MultiUse = 'multi_use';
    case SingleUse = 'single_use';
}

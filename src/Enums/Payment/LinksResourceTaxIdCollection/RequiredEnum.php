<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\LinksResourceTaxIdCollection;

enum RequiredEnum: string
{
    case IfSupported = 'if_supported';
    case Never_ = 'never';
}

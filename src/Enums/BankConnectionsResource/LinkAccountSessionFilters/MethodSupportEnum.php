<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\LinkAccountSessionFilters;

enum MethodSupportEnum: string
{
    case All = 'all';
    case AtLeastOne = 'at_least_one';
    case None = 'none';
}

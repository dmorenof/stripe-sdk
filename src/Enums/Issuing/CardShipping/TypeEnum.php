<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardShipping;

enum TypeEnum: string
{
    case Bulk = 'bulk';
    case Individual = 'individual';
}

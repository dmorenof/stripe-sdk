<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Settings\Invoices;

enum MethodSaveEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
    case Offer = 'offer';
}

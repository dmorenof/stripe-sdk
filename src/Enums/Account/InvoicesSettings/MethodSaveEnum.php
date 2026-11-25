<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\InvoicesSettings;

enum MethodSaveEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
    case Offer = 'offer';
}

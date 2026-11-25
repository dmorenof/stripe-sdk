<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\UnificationAccountControllerFees;

enum PayerEnum: string
{
    case Account = 'account';
    case Application = 'application';
    case ApplicationCustom = 'application_custom';
    case ApplicationExpress = 'application_express';
}

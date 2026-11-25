<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails;

enum ActionEnum: string
{
    case None = 'none';
    case RelinkRequired = 'relink_required';
}

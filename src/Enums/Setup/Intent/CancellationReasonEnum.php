<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\Intent;

enum CancellationReasonEnum: string
{
    case Abandoned = 'abandoned';
    case Duplicate = 'duplicate';
    case RequestedByCustomer = 'requested_by_customer';
}

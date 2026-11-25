<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Intent;

enum CancellationReasonEnum: string
{
    case Abandoned = 'abandoned';
    case Automatic = 'automatic';
    case Duplicate = 'duplicate';
    case Expired = 'expired';
    case FailedInvoice = 'failed_invoice';
    case Fraudulent = 'fraudulent';
    case RequestedByCustomer = 'requested_by_customer';
    case VoidInvoice = 'void_invoice';
}

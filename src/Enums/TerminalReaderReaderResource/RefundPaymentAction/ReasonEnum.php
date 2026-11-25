<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TerminalReaderReaderResource\RefundPaymentAction;

enum ReasonEnum: string
{
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case RequestedByCustomer = 'requested_by_customer';
}

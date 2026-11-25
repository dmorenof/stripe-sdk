<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Disputes\Post\Evidence;

enum EvidenceReasonEnum: string
{
    case Canceled = 'canceled';
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case MerchandiseNotAsDescribed = 'merchandise_not_as_described';
    case NoValidAuthorization = 'no_valid_authorization';
    case NotReceived = 'not_received';
    case Other = 'other';
    case ServiceNotAsDescribed = 'service_not_as_described';
}

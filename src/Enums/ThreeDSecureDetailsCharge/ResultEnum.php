<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureDetailsCharge;

enum ResultEnum: string
{
    case AttemptAcknowledged = 'attempt_acknowledged';
    case Authenticated = 'authenticated';
    case DataShareOnly = 'data_share_only';
    case Exempted = 'exempted';
    case Failed = 'failed';
    case NotSupported = 'not_supported';
    case ProcessingError = 'processing_error';
}

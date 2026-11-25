<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecure\Authentication;

enum OutcomeEnum: string
{
    case Abandoned = 'abandoned';
    case AttemptAcknowledged = 'attempt_acknowledged';
    case Authenticated = 'authenticated';
    case Canceled = 'canceled';
    case Denied = 'denied';
    case Informational = 'informational';
    case InternalError = 'internal_error';
    case NotSupported = 'not_supported';
    case NotTriggered = 'not_triggered';
    case ProcessingError = 'processing_error';
    case Rejected = 'rejected';
}

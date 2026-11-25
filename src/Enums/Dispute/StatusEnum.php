<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute;

enum StatusEnum: string
{
    case Lost = 'lost';
    case NeedsResponse = 'needs_response';
    case Prevented = 'prevented';
    case UnderReview = 'under_review';
    case WarningClosed = 'warning_closed';
    case WarningNeedsResponse = 'warning_needs_response';
    case WarningUnderReview = 'warning_under_review';
    case Won = 'won';
}

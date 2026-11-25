<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedDebitsResourceReversalDetails;

enum RestrictedReasonEnum: string
{
    case AlreadyReversed = 'already_reversed';
    case DeadlinePassed = 'deadline_passed';
    case NetworkRestricted = 'network_restricted';
    case Other = 'other';
    case SourceFlowRestricted = 'source_flow_restricted';
}

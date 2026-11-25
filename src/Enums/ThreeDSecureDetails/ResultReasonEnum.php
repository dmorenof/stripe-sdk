<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureDetails;

enum ResultReasonEnum: string
{
    case Abandoned = 'abandoned';
    case Bypassed = 'bypassed';
    case Canceled = 'canceled';
    case CardNotEnrolled = 'card_not_enrolled';
    case NetworkNotSupported = 'network_not_supported';
    case ProtocolError = 'protocol_error';
    case Rejected = 'rejected';
}

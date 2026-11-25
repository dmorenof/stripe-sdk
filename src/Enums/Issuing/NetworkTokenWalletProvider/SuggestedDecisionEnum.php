<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\NetworkTokenWalletProvider;

enum SuggestedDecisionEnum: string
{
    case Approve = 'approve';
    case Decline = 'decline';
    case RequireAuth = 'require_auth';
}

<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Error = 'error';
    case Failed = 'failed';
    case RequiresChallenge = 'requires_challenge';
    case RequiresSubmission = 'requires_submission';
    case Succeeded = 'succeeded';
}

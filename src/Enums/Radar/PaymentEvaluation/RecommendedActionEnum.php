<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Radar\PaymentEvaluation;

enum RecommendedActionEnum: string
{
    case Block = 'block';
    case Continue_ = 'continue';
}

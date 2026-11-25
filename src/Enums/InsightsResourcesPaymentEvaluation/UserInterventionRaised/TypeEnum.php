<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\UserInterventionRaised;

enum TypeEnum: string
{
    case Value3ds = '3ds';
    case Captcha = 'captcha';
    case Custom = 'custom';
}

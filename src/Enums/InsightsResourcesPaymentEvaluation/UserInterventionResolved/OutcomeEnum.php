<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\UserInterventionResolved;

enum OutcomeEnum: string
{
    case Abandoned = 'abandoned';
    case Failed = 'failed';
    case Passed = 'passed';
}

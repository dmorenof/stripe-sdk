<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Company;

enum ExemptionReasonEnum: string
{
    case Empty_ = '';
    case QualifiedEntityExceedsOwnershipThreshold = 'qualified_entity_exceeds_ownership_threshold';
    case QualifiesAsFinancialInstitution = 'qualifies_as_financial_institution';
}

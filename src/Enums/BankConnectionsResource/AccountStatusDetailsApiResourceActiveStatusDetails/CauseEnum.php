<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails;

enum CauseEnum: string
{
    case AccessExpired = 'access_expired';
    case InstitutionRequirement = 'institution_requirement';
    case Unspecified = 'unspecified';
}

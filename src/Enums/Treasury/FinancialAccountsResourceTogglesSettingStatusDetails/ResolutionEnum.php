<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails;

enum ResolutionEnum: string
{
    case ContactStripe = 'contact_stripe';
    case ProvideInformation = 'provide_information';
    case RemoveRestriction = 'remove_restriction';
}

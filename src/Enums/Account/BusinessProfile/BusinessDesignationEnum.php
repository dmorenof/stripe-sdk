<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\BusinessProfile;

enum BusinessDesignationEnum: string
{
    case LgbtqiOwnedBusiness = 'lgbtqi_owned_business';
    case MinorityOwnedBusiness = 'minority_owned_business';
    case NoneOfTheseApply = 'none_of_these_apply';
    case PreferNotToAnswer = 'prefer_not_to_answer';
    case WomenOwnedBusiness = 'women_owned_business';
}

<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardholderRequirements;

enum PastDueEnum: string
{
    case CompanytaxId = 'company.tax_id';
    case IndividualcardIssuinguserTermsAcceptancedate = 'individual.card_issuing.user_terms_acceptance.date';
    case IndividualcardIssuinguserTermsAcceptanceip = 'individual.card_issuing.user_terms_acceptance.ip';
    case Individualdobday = 'individual.dob.day';
    case Individualdobmonth = 'individual.dob.month';
    case Individualdobyear = 'individual.dob.year';
    case IndividualfirstName = 'individual.first_name';
    case IndividuallastName = 'individual.last_name';
    case Individualverificationdocument = 'individual.verification.document';
}

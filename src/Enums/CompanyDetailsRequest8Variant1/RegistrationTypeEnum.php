<?php

declare(strict_types=1);

namespace StripeSDK\Enums\CompanyDetailsRequest8Variant1;

enum RegistrationTypeEnum: string
{
    case Empty_ = '';
    case ChEin = 'ch_ein';
    case DeHrb = 'de_hrb';
    case DkCvr = 'dk_cvr';
    case EsCif = 'es_cif';
    case FiTunnus = 'fi_tunnus';
    case FrSiren = 'fr_siren';
    case FrSiret = 'fr_siret';
    case ItRea = 'it_rea';
    case NlKvk = 'nl_kvk';
    case NoOrgNumber = 'no_org_number';
    case NoPno = 'no_pno';
    case SeOrgNumber = 'se_org_number';
    case SePno = 'se_pno';
    case UkCrn = 'uk_crn';
}

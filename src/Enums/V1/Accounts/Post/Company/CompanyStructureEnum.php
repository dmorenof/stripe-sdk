<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Company;

enum CompanyStructureEnum: string
{
    case Empty_ = '';
    case FreeZoneEstablishment = 'free_zone_establishment';
    case FreeZoneLlc = 'free_zone_llc';
    case GovernmentInstrumentality = 'government_instrumentality';
    case GovernmentalUnit = 'governmental_unit';
    case IncorporatedNonProfit = 'incorporated_non_profit';
    case IncorporatedPartnership = 'incorporated_partnership';
    case LimitedLiabilityPartnership = 'limited_liability_partnership';
    case Llc = 'llc';
    case MultiMemberLlc = 'multi_member_llc';
    case PrivateCompany = 'private_company';
    case PrivateCorporation = 'private_corporation';
    case PrivatePartnership = 'private_partnership';
    case PublicCompany = 'public_company';
    case PublicCorporation = 'public_corporation';
    case PublicPartnership = 'public_partnership';
    case RegisteredCharity = 'registered_charity';
    case SingleMemberLlc = 'single_member_llc';
    case SoleEstablishment = 'sole_establishment';
    case SoleProprietorship = 'sole_proprietorship';
    case TaxExemptGovernmentInstrumentality = 'tax_exempt_government_instrumentality';
    case UnincorporatedAssociation = 'unincorporated_association';
    case UnincorporatedNonProfit = 'unincorporated_non_profit';
    case UnincorporatedPartnership = 'unincorporated_partnership';
}

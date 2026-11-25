<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\Persons\ByPerson\Post\UsCfpbData\EthnicityDetails;

enum DetailsEthnicityEnum: string
{
    case Cuban = 'cuban';
    case HispanicOrLatino = 'hispanic_or_latino';
    case Mexican = 'mexican';
    case NotHispanicOrLatino = 'not_hispanic_or_latino';
    case OtherHispanicOrLatino = 'other_hispanic_or_latino';
    case PreferNotToAnswer = 'prefer_not_to_answer';
    case PuertoRican = 'puerto_rican';
}

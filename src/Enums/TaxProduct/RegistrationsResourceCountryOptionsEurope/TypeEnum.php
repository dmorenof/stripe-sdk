<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsEurope;

enum TypeEnum: string
{
    case Ioss = 'ioss';
    case OssNonUnion = 'oss_non_union';
    case OssUnion = 'oss_union';
    case Standard = 'standard';
}

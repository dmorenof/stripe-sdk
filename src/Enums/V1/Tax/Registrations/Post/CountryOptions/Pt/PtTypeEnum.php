<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Pt;

enum PtTypeEnum: string
{
    case Ioss = 'ioss';
    case OssNonUnion = 'oss_non_union';
    case OssUnion = 'oss_union';
    case Standard = 'standard';
}
